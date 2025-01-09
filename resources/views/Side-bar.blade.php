<div class="account-page">
    <div class="side-nav">
        <div class="image">
            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="profile-picture">
        </div>
        <section class="credentials">
            <span>{{ Auth::user()->name }}</span>
            <h2>{{ Auth::user()->email }}</h2>
        </section>
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
