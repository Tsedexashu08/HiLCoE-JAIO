@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/discussion-forum-page.css') }}">
    <div class="forum-container">
        <div class="forum-card">
            <section id="forum-header">
                <span>
                    <img src="" alt="" id="user-image">
                </span>
                <span>
                    <h1>user-name</h1>
                    <span>user-role</span>
                </span>
            </section>
            <section class="forum-content">
                <h2>Discussion Forum</h2>
                <p>Ask questions, share your knowledge and experience, and learn from others. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Fuga, explicabo? Omnis, ex consequuntur hic fugiat mollitia dolore
                    dignissimos quam esse vel soluta eaque dolorum id! Velit ea molestiae nulla dolor. Sit totam quas
                    similique omnis est facere porro vitae itaque, harum repellendus quae consequatur perferendis esse
                    voluptas distinctio eligendi eaque.</p>
                <img src="" alt="postimg" id="forum-image">
            </section>
        </div>
    </div>
@endsection
