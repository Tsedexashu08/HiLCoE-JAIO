function OpenChatBox() {
    document.querySelectorAll('.chat-link').forEach(link => {
        link.addEventListener('click', function() {
            const receiverUserId = this.dataset.userId;
            const userName = this.dataset.userName;

            console.log('Opening chat for user:', userName);
            console.log('Receiver User ID:', receiverUserId);

            fetch('/open-chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ receiver_id: receiverUserId })
            })
            .then(response => response.json())
            .then(data => {
                const defaultSec = document.getElementById('default-chat-section');
                const chatBox = document.getElementById('chat-box');

                defaultSec.style.display = 'none';
                chatBox.style.display = 'block';
                document.getElementById('chat-user-name').textContent = userName;
                document.querySelector('.chat-messages').innerHTML = '';

                // Add active class
                link.classList.add('active');
                document.querySelectorAll('.chat-link').forEach(otherLink => {
                    if (otherLink !== link) {
                        otherLink.classList.remove('active');
                    }
                });

                // Optionally fetch existing messages here
            })
            .catch(error => console.error('Error opening chat:', error));
        });
    });
}
// Listen for the DOMContentLoaded event only once
// document.addEventListener('DOMContentLoaded', OpenChatBox);