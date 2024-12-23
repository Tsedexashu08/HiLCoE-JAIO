@extends('dashboard')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/faculty-interaction.css') }}">
    <div class="chat">
        <div class="chat-container">
            <!-- Sidebar -->
            <div class="chat-sidebar">
                @foreach ($users as $user)
                    <div class="chat-link" data-user-id="{{ $user->id }}" data-user-name="{{ $user->name }}">
                        <div class="chat-preview">
                            <section id="propic">
                                <img src="{{ asset('storage/' . $user->profile_picture) }}"
                                    alt="{{ $user->name }}'s profile picture">
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
                    <h2 id="chat-user-name">Chat User{{ $chat_id }}</h2>
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

                // Get the clicked user's info
                const userId = this.dataset.userId;
                const userName = this.dataset.userName;

                // Update the chat box with the user's name
                document.getElementById('chat-user-name').textContent = userName;

                // Initiate or get the chat session via AJAX
                initiateChat(userId);
            });
        });

        // AJAX function to call the initiateChat API
        function initiateChat(userId) {
            const currentUserId = {{ auth()->id() }}; // Replace with authenticated user's ID

            // Make an AJAX POST request to initiate or get the chat session
            fetch('{{ route('chat.start') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        user_id_1: currentUserId,
                        user_id_2: userId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.chat_id) {
                        console.log('Chat session ID:', data.chat_id);
                        sessionStorage.setItem('chat_id', data.chat_id); // Update session storage with new chat_id
                        
                        // Optionally, you can add code here to handle if the chat already exists
                        if (data.existing_chat) {
                            console.log('Existing chat session.');
                        }
                    }else {
                        console.error('Failed to initiate chat:', data);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }



        // Function to load messages for a given chat ID
        // function loadMessages(chatId) {
        //     // Clear the chat messages container
        //     const chatMessages = document.querySelector('.chat-messages');
        //     chatMessages.innerHTML = ''; // Clear existing messages

        //     // Example: Fetch messages from an endpoint (you can implement this in your controller)
        //     fetch(`/chat/${chatId}/messages`)
        //         .then(response => response.json())
        //         .then(data => {
        //             data.messages.forEach(message => {
        //                 const messageDiv = document.createElement('div');
        //                 messageDiv.classList.add(message.sender_id === {{ auth()->id() }} ? 'outgoing-message' : 'incoming-message');
        //                 messageDiv.textContent = message.content;
        //                 chatMessages.appendChild(messageDiv);
        //             });

        //             // Scroll to the bottom of the chat
        //             chatMessages.scrollTop = chatMessages.scrollHeight;
        //         })
        //         .catch(error => {
        //             console.error('Error loading messages:', error);
        //         });
        // }

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

                    // Example: Send the message to the server (you need to implement this)
                    // fetch('/send-message', { method: 'POST', body: JSON.stringify({ chatId, message }) });
                }
            }
        });
    </script>
@endsection
