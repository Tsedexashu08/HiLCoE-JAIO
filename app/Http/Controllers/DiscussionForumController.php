<?php

namespace App\Http\Controllers;

use App\Models\DiscussionForum;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\json;

class DiscussionForumController extends Controller
{
    public function index()
    {
        return view('discussion-forum.index');
    }

    public function addPost(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'content' => 'required',
        ]);
        $topic = DiscussionForum::where('topic', $request->topic)->first();

        //creating the topic if it doesn't exist
        if (!$topic) {
            $topic = DiscussionForum::create([
                'topic' => $request->topic,
            ]);
        }
        $forumid=$topic->forum_id;
       ForumPost::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'forum_id' => $forumid,
        ]);

        return response()->json(['message' => 'Topic created successfully']);
    }
}
