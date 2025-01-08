@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
    <div class="home-page">
        
        <section class="home-section">
            <h1>Your Career Journey Starts Here!</h1>
            <h3>HiLCoE's unofficial Job, Internship, and Apprenticeship Opportunities</h3>
            <div class="scroll-arrow" id="scrollArrow">
                <!-- Arrow SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-width="2" d="M12 4v16m0 0l-4-4m4 4l4-4" />
                </svg>
            </div>
        </section>
        
        <!-- Job Openings Section -->
        <section class="openings-section">
            <h3>Check Out Some Recent Openings</h3>
            <div class="opening-card">
                <img src="{{ asset('images/forum-bg.png') }}" alt="" load="lazy">
                <div>
                    <h1>Intern Software Engineer</h1>
                    <p>Meow Meow Solutions</p>
                    <p>Addis Ababa, Ethiopia</p>
                    <p>Summer, 2021</p>
                </div>
            </div>
            <div class="opening-card">
                <img src="{{ asset('images/techday_3baaef0ed6feb9849178.webp') }}" alt="" load="lazy">
                <div>
                    <h1>Intern Software Engineer</h1>
                    <p>Meow Meow Solutions</p>
                    <p>Addis Ababa, Ethiopia</p>
                    <p>Summer, 2021</p>
                </div>
            </div>
            <div class="opening-card">
                <img src="{{ asset('images/logo.jpg') }}" alt="" load="lazy">
                <div>
                    <h1>Intern Software Engineer</h1>
                    <p>Meow Meow Solutions</p>
                    <p>Addis Ababa, Ethiopia</p>
                    <p>Summer, 2021</p>
                </div>
            </div>
            
            <span><a href="joblisting">see more > </a></span>
        </section>
        <!-- Announcements Section -->
        <section class="announcements-section">
            <span>
                <h2>Announcements</h2>
                <div class="line"></div>
                <h2>subscribe to our news letter </h2>
            </span>
            <div id="announce-container">
                <section>
                    <div class="announcement">
                        <img src="{{ asset('images/dPpb6vgo9pj77jOL8uneYfbLtIA9cjFrJCAO4iAw.png') }}" alt="Cheese Image">
                        <div class="announcement-content">
                            <h2>13. Dec 2024</h2>
                            <p>Don't know what to add</p>
                        </div>
                    </div>
                    <div class="announcement">
                        <img src="{{ asset('images/techday_3baaef0ed6feb9849178.webp') }}" alt="Cheese Image">
                        <div class="announcement-content">
                            <h2>13. Dec 2024</h2>
                            <p>Don't know what to add</p>
                        </div>
                    </div>
                </section>
                
                <div class="subscribe">
                    <x-email-svg />
                    <input type="text" placeholder="Email Address" />
                    <button>Subscribe</button>
                </div>
            </div>
            
        </div>
    </section>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script>
        let lastScrollTop = 0; // Keeps track of the last scroll position
        const arrow = document.getElementById('scrollArrow');

        // Function to show/hide the arrow based on scroll direction
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Scrolling down
                arrow.style.opacity = '0'; // Hide arrow
            } else {
                // Scrolling up
                arrow.style.opacity = '1'; // Show arrow
            }
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
        });
    </script>
@endsection
