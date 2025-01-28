@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/job-listing-page.css') }}">
    <div class="job-listing-page" >
        <div class="search-panel" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url('{{asset('images/techday_3baaef0ed6feb9849178.webp')}}');">
            <section class="heading" style="display: flex; align-items: center;">
                <h1>Hi there </h1>
                <h1>, {{ Auth::user()->name.' ' }}! </h1>
                <x-waving-hand/>
            </section>
            <h1>search for opportunities</h1>
            <a href="{{route('admin.addjob')}}">add job</a>
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
                    </section>
                    <span id="apply">
                        <button>apply</button>
                    </span>
                </section>
            </div>
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
