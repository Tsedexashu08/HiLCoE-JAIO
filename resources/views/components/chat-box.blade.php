@extends('faculty-interaction')
@section('chat-box')
    <link rel="stylesheet" href="{{ asset('css/faculty-interaction.css') }}">
    <div class="chat-box">
        <h2>{{$data->name}}</h2>
        <div class="chat-messages">
            <div class="incoming-message ">hello tsedex</div>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Type a message...">

            <button id="send-button"
                class="col-span-2 flex items-center justify-center bg-gray-300 p-2 ring-2 ring-slate-200 duration-300 hover:ring-slate-100 rounded-md">
                <svg viewBox="0 0 612 512" height="20px" xmlns="http://www.w3.org/2000/svg" class="fill-white">
                    <path
                        d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
@endsection
