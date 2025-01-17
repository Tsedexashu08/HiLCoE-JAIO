<div>
    <link rel="stylesheet" href="{{ asset('css/file-upload.css') }}">
    <div class="file-container">
        <div class="file-header" id="file-header">
            <div id="image-preview" class="image-preview"></div>
            <svg id="svg-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M7 10C7.43285 10 7.84965 10.0688 8.24006 10.1959M12 12V21M12 12L15 15M12 12L9 15"
                    stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p id="browsemsg">Browse File to upload!</p>
        </div>
        <label for="file" class="file-footer">
            <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
            </svg>
            <p id="file-count">Not selected file</p>
        </label>
        <input id="file" type="file" name="profile_picture" accept="image/*" onchange="updateFileCount()">
    </div>
</div>

<script>
    function updateFileCount() {
        const input = document.getElementById('file');
        const fileCount = input.files.length;
        const fileCountText = fileCount > 0 ? `${fileCount} file(s) selected` : 'Not selected file';
        document.getElementById('file-count').textContent = fileCountText;

        const previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = '';

        // Hide SVG and browse message on file select
        if (fileCount > 0) {
            document.getElementById('svg-icon').style.display = 'none';
            document.getElementById('browsemsg').style.display = 'none';
        }

        for (let i = 0; i < input.files.length; i++) {
            const file = input.files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('thumbnail');
                previewContainer.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }
</script>

<style>
    .file-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-height:65% ;
    }

    .file-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-height: 90%;
    }

    .image-preview {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        object-fit: cover;
        object-position: center;
    }

    .thumbnail {
        border-radius: 50%;
        width: 75%;
        max-height: 75%;
        object-fit: cover;
        object-position: center;
        border: 4px double #ccc;
    }
</style>
