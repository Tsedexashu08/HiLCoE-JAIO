<div class="popup-form" id="popup-form">
    <link rel="stylesheet" href="{{ asset('css/add-post.css') }}">
    <span>
        <h2>Start a new discussion</h2>
        <button id="close-button">
            <svg width="24" viewBox="0 0 24 24" height="24" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path>
            </svg>
        </button>
    </span>
    <form action="{{ route('discussion.addPost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="popup-content">
            <section>
                <label for="topic">Title of discussion</label>
                <input type="text" placeholder="Topic of discussion" name="topic" value="{{ old('topic') }}">
                <textarea cols="30" rows="10" placeholder="Write your post here" name="content">{{ old('content') }}</textarea>
            </section>
            <section>
                <label for="image[]">Upload images</label>
                @include('components.file-upload')
            </section>
        </section>
          <!-- Error Display Area -->
       
          <div class="alert alert-danger" >
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>@include('components.error-popup',['message'=> $error ])</li>
                  @endforeach
              </ul>
          </div>
      
       <!-- Success Message -->
       @if (session('message'))
       <div class="alert alert-success">
           {{ session('message') }}
       </div>
   @endif
        <button type="submit" id="post">Post</button>
    </form>
</div>