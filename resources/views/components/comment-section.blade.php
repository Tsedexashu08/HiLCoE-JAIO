<div class="comment-section">
    <h1 class="comment-title">Send Feedback</h1>
    <textarea placeholder="Your feedback..." class="feedback-textarea"></textarea>

    <span class="comment-span"></span>
    <button class="comment-button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        Add Comment
    </button>
</div>

<style>
    .comment-section {
        background-color: white;
        border: 1px solid #cbd5e1;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 0.5rem;
        border-radius: 0.75rem;
        padding: 0.5rem;
        font-size: 0.875rem;
        width: 80%;
        margin-top: 1%;
        position: relative;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .comment-title {
        text-align: center;
        color: #cbd5e1;
        font-size: 1.25rem;
        font-weight: bold;
        grid-column: span 6;
    }

    .feedback-textarea {
        grid-column: span 6;
    }

    .add-comment-button {
        fill: #475569;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0.5rem;
        padding: 0.5rem;
        transition: all 0.3s;
        background-color: #f1f5f9;
        border: 1px solid #e2e8f0;
        position: absolute;
        bottom: 1rem;
        right: 1rem;
    }

    .add-comment-button:hover {
        border-color: #475569;
    }

    .add-comment-button:focus {
        fill: #60a5fa;
        background-color: #60a5fa;
    }

    .comment-span {
        grid-column: span 2;
    }

    .comment-button {
        fill: #475569;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0.5rem;
        padding: 0.5rem;
        transition: all 0.3s;
        background-color: #f1f5f9;
        border: 1px solid #e2e8f0;
    }

    .comment-button:hover {
        border-color: #475569;
    }

    .comment-button:focus {
        fill: #60a5fa;
        background-color: #60a5fa;
    }

    .comment-span {
        grid-column: span 2;
    }
</style>

{{--  --}}
