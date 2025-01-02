<style>
    .card {
        width: 100%;
        max-width: 710px;
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 10px;
        background-color: #fffffe;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        transition: .5s;
        border: 4px solid transparent;
        box-shadow: 2px 2px 15px rgba(0, 0, 0, .1);
        padding: 20px
    }

    .button,
    .image {
        background-color: #1468bf;
        transition: .5s
    }

    .card::before {
        content: "";
        width: 100%;
        height: 210px;
        position: absolute;
        top: 0;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom: 3px solid #fefefe;
        background-image: url('{{ asset('images/bg.png') }}');
        background-size: cover;
        transition: .3s
    }

    .card * {
        z-index: 1
    }

    .image {
        overflow: width: 100%;
        max-width: 300px;
        height: auto;
        aspect-ratio: 1;
        border-radius: 50%;
        border: 5px solid #fefefe;
        margin-top: 30px
    }

    .card-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        transition: .5s
    }

    .card-info span {
        font-weight: 600;
        font-size: 24px;
        color: #161a42;
        margin-top: 15px;
        line-height: 5px
    }

    .card-info p {
        color: rgba(0, 0, 0, .5)
    }

    .button {
        text-decoration: none;
        color: #fff;
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid #fff
    }

    .custom-file-upload,
    .submit-button {
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color .2s
    }

    .card:hover .card-info {
        transform: translate(0, 15%)
    }

    .card:hover .image {
        scale: 1.1;
        box-shadow: 2px 12px 15px rgba(0, 0, 0, .1);
        border: 6px double #fefefe
    }

    .image img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%;
        border-radius: 50%
    }

    .custom-file-upload {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 6px 12px;
        background-color: #007bff;
        border: none;
        border-radius: 4px
    }

    .custom-file-upload:hover {
        background-color: #0056b3
    }

    #file {
        display: none
    }

    .submit-button {
        display: none;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #28a745;
        border: none;
        border-radius: 4px
    }

    .submit-button:hover {
        background-color: #218838
    }

    .custom-file-upload img {
        width: 35px;
        height: auto
    }

    @media (max-width:768px) {
        .card {
            padding: 10px
        }

        .card-info span {
            font-size: 20px
        }

        .card-info p,
        .custom-file-upload {
            font-size: 14px
        }

        .image {
            width: 80%;
            max-width: 200px
        }
    }
</style>

<div class="card">
    <div class="image">
        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture">
    </div>
    <div class="card-info">
        <span>{{ Auth::user()->name }}</span>
        <p>{{ Auth::user()->role }}</p>
    </div>
    <form id="upload-form" action="{{ route('profile.picture.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <label class="custom-file-upload">
            <input type="file" name="profile_picture" id="file" required />
            <img src="{{ asset('images/changeprofile.png') }}" alt="Upload Icon"> Upload Photo
        </label>
        <button type="submit" class="submit-button">Submit</button>
    </form>
</div>
<script>
    function submitFormOnFileSelect() {
        var fileInput = document.getElementById('file');
        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                document.getElementById('upload-form').submit();
            }
        });
    }
    document.addEventListener('DOMContentLoaded', submitFormOnFileSelect);
</script>
