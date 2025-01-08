{{-- @extends('profile.Account-Page')
@section('account') --}}
<style>
    .side-nav {
        position: fixed;
        width: 100%;
        max-width: 400px;
        background-color: #022C50;
        color: #fefefe;
        gap: 20px;
        padding: 40px;
        position: fixed;
        top: 0px;
        padding-top: 150px;
        left: 0;
        z-index: 2;
        height: 100vh;
    }

    .side-nav .image {
        width: 80%;
        overflow: hidden;
        max-width: 100px;
        height: auto;
        aspect-ratio: 1;
        border-radius: 50%;
        border: 5px solid #fefefe;
        margin-top: 30px
    }

    .side-nav .image img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%;
        border-radius: 50%
    }


    .side-nav span {
        font-weight: 800;
        font-size: 24px;
        margin: 20px 0;
    }

    .side-nav ul {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 30%;
    }

    .side-nav ul li {
        list-style: none;
        margin: 10px 0;
    }

    .side-nav ul li button {
        color: #fefefe;
        text-decoration: none;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .side-nav ul li button:hover {
        color: #1468BF;
    }

    #applied {
        display: none;
    }

    #updateResume {
        display: none;
        transition: all 0.5s linear;
    }
</style>


<div>
    <div class="side-nav">
        <div class="image">
            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="profile-picture">
        </div>
        <span>{{ Auth::user()->name }}</span>
        <ul>
            <li><button id="applied-careers-link">Applied Careers</button></li>
            <li><button id="resume-link">Update Resume</button></li>
            <li><button id="edit-link">Edit Account</button></li>
        </ul>
    </div>
    <div class="display">
        <div id="edit">
            @include('edit')
        </div>
        <div id="updateResume">
            @include('updateResume')
        </div>
        <div id="applied">
            <h1>Applied Careers</h1>
        </div>
    </div>

    <script>
        var applied = document.getElementById('applied');
        var edit = document.getElementById('edit');
        var resume = document.getElementById('updateResume');

        document.getElementById('applied-careers-link').addEventListener('click', function(event) {
            if (edit.style.display != 'none') {
                edit.style.display = 'none';
            } else if (resume.style.display != 'none') {
                resume.style.display = 'none';
            }
            applied.style.display = 'block';

        });

        document.getElementById('resume-link').addEventListener('click', function(event) {
            if (edit.style.display != 'none') {
                edit.style.display = 'none';
            } else if (applied.style.display != 'none') {
                applied.style.display = 'none';
            }
            resume.style.display = 'block';
        });

        document.getElementById('edit-link').addEventListener('click', function(event) {
            if (resume.style.display != 'none') {
                resume.style.display = 'none';
            } else if (applied.style.display != 'none') {
                applied.style.display = 'none';
            }
            edit.style.display = 'block';
        });
    </script>
</div>
{{-- @endsection --}}
