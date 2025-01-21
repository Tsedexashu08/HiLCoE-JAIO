<?php

namespace App\Http\Controllers;

use App\Models\DiscussionForum;
use App\Models\forum_post_image;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\json;

class DiscussionForumController extends Controller
{

    public function addPost(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'content' => 'required',
            'image' => 'array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480', // 20MB
        ]);

        $topic = DiscussionForum::where('topic', $request->topic)->first();

        // Create the topic if it doesn't exist
        if (!$topic) {
            $topic = DiscussionForum::create([
                'topic' => $request->topic,
            ]);
        }

        $forum_id = $topic->forum_id;

        // Create the post
        $post = ForumPost::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'forum_id' => $forum_id,
        ]);
        // var_dump($post->id);
        // Process the uploaded images
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('forum_images', 'public');
                forum_post_image::create([
                    'post_id' => $post->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->back()->with('message', 'posted succesfully');
    }

    public function getPosts()
    {
        // Eager load discussions, their posts, images, and user relationships
        $forums = DiscussionForum::with([
            'postsWithImages.forum_images',
            'postsWithImages.user',
            'postsWithImages.feedback.user' // Ensure feedback is eager loaded(just means its loaded together with its relatioships).
        ])
            ->orderBy('created_at', 'desc')
            ->get();

        // Map the forums to a structured format
        $posts = $forums->map(function ($forum) {
            return [
                'topic' => $forum->topic,
                'created_at' => $forum->created_at->format('Y-m-d H:i'), // Forum created_at
                'posts' => $forum->postsWithImages->map(function ($post) {
                    return [
                        'post_id' => $post->post_id,
                        'content' => $post->content,
                        'user' => [
                            'name' => $post->user->name,
                            'role' => $post->user->getRoleNames()->first(),
                            'profile_picture' => $post->user->profile_picture,
                        ],
                        'images' => $post->forum_images->map(function ($image) {
                            return $image->image;
                        }),
                        'created_at' => $post->created_at->format('l,Y-m-d H:i'), // Post created_at
                        'feedback' => $post->feedback->map(function ($feedback) {
                            return [
                                'comment_id' => $feedback->id, // Use the correct ID property
                                'content' => $feedback->content,
                                'user' => [
                                    'name' => $feedback->user->name,
                                    'profile_picture' => $feedback->user->profile_picture,
                                ],
                                // 'created_at' => $feedback->created_at->format('Y-m-d H:i'), // Feedback created_at
                            ];
                        }),
                    ];
                }),
            ];
        });

        return view('Discussion-Forum-page', ['posts' => $posts]);
    }

    public function trygetPosts() //this just what i use for testing fetched data(see them page1).
    {
        // $posts = ForumPost::pluck('content');
        $posts = DiscussionForum::with(['postsWithImages.forum_images', 'postsWithImages.user', 'postsWithfeedback.feedback.user'])->get();
        return (compact('posts'));
    }

    public function index()
    {
        // Retrieve all forums with their posts, images, and user data
        $forums = DiscussionForum::with(['postsWithImages.user', 'postsWithImages.forum_images', 'postsWithfeedback.feedback.user'])
            ->orderBy('created_at', 'desc')->get();

        return view('Discussion-Forum-page', compact('forums'));
    }
}
