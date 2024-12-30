<div class="popup-form" id="popup-form">
    <link rel="stylesheet" href="{{ asset('css/add-post.css') }}">
    <h2>Start a new discussion</h2>
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
        document.getElementById('post').addEventListener('click', function() {
            const addpost = document.getElementById('popup-form');
            addpost.style.display = 'hidden';
        });
    });
</script>
