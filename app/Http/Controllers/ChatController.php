<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;

class ChatController extends Controller
{
    //for passing data of all users to see them in chat.
    public function OpenChats()
    {
        $users = User::all();

        return view('faculty-interaction', ['users' => $users]);
    }

    //for passing data of all users to see them in chat.
    public function OpenChat($id)
    {
        // Fetch the data based on the ID
    $data = User::findOrFail($id); // Replace with your actual model
    $users = User::all();

    return view('components.chat-box', ['data' => $data,'users'=>$users]);
    }


    public function initiateChat(Request $request)
    {
        // Validate the incoming request.
        $request->validate([
            'user_id_1' => 'required|exists:users,id',
            'user_id_2' => 'required|exists:users,id',
        ]);

        // Check for an existing chat session(checking if the two users have chatted before).
        $chat = Chat::where(function ($query) use ($request) {
            $query->where('user_id_1', $request->user_id_1)->where('user_id_2', $request->user_id_2);
        })
            ->orWhere(function ($query) use ($request) {
                $query->where('user_id_1', $request->user_id_2)->where('user_id_2', $request->user_id_1);
            })
            ->first();

        // If the chat doesn't exist, create a new chat session(uk like if the two users havent chated before).
        if (!$chat) {
            $chat = Chat::create([
                'user_id_1' => $request->user_id_1,
                'user_id_2' => $request->user_id_2,
            ]);
        }

        // Return the chat ID or chat details
        return response()->json([
            'status' => 'Chat session ready',
            'chat_id' => $chat->id,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|exists:chats,id',
            'sender_id' => 'required|exists:users,id',
            'content' => 'required|string|max:500',
        ]);

        // Find the chat by ID
        $chat = Chat::findOrFail($request->chat_id);

        // Create a new chat message
        $chatMessage = new ChatMessage();
        $chatMessage->chat_id = $chat->id;
        $chatMessage->sender_id = $request->sender_id;
        $chatMessage->content = $request->content;

        // Save the message
        $chatMessage->save();

        return response()->json([
            'status' => 'Message sent',
            'message' => $chatMessage,
        ]);
    }
}
