<?php

namespace App\Http\Controllers;

use App\Models\DiscussionForum;
use App\Models\forum_post_image;
use App\Models\ForumPost;
use App\DTOs\UserDTO;
use App\DTOs\ImageDTO;
use App\DTOs\ForumDTO;
use App\DTOs\PostDTO;
use App\DTOs\FeedbackDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use UserDTO as GlobalUserDTO;


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

        return redirect()->back()->with('message', 'Posted successfully!');
    }
    public function getPosts()
    {
        $forums = DiscussionForum::with([
            'postsWithImages.forum_images',
            'postsWithImages.user',
            'postsWithImages.feedback.user',
        ])
            ->orderBy('created_at', 'desc')
            ->get();

        $posts = $forums->map(function ($forum) {
            $forumPosts = $forum->postsWithImages->map(function ($post) {
                $userDTO = new UserDTO(
                    $post->user->name,
                    $post->user->getRoleNames()->first(),
                    $post->user->profile_picture
                );

                $images = $post->forum_images->map(function ($image) {
                    return new ImageDTO($image->image);
                })->toArray();

                $feedback = $post->feedback->map(function ($feedback) {
                    $feedbackUser = new UserDTO(
                        $feedback->user->name,
                        '', 
                        $feedback->user->profile_picture
                    );

                    return new FeedbackDTO($feedback->comment_id, $feedback->content, $feedbackUser);
                })->toArray();

                return new PostDTO(
                    $post->post_id,
                    $post->content,
                    $userDTO,
                    $images,
                    $post->created_at->format('l,Y-m-d H:i'),
                    $feedback
                );
            })->toArray();

            return new ForumDTO(
                $forum->topic,
                $forum->created_at->format('Y-m-d H:i'),
                $forumPosts
            );
        });

        return view('Discussion-Forum-page',['posts' => $posts]);
    }
    public function trygetPosts() //this just what i use for testing fetched data(see them page1).
    {
        // $posts = ForumPost::pluck('content');
        $posts = DiscussionForum::with(['postsWithImages.forum_images', 'postsWithImages.user', 'postsWithfeedback.feedback.user'])->get();
        return (['posts' => $posts]);
    }

    public function index()
    {
        // Retrieve all forums with their posts, images, and user data
        $forums = DiscussionForum::with(['postsWithImages.user', 'postsWithImages.forum_images', 'postsWithfeedback.feedback.user'])
            ->orderBy('created_at', 'desc')->get();

        return view('Discussion-Forum-page', compact('forums'));
    }
}
