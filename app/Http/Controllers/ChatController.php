<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function OpenChats(Request $request)
    {
        $users = User::all();
        $chatId = $request->session()->get('chat_id'); // Retrieve chat ID from session

        return view('faculty-interaction', ['users' => $users, 'chat_id' => $chatId]);
    }

    public function initiateChat(Request $request)
    {
        // Validate the incoming request.
        $request->validate([
            'user_id_1' => 'required|exists:users,id',
            'user_id_2' => 'required|exists:users,id',
        ]);

        // Check for an existing chat session (checking if the two users have chatted before).
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
        if ($chat) {
            // Check if chat ID is valid
            $request->session()->put('chat_id', $chat->id);
        }
        
      
        $request->session()->put('chat_id', $chat->id);
        // Store chat ID in session

        // Return the chat ID and existingChat status as JSON
        return response()->json(['chat_id' => $chat->id, 'existing_chat' => $existingChat]);
    }
}
