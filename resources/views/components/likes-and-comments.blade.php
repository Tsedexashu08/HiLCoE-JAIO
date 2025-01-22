<div class="likes-and-comments">
    <div class="like-container">
        <input type="checkbox" id="like-checkbox-{{ $postId }}" aria-label="Like this post">
        <label for="like-checkbox-{{ $postId }}">
            <svg id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.845,17.099l-2.489,8.725C26.989,27.105,25.804,28,24.473,28H11c-0.553,0-1-0.448-1-1V13c0-0.215,0.069-0.425,0.198-0.597l5.392-7.24C16.188,4.414,17.05,4,17.974,4C19.643,4,21,5.357,21,7.026V12h5.002c1.265,0,2.427,0.579,3.188,1.589C29.954,14.601,30.192,15.88,29.845,17.099z"></path>
                <path d="M7,12H3c-0.553,0-1,0.448-1,1v14c0,0.552,0.447,1,1,1h4c0.553,0,1-0.448,1-1V13C8,12.448,7.553,12,7,12z M5,25.5c-0.828,0-1.5-0.672-1.5-1.5c0-0.828,0.672-1.5,1.5-1.5c0.828,0,1.5,0.672,1.5,1.5C6.5,24.828,5.828,25.5,5,25.5z"></path>
            </svg>
        </label>
        <span class="like-counter">123 Likes</span>
    </div>

    <div class="group relative comment-container">
        <section class="cmts">
            <button class="cmnt-btn" data-post-id="{{ $postId }}" aria-label="Comment on this post">
                <svg height="32px" width="32px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <g>
                        <path class="st0" d="M92.574,294.24V124.336H43.277C19.449,124.336,0,144.213,0,168.467v206.44c0,24.254,19.449,44.133,43.277,44.133h62v45.469c0,3.041,1.824,5.777,4.559,6.932c2.736,1.154,5.957,0.486,8.023-1.641l49.844-50.76h106.494c23.828,0,43.279-19.879,43.279-44.133v-0.061H172.262C128.314,374.846,92.574,338.676,92.574,294.24z"></path>
                        <path class="st0" d="M462.717,40H172.26c-27.105,0-49.283,22.59-49.283,50.197v204.037c0,27.61,22.178,50.199,49.283,50.199h164.668l75.348,76.033c2.399,2.442,6.004,3.172,9.135,1.852c3.133-1.322,5.176-4.434,5.176-7.887v-69.998h36.131c27.106,0,49.283-22.59,49.283-50.199V90.197C512,62.59,489.822,40,462.717,40z M369.156,280.115H195.92v-24.316h173.236V280.115z M439.058,204.129H195.92v-24.314h243.138V204.129z M439.058,128.143H195.92v-24.315h243.138V128.143z"></path>
                    </g>
                </svg>
            </button>
            <span class="absolute -top-14 left-[50%] -translate-x-[50%] z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out group-hover:scale-100">Comment</span>
            <span class="comment-counter">45 Comments</span>
        </section>
    </div>
</div>


<style>
    .cmts {
        display: flex;
    }

    .likes-and-comments {
        display: flex;
        justify-content: flex-start;
        gap: 20px;
        align-items: center;
        margin-top: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 8px;
        background-color: #f9f9f9;
        margin: 1%;
    }

    .likes-and-comments .like-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .likes-and-comments .like-container {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        margin-right: 20px;
    }

    .likes-and-comments svg {
        height: 32px;
        width: 32px;
        transition: all 0.3s;
        fill: #666;
    }

    .likes-and-comments svg:hover {
        transform: scale(1.1) rotate(-10deg);
    }

    .likes-and-comments .like-container input:checked + svg {
        fill: #2196F3;
    }

    .like-counter,
    .comment-counter {
        margin-left: 8px;
        font-size: 16px;
        color: #666;
    }

    .comment-container button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
        display: flex;
        align-items: center;
    }

    .comment-container svg {
        height: 32px;
        width: 32px;
        fill: #666;
        transition: all 0.3s;
    }

    .comment-container svg:hover {
        fill: #2196F3;
    }
</style>

<script>
 document.querySelectorAll('.cmnt-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const postId = this.getAttribute('data-post-id');
        const addCommentSection = document.getElementById(`add-comment-${postId}`); // Target the specific comment section
        if (addCommentSection) {
            // Toggle the display of the specific comment section
            addCommentSection.style.display = addCommentSection.style.display === 'none' || addCommentSection.style.display === '' ? 'block' : 'none';
        }
    });
});
</script>