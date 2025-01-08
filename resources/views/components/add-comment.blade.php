<link rel="stylesheet" href="{{ asset('css/discussion-forum-page.css') }}">
<div id="add-comment">
    <div class="comment-section">
        <div class="comment">
            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="" class="avatar">
            <textarea placeholder="Write your comment..." class="comment-input"></textarea>
            <button id="post-button">
                ↑ Post
            </button>
        </div>
    </div>
    @include('components.comment')
</div>

