<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <style>
        .profile-card {
            width: 550px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }
        .cover-photo {
            width: 100%;
            height: 100px;
            background: url('cover-photo.jpg') no-repeat center center;
            background-size: cover;
        }
        .profile-card header {
            padding: 20px;
            background-color: #0073b1;
            color: white;
            position: relative;
        }
        .profile-card header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 5px solid white;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        .profile-card header h2 {
            margin: 70px 0 10px 0;
            font-size: 22px;
        }
        .profile-card header p {
            color: #fff;
            margin: 0;
        }
        .profile-card .info {
            padding: 20px;
            display: flex;
        }
        .profile-card .info p {
            color: #666;
            margin: 5px 0;
        }
        .profile-card .info .contact a {
            display: block;
            color: #0073b1;
            text-decoration: none;
            margin: 5px 0;
        }
        .profile-card .info .contact a:hover {
            text-decoration: underline;
        }
        .profile-card .info .actions {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }
        .profile-card .info .actions button {
            flex: 1;
            margin: 0 5px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #0073b1;
            color: white;
            font-size: 14px;
        }
        .profile-card .info .actions button:hover {
            background-color: #005983;
        }
        .profile-card .info .about {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="cover-photo"></div>
        <header>
            <img src="{{asset('images/dPpb6vgo9pj77jOL8uneYfbLtIA9cjFrJCAO4iAw.png')}}" alt="Profile Picture">
            <h2>Mohammed Mammar-Kouadri</h2>
            <p>Civil Engineering | Graphic Designer</p>
            <div class="info">
                <p>Le Havre, France</p>
            <div class="contact">
                <a href="tel:+33605705">+33-605-705 (Mobile)</a>
                <a href="mailto:mammarkouadri@gmail.com">mammarkouadri@gmail.com</a>
                <a href="https://www.linkedin.com/in/mohammed-mammar-kouadri" target="_blank">LinkedIn Profile</a>
            </div>
        </header>
            <div class="actions">
                <button>Connect</button>
                <button>Message</button>
                <button>More</button>
            </div>
            <div class="about">
                <h3>About</h3>
                <p>Graphic Designer at Freelancer</p>
                <p>Civil Engineering at CE-Havre University</p>
                <p>600+ connections</p>
            </div>
        </div>
    </div>
</body>
</html>
