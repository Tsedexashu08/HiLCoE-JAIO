<style>
    #resume{
        width: 90%;
        height:80vh;
        margin: 0 auto;
        padding: 20px;
    }

    #resume h1 {
        text-align: center;
        font-family: Arial, sans-serif;
        color: #333;
    }

    #resume form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #resume input[type="file"] {
        width:100%;
        height: 20vh;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 0 20px;
    }

    #resume input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #resume input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div id="resume">
    <h1>Upload File Here</h1>
    <div class="fileUpload">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="resume" accept=".pdf,.doc,.docx">
        <input type="submit" value="Upload Resume">
    </form>
</div>
</div>