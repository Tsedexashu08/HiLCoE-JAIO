<link rel="stylesheet" href="{{ asset('css/discussion-forum-page.css') }}">
<div id="add-comment-{{ $postId }}" class="add-comment" style="display: none;">
    <div class="comment-header text-center py-2 border-b border-gray-900 mb-4">
        <span class="text-lg font-semibold text-gray-800">Comments</span>
    </div>
    <div class="flex justify-center items-center bg-gray-200 h-fit p-6 m-2">
        <div class="comment-section">
            <div class="comment">
                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="" class="avatar">
                <textarea placeholder="Write your comment..." class="comment-input"></textarea>
                <button id="post-button" data-post-id="{{ $postId }}">
                    ↑ Post
                </button>
            </div>
        </div>
    </div>

    <!-- Display Existing Comments -->
    @foreach ($comments as $comment) <!-- Assuming $comments is passed to this component -->
        <div class="flex justify-center items-center bg-gray-200 h-fit p-6 m-2">
            <div id="toast-notification" class="w-full max-w-2xl p-10 text-gray-900 bg-white rounded-lg shadow" role="alert">
                <div class="flex items-center mb-4">
                    <div class="relative inline-block shrink-0">
                        <div class="w-16 h-16 rounded-full bg-green-600 flex items-center justify-center text-white font-bold text-2xl overflow-hidden">
                            <img src="{{ asset('storage/' . $comment->user->profilePicture) }}" alt="">
                        </div>
                    </div>
                    <div class="ml-4 text-sm font-normal">
                        <div class="text-sm font-semibold text-gray-900">{{ $comment->user->name }}</div>
                        <div class="text-sm font-normal">{{ $comment->content }}</div>
                        {{-- <span class="text-xs font-medium text-blue-600">{{ $comment->created_at->diffForHumans() }}</span> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>