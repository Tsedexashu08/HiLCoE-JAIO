// function initiateChat(element) {
//     const user_id_2 = element.dataset.otherUserId;
//     const form = document.getElementById('initiate-chat-form');
//     document.getElementById('user_id_2').value = user_id_2;

//     // Make an AJAX POST request to initiate or get the chat session
//     fetch(form.action, {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': '{{ csrf_token() }}'
//         },
//         body: JSON.stringify({
//             user_id_1: {{ auth()->user()->id }},
//             user_id_2: user_id_2
//         })
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.chat_id) {
//             const chatId = data.chat_id;
//             loadMessages(chatId);
//         } else {
//             console.error('Failed to initiate chat:', data);
//         }
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// }

// function loadMessages(chatId) {
//     const defaultSec = document.getElementById('default-chat-section');
//     const chatBox = document.getElementById('chat-box');

//     defaultSec.style.display = 'none';
//     chatBox.style.display = 'block';

//     fetch(`/chat/${chatId}/messages`)
//         .then(response => response.json())
//         .then(messages => {
//             const chatMessages = document.querySelector('.chat-messages');
//             chatMessages.innerHTML = ''; // Clear previous messages
//             messages.forEach(message => {
//                 const messageDiv = document.createElement('div');
//                 messageDiv.classList.add(message.sender_id == {{ auth()->user()->id }} ? 'outgoing-message' : 'incoming-message');
//                 messageDiv.textContent = message.content;
//                 chatMessages.appendChild(messageDiv);
//             });
//         });
// }

// function sendMessage() {
//     // Your send message logic here
// }

// document.addEventListener('click', function(event) {
//     if (event.target && event.target.id === 'send-button') {
//         const inputField = document.querySelector('.chat-input input[type="text"]');
//         const message = inputField.value.trim();

//         if (message) {
//             const messageDiv = document.createElement('div');
//             messageDiv.classList.add('outgoing-message');
//             messageDiv.textContent = message;

//             const chatMessages = document.querySelector('.chat-messages');
//             chatMessages.appendChild(messageDiv);

//             inputField.value = '';

//             chatMessages.scrollTop = chatMessages.scrollHeight;

//             // Example: Send the message to the server (you need to implement this)
//             // fetch('/send-message', { method: 'POST', body: JSON.stringify({ chatId, message }) });
//         }
//     }
// });
