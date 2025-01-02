@extends('dashboard')
@section('content')
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
                <span>
                    <img src="" alt="" id="company-logo">
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

    <style>
        .job-listing-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: rgba(0, 0, 0.6, 0.4) 0 2px 4px, rgba(0, 0, 0, 0.3) 0 7px 13px -6px,
                rgba(0, 0, 0.6, 0.2) 0 -3px 0 inset;
            width: 90dvw;
            height: 100dvh;
        }

        .search-panel {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-bottom: #ccc 1px solid;
            width: 100%;
            background-color: #f9f9f9;
        }

        .search-panel h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            font-family: 'Times New Roman', Times, serif;
        }

        .search-panel label {
            font-size: 1.2em;
            margin-top: 10px;
            font-family: 'Times New Roman', Times, serif;
            color: #ccc
        }

        .search-list {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            height: 100%;
            width: 100%;
        }

        .search-bar {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 35px;
            padding: 5px 5px;
            width: 600px;
        }

        .search-bar input {
            border: none;
            outline: none;
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .search-bar button {
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .search-bar svg {
            width: 20px;
            height: 20px;
        }

        .job-card {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 5%;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 100%;
            height: 300px;
            margin: 4%;
            box-shadow: rgba(0, 0, 0.6, 0.4) 0 2px 4px, rgba(0, 0, 0, 0.3) 0 7px 13px -6px,
                rgba(0, 0, 0.6, 0.2) 0 -3px 0 inset;
                padding-left: 5%;
        }
        .job-card span img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin: 10px;
            background-color: #777777;
          
        }
    </style>
@endsection
