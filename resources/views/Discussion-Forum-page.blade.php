@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/discussion-forum-page.css') }}">
    <div class="forum-page">
        <div class="forum-header" style="background-image: url('{{ asset('images/forum-bg.png') }}');">
            <h1>Welcome to HiLCoE's Discussion Forum</h1>
            <p id="intro">Ask questions, share your knowledge and experience, and learn from others.</p>
            <div class="forum-search">
                <input type="text" placeholder="Search for a topic">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>

            <div class="add-post">
                <span>
                    <img src="{{ asset('images/forum-post.png') }}" alt="">
                </span>
                <section>
                    <h2>Start a new discussion</h2>
                    <p>Have a topic you would like to discuss or Ask questions, share your knowledge and experience, and
                        learn from others.</p>
                </section>
                <button>add post</button>
            </div>
        </div>
        <div class="forum-container">
            <div class="forum-card">
                <section id="forum-header">
                    <span>
                        <img src="" alt="" id="user-image">
                    </span>
                    <span>
                        <h1>user-name</h1>
                        <span>user-role- posted at : wednesday minamn...</span>
                    </span>
                </section>
               
                <section class="forum-content">
                    <h2>Discussion Forum</h2>
                    <p>Ask questions, share your knowledge and experience, and learn from others. Lorem ipsum dolor sit
                        amet,
                        consectetur adipisicing elit. Fuga, explicabo? Omnis, ex consequuntur hic fugiat mollitia dolore
                        dignissimos quam esse vel soluta eaque dolorum id! Velit ea molestiae nulla dolor. Sit totam quas
                        similique omnis est facere porro vitae itaque, harum repellendus quae consequatur perferendis esse
                        voluptas distinctio eligendi eaque.</p>
                    <img src="" alt="postimg" id="forum-image">
                </section>
                <span id="likes-comments">
                    <x-like-button />
                </span>
            </div>
            
        </div>
        <x-comment-section />
    </div>
@endsection
