@extends('dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/faculty-interaction.css') }}">
<div class="chat">
    <div class="chat-container">
        <!-- Sidebar -->
        <div class="chat-sidebar">
            @foreach ($users as $user)
                <div class="chat-link" data-user-name="{{ $user->name }}">
                    <div class="chat-preview">
                        <section id="propic">
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="{{ $user->name }}'s profile picture">
                        </section>
                        <section>
                            <h4>{{ $user->name }}</h4>
                            <p>WazAAAAAP</p>
                        </section>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Default Chat Section -->
        <div id="default-chat-section">
            <h1>Select chat to start messaging</h1>
            <img src="{{ asset('images/pointin.png') }}" alt="">
        </div>

        <!-- Chat Box Section -->
        <div id="chat-box" style="display: none;">
            <div class="chat-box">
                <h2 id="chat-user-name">Chat User</h2>
                <div class="chat-messages">
                    <!-- Messages will appear here -->
                </div>
                <div class="chat-input">
                    <input type="text" placeholder="Type a message...">
                    <button id="send-button">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.chat-link').forEach(link => {
        link.addEventListener('click', function() {
            const defaultSec = document.getElementById('default-chat-section');
            const chatBox = document.getElementById('chat-box');

            // Hide the default chat section
            defaultSec.style.display = 'none';

            // Show the chat box
            chatBox.style.display = 'block';

            // Update the chat box with the user's data
            const userName = this.dataset.userName;
            document.getElementById('chat-user-name').textContent = userName;

            // Clear the chat messages container
            const chatMessages = document.querySelector('.chat-messages');
            chatMessages.innerHTML = ''; // Make sure this line clears the chat messages
        });
    });

    document.addEventListener('click', function(event) {
        if (event.target && event.target.id === 'send-button') {
            // Get the input field and message
            const inputField = document.querySelector('.chat-input input[type="text"]');
            const message = inputField.value.trim();

            // Check if the message is not empty
            if (message) {
                // Create a new outgoing message div
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('outgoing-message');
                messageDiv.textContent = message;

                // Append the new message to the chat messages container
                const chatMessages = document.querySelector('.chat-messages');
                chatMessages.appendChild(messageDiv);

                // Clear the input field
                inputField.value = '';

                // Optionally, scroll to the bottom of the chat messages
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        }
    });
</script>
@endsection
