@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/job-listing-page.css') }}">
    <div class="job-listing-page">
        <div class="search-panel">
            <h1>search for oppurtunities</h1>
            <div class="job-search">
                <div class="search-bar">
                    <input type="text" placeholder="  Write job title here">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
                <label>#searches found</label>
            </div>
        </div>
        <div class="search-list">
            <div class="job-card">
                <span class="logo">
                    <img src="{{asset('images/logo.jpg')}}" alt="" id="company-logo">
                </span>
                <section id="job-header">
                    <span>
                        <h1>company-name</h1>
                        <span>job-title</span>
                    </span>
                    <section class="job-content">
                        <h2>Job Description</h2>
                        <p>job-description</p>
                        <img src="" alt="jobimg" id="job-image">
                    </section>
                    <span id="apply">
                        <button>apply</button>
                    </span>
                </section>
            </div>
        </div>
    </div>
 </div>
@endsection
