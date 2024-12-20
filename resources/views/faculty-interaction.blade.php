@extends('dashboard')
@section('content')
    <style>
        .chat-box h2,
        .chat-preview {
            text-align: center;
            padding: 15px
        }

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
            width: 30%;
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
            border-bottom: 1px solid #ddd;
            display: flex;
            gap: 4%;
            align-items: center
        }

        .chat-preview img {
            border: 2px solid #005a9c;
            border-radius: 50%;
            width: 80px;
            height: 75px
        }

        #propic {
            object-fit: fill;
            object-position: center
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
            padding: 20px;
            background-color: #f3f3f3da;
            align-items: center
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 25px;
            margin-right: 10px;
            color: #333
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

        @media (max-width:640px) {
            section {
                display: none
            }

            #propic {
                display: inline
            }

            .chat-sidebar {
                width: fit-content
            }
        }

        @media (max-width:768px) {
            section {
                display: none
            }

            #propic {
                display: inline
            }

            .chat-sidebar {
                width: fit-content
            }
        }
    </style>

    <div class="chat">
        <!-- Main Chat Container -->
        <div class="chat-container">
            <!-- Sidebar -->
            <div class="chat-sidebar">
                <div class="chat-preview" data-user="Nati Zee">
                    <section id="propic">
                        <img src="{{ asset('images/bg.png') }}" alt="pro pic">
                    </section>
                    <section>
                        <h4>Meow Meow</h4>
                        <p>WazAAAAAP</p>
                    </section>
                </div>
                <div class="chat-preview" data-user="Nati Zee">
                    <section id="propic">
                        <img src="{{asset('images/dPpb6vgo9pj77jOL8uneYfbLtIA9cjFrJCAO4iAw.png')}}" alt="Profile Picture" />                    </section>
                    <section>
                        <h4>Nati Zee</h4>
                        <p>Palmer is Here</p>
                    </section>
                </div>
            </div>

            <!-- Chat Box -->
            <div class="chat-box">
                <h2>Meow Meow</h2>
                <div class="chat-messages"></div>
                <div class="chat-input">
                    <input type="text" placeholder="Type a message...">

                    <button
                        class="col-span-2 flex items-center justify-center bg-gray-300 p-2 ring-2 ring-slate-200 duration-300 hover:ring-slate-100 rounded-md">
                        <svg viewBox="0 0 612 512" height="20px" xmlns="http://www.w3.org/2000/svg" class="fill-white">
                            <path
                                d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z">
                            </path>
                        </svg>
                    </button>


                </div>
            </div>
        </div>
    </div>
@endsection
