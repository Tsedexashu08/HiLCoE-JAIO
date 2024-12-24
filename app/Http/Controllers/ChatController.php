<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function OpenChats()
    {
        $users = User::all();
        return view('faculty-interaction', ['users' => $users]);
    }

    public function initiateChat(Request $request)
    {
        // Validate the incoming request(checkin if they exist).
        $request->validate([
            'user_id_1' => 'required|exists:users,id',
            'user_id_2' => 'required|exists:users,id',
        ]);

        // Check for an existing chat session (check if the two users have chatted before).
        $chat = Chat::where(function ($query) use ($request) {
            $query->where('user_id_1', $request->user_id_1)->where('user_id_2', $request->user_id_2);
        })
            ->orWhere(function ($query) use ($request) {
                $query->where('user_id_1', $request->user_id_2)->where('user_id_2', $request->user_id_1);
            })
            ->first();

        $existingChat = true;

        // If the chat doesn't exist, create a new chat session.
        if (!$chat) {
            $chat = Chat::create([
                'user_id_1' => $request->user_id_1,
                'user_id_2' => $request->user_id_2,
            ]);
            $existingChat = false;
        }

        // Return the chat ID and existingChat status as JSON(which we will retrieve in faculty-interaction page).
        return response()->json(['chat_id' => $chat->chat_id, 'existing_chat' => $existingChat]);
    }
    public function sendMessage(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'chat_id' => 'required|exists:chat,chat_id',
            'sender_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        // Retrieve the chat to ensure it exists
        $chat = Chat::find($request->chat_id);

        // Ensure the chat exists(just in case smtn goes wrong in the intiate chat API(ik its stupid..bare with me))
        if (!$chat) {
            return response()->json(['error' => 'Chat not found'], 404);
        }

        // Create and store the message
        $message = ChatMessage::create([
            'chat_id' => $request->chat_id,
            'sender_id' => $request->sender_id,
            'content' => $request->content,
        ]);

        // Return the message data as JSON
        return response()->json(['message' => $message]);
    }
    public function LoadMessages(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|exists:chat,chat_id',
        ]);

        // Fetch the chat and its associated messages(with the relationship we defined ...in our chat model ;) )
        $chat = Chat::with('messages')
            ->where('chat_id', $request->chat_id)
            ->first();

        // Check if the chat exists
        if (!$chat) {
            return response()->json(['message' => 'Chat not found'], 404);
        }

        // Retrieve messages from the chat
        $messages = $chat->messages;

        // Format the created_at attribute directly
        foreach ($messages as $message) {
            $message->time = \Carbon\Carbon::parse($message->created_at)->format('H:i');
        }

        return response()->json(['messages' => $messages]);
    }
}
