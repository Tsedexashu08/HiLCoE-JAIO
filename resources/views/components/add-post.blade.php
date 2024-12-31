<div class="popup-form" id="popup-form">
    <link rel="stylesheet" href="{{ asset('css/add-post.css') }}">
    <span>
        <h2>Start a new discussion</h2>
        <button id="close-button"><svg width="24" viewBox="0 0 24 24" height="24"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path
                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                </path>
            </svg></button>
    </span>
    <section class="popup-content">
        <section>
            <label for="topic">Title of discussion</label>
            <input type="text" placeholder="Topic of discussion" name="topic">
            <textarea cols="30" rows="10" placeholder="Write your post here" name="content"></textarea>
        </section>
        <section>
            <label for="image">Upload image</label>
            <x-file-upload name="image" />
        </section>
    </section>
    <button id="post">Post</button>
</div>
<script>
    document.getElementById('post').addEventListener('click', function() {
        const topic = document.querySelector('input[name=topic]').value;
        const content = document.querySelector('textarea[name=content]').value;
        const image = document.querySelector('input[name=image]').files[0];

        const formData = new FormData();
        formData.append('topic', topic);
        formData.append('content', content);
        formData.append('image', image);

        fetch('{{ route('discussion.addPost') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                document.getElementById('popup-form').remove();
                // Optionally, update the UI with the new post
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
       
      
    });
</script>
