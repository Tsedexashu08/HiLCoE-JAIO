@extends('dashboard')
@section('content')
    <style>
        .chat-input button,
        .chat-preview {
            cursor: pointer;
            transition: background-color .3s
        }
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif
        }

        .chat-container {
            display: flex;
            width: 100dvw;
            height: 85dvh
        }

        .chat-sidebar {
            width: 25%;
            background-color: #fff;
            border-right: 1px solid #ddd;
            overflow-y: auto
        }

        .chat-container h2 {
            background-color: #fff;
            color: #00274d;
            font-size: 24px
        }

        .chat-box,
        .chat-input button {
            background-color: #00274d;
            color: #fff
        }

        .chat-preview {
            padding: 15px;
            border-bottom: 1px solid #ddd
        }

        .chat-preview:hover {
            background-color: #f0f0f0
        }

        .chat-preview h4 {
            font-size: 1rem;
            color: #333;
            margin: 0 0 5px
        }

        .chat-preview p {
            color: #777;
            font-size: .9rem;
            margin: 0
        }

        .chat-box {
            flex: 1;
            display: flex;
            flex-direction: column
        }

        .chat-box h2 {
            text-align: center;
            padding: 15px;
            border-bottom: 1px solid #005a9c;
            margin: 0
        }

        .chat-messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto
        }

        .chat-input {
            display: flex;
            padding: 10px;
            background-color: #5063f0;
            align-items: center
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-right: 10px
        }

        .chat-input button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px
        }

        .incoming-message,
        .outgoing-message {
            padding: 10px;
            margin: 5px 0;
            border-radius: 10px;
            max-width: 70%
        }

        .chat-input button:hover {
            background-color: #005a9c
        }

        @media (max-width:450px) {
            .chat-container {
                flex-direction: column
            }

            .chat-sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #ddd
            }

            .chat-input {
                flex-direction: column;
                gap: 10px
            }

            .chat-input button {
                width: 100%
            }
        }

        @media (min-width:451px) and (max-width:1024px) {
            .chat-sidebar {
                width: 30%
            }
        }

        @media (min-width:1025px) {
            .chat-sidebar {
                width: 25%
            }
        }

        .outgoing-message {
            background-color: #5063f0;
            color: #fff;
            align-self: flex-end
        }

        .incoming-message {
            background-color: #f0f0f0;
            color: #333;
            align-self: flex-start
        }
    </style>

    <div class="chat">
        <!-- Main Chat Container -->
        <div class="chat-container">
            <!-- Sidebar -->
            <div class="chat-sidebar">
                <div class="chat-preview" data-user="Meow Meow">
                    <h4>Meow Meow</h4>
                    <p>Wazzaaaaaaaap</p>
                </div>
                <div class="chat-preview" data-user="Nati Zee">
                    <h4>Nati Zee</h4>
                    <p>Palmer is Here</p>
                </div>
                <div class="chat-preview" data-user="Ye Hagere Lij">
                    <h4>Ye Hagere Lij</h4>
                    <p>Selam Naw</p>
                </div>
                <div class="chat-preview" data-user="Tsedex">
                    <h4>Tsedex</h4>
                    <p>Thats what she said</p>
                </div>
                <div class="chat-preview" data-user="Fi">
                    <h4>Fi</h4>
                    <p>i need Coffee</p>
                </div>
            </div>

            <!-- Chat Box -->
            <div class="chat-box">
                <h2>Meow Meow</h2>
                <div class="chat-messages"></div>
                <div class="chat-input">
                    <input type="text" placeholder="Type a message...">
                    <button type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection
