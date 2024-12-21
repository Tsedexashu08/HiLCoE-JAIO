@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/faculty-interaction.css') }}">
    <div class="chat">
        <div class="chat-container">
            <div class="chat-sidebar">
                @foreach ($users as $user)
                    <button 
                        onclick="navigateToChat(event, '{{ route('chat.open', ['id' => $user->id]) }}')" 
                        class="chat-button">
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
                    </button>
                @endforeach
            </div>

            <div id="default-chat-section">
                <section id="defaultpage">
                    <h1>Select chat to start messaging</h1>
                    <img src="{{ asset('images/pointin.png') }}" alt="">
                </section>
                <section id="chat" style="display: none">
                    @yield('chat-box')
                </section>
            </div>
        </div>

        <script>
            document.getElementById('send-button').addEventListener('click', function() {
                const inputField = document.querySelector('.chat-input input[type="text"]');
                const message = inputField.value.trim();

                if (message) {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('outgoing-message');
                    messageDiv.textContent = message;

                    const chatMessages = document.querySelector('.chat-messages');
                    chatMessages.appendChild(messageDiv);
                    inputField.value = '';
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }
            });

            function navigateToChat(event, url) {
                event.preventDefault(); // Prevent default button behavior
                const page = document.getElementById('defaultpage');
                page.style.display = 'none';
                const chat = document.getElementById('chat');
                chat.style.display = 'block';
                
                // Navigate to the URL after a brief delay
                setTimeout(() => {
                    window.location.href = url; // Redirect to the chat page
                }, 100); // Adjust the delay if needed
            }
        </script>
    </div>
@endsection