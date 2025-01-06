<div>
    <div class="scroll-buttons">
        <button class="scroll-to-top" id="scrollToTop" title="Scroll to Top">
            ↑
        </button>
        <button class="scroll-to-bottom" id="scrollToBottom" title="Scroll to Bottom">
            ↓
        </button>
    </div>
</div>
<style>
    .scroll-buttons {
        position: fixed;
        left: 20px;
        bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        /* Space between buttons */
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1000;
        /* Make sure the buttons are above other content */
    }

    .scroll-to-top,
    .scroll-to-bottom {
        background-color: #007bff;
        /* Button color */
        color: white;
        /* Text color */
        border: none;
        border-radius: 50%;
        width: 60px;
        /* Button size */
        height: 60px;
        /* Button size */
        font-size: 24px;
        /* Icon size */
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s, transform 0.3s;
    }

    .scroll-to-top:hover,
    .scroll-to-bottom:hover {
        background-color: #0056b3;
        /* Darker shade on hover */
        transform: scale(1.1);
        /* Slightly enlarge on hover */
    }

    .scroll-buttons.visible {
        opacity: 1;
        /* Show buttons */
    }
</style>
<script>
    const scrollToTopButton = document.getElementById('scrollToTop');
    const scrollToBottomButton = document.getElementById('scrollToBottom');
    const scrollButtons = document.querySelector('.scroll-buttons');
    let lastScrollTop = 0;

    // Show/hide buttons based on scroll position
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Show buttons when scrolling
        if (scrollTop > 100) {
            scrollButtons.classList.add('visible');
        } else {
            scrollButtons.classList.remove('visible');
        }

        // Show/hide buttons based on scroll direction
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            scrollToTopButton.style.display = 'none'; // Hide scroll to top
            scrollToBottomButton.style.display = 'block'; // Show scroll to bottom
        } else {
            // Scrolling up
            scrollToBottomButton.style.display = 'none'; // Hide scroll to bottom
            scrollToTopButton.style.display = 'block'; // Show scroll to top
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });

    // Scroll to top functionality
    scrollToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Scroll to bottom functionality
    scrollToBottomButton.addEventListener('click', () => {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    });
</script>
