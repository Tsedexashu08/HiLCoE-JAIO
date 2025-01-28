<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumFeedback;
use Illuminate\Support\Facades\Auth;

class FeedBackController extends Controller
{
   public function AddComment(Request $request)
   {
      $request->validate([
         'post_id' => 'required|integer',
         'content' => 'required|string',
      ]);

      $comment = ForumFeedback::create([
         'content' => $request->content,
         'user_id' => Auth::user()->id,
         'post_id' => $request->post_id,
      ]);
      // Return a JSON response with the newly created comment(so well use it in js api call to not reload page n add cmnt dynamically.)
      return response()->json([
         'comment' => $comment,
         'user' => [
            'name' => Auth::user()->name,
            'profile_picture' => Auth::user()->profile_picture,
         ],
      ]);
   }
   public function LikePost(Request $request) {}
}
