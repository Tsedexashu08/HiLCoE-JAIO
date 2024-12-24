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
                                <p>{{$user->role}}</p>
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
                    <div class="chat-messages" id="chat-messages">
                        <!-- Messages will appear here -->
                    </div>
                    <div class="chat-input">
                        <input type="text" placeholder="Type a message..." id="message-input">
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
                const chatmessages = document.getElementById('chat-messages')

                // Hiding the default chat section
                defaultSec.style.display = 'none';

                // Show the chat box(with the dataset atrributes we pass to it(username..minamn...))
                chatBox.style.display = 'block';
                //for clearing the chat messages when our user opens another chat
                chatmessages.innerHTML = ""

                // Get the clicked user's info
                const userId = this.dataset.userId;
                const userName = this.dataset.userName;

                // Update the chat box with the user's name
                document.getElementById('chat-user-name').textContent = userName;

                // Initiate or get the chat session via fetch request
                initiateChat(userId);

            });
        });

        // function to call the initiateChat API(the one we callin when a chatpreview is clicked like in telegram).
        async function initiateChat(userId) {
            const currentUserId = {{ Auth::user()->id }}; // authenticated user's ID

            try {
                // POST request to initiate or get the chat session
                const response = await fetch('{{ route('chat.start') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        user_id_1: currentUserId,
                        user_id_2: userId
                    })
                });

                const data = await response.json();

                if (data.chat_id) {
                    console.log('Chat session ID:', data.chat_id);
                    // Updating session storage with new chat_id(to be able to access it from other requests)
                    sessionStorage.setItem('chat_id', data.chat_id);
                    //silly logic ik buut bare wid me...

                //  if the chat already exists(will takle out existingchat bool var. was just using it to check for already existing sessions).
                    if (data.existing_chat) {
                        console.log('Existing chat session.');
                    }
                } else {
                    console.error('Failed to initiate chat:', data);
                }
            } catch (error) {
                console.error('Error:', error);
            }
            LoadMessages() //display previous messages.

        }

        function sendMessage(senderId, content) {
            const chatId = sessionStorage.getItem('chat_id');
            // Retrieve the chat ID from sessionStorage(which we set in intiate chat ;) ..toldya to be patient.)

            fetch('{{ route('chat.sendMessage') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        sender_id: senderId,
                        content: content
                    })
                })
                .then(data => {
                    if (data.message) {
                        console.log('Message sent:', data.message);
                    } else {
                        console.error('Failed to send message:', data);
                    }
                })
                .catch(error => {
                    console.error('Error:', error.toString());
                });
        }

        function LoadMessages() {
            const chatId = sessionStorage.getItem('chat_id');
            const chatbox = document.getElementById('chat-messages');

            // Clear previous messages
            chatbox.innerHTML = '';

            fetch('{{ route('chat.loadMessages') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        chat_id: chatId
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    if (data.messages) {
                        console.log('Messages retrieved', data.messages);
                        data.messages.forEach(message => {
                            const messageDiv = document.createElement('div');
                            const timestamp = document.createElement('p');

                            // Checking if sender is the current logged in user.
                            if (message.sender_id === {{ Auth::user()->id }}) {
                                messageDiv.classList.add('outgoing-message');
                            } else {
                                messageDiv.classList.add('incoming-message');
                            }

                            timestamp.classList.add('time-stamp');
                            messageDiv.textContent = message.content;
                            timestamp.textContent = "sent at :" + message.time;
                            messageDiv.setAttribute('role', 'alert'); // For accessibility
                            messageDiv.appendChild(timestamp)
                            chatbox.appendChild(messageDiv);
                        });
                    } else {
                        console.error('Failed to retrieve messages', data);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
        // Event listener for send button
        document.addEventListener('click', function(event) {
    if (event.target && event.target.id === 'send-button') {
        const inputField = document.querySelector('.chat-input input[type="text"]');
        const message = inputField.value.trim();

        // Check if the message is not empty
        if (message) {
            // Create a new outgoing message div
            const messageDiv = document.createElement('div');
            const timestamp = document.createElement('p');
            timestamp.classList.add('time-stamp')

            // Get current time(uk for like shoeing when it was sent at that time.)
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
        
            // Format the time
            const formattedTime = `${hours}:${minutes < 10 ? '0' : ''}${minutes}`;
            timestamp.textContent = "sent at :" + formattedTime; // Set the timestamp text

            messageDiv.classList.add('outgoing-message');
            messageDiv.textContent = message;
            messageDiv.appendChild(timestamp); // Append timestamp to message div

            // Append the new message to the chat messages container
            const chatMessages = document.querySelector('.chat-messages');
            chatMessages.appendChild(messageDiv);

            // Clear the input field
            inputField.value = '';

            // Optionally, scroll to the bottom of the chat messages
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Send the message to the server
            const senderId = {{ Auth::user()->id }}; // authenticated user's ID
            sendMessage(senderId, message);
        }
    }
});
    </script>
@endsection
