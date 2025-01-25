<x-app-layout>

    <link rel="stylesheet" href="{{ asset('css/resource.css') }}">

    <div class="resource-list">
        <h1>All your curiosity and information in one place</h1>
        <section class="courses">
            <h2>Free Courses found online</h2>
            <button class="scroll-button left" onclick="scrollCourses(-1)">&#10094;</button>
            <div class="course-list-container">
                <div class="course-list">
                    <div class="course-item">
                        <div class="course-image"></div>
                        <p>Web development course</p>
                        <p>12 hour video</p>
                    </div>
                    <div class="course-item">
                        <div class="course-image"></div>
                        <p>Web development course</p>
                        <p>12 hour video</p>
                    </div>
                    <div class="course-item">
                        <div class="course-image"></div>
                        <p>Web development course</p>
                        <p>12 hour video</p>
                    </div>
                    <div class="course-item">
                        <div class="course-image"></div>
                        <p>Web development course</p>
                        <p>12 hour video</p>
                    </div>
                    <div class="course-item">
                        <div class="course-image"></div>
                        <p>Web development course</p>
                        <p>12 hour video</p>
                    </div>
                    <div class="course-item">
                        <div class="course-image"></div>
                        <p>Web development course</p>
                        <p>12 hour video</p>
                    </div>
                </div>
            </div>
            <button class="scroll-button right" onclick="scrollCourses(1)">&#10095;</button>
        </section>
        <section class="tips">
            <h2>Tips for getting that dream job</h2>
            <div class="course-list">
                <div class="course-item">
                    <div class="course-image"></div>
                    <p>Web development course</p>
                    <p>12 hour video</p>
                </div>
                <div class="course-item">
                    <div class="course-image"></div>
                    <p>Web development course</p>
                    <p>12 hour video</p>
                </div>
                <div class="course-item">
                    <div class="course-image"></div>
                    <p>Web development course</p>
                    <p>12 hour video</p>
                </div>
            </div>
        </section>
    </div>



</x-app-layout>
<style>

.resource-list {
    padding: 20px;
}

.courses, .tips {
    margin-bottom: 20px;
    padding: 0 20px; /* Add some padding for better spacing */
    position: relative; /* Required for scroll buttons */
}

.course-list-container {
    overflow-x: auto; /* Enable horizontal scrolling only when needed */
}

.course-list {
    display: flex; /* Ensure items are displayed in flex */
    flex-wrap: wrap; /* Allow wrapping for responsiveness */
    justify-content: center; /* Center items */
}

.course-item {
    text-align: center;
    flex: 0 1 calc(33.33% - 20px); /* Responsive width for each course item */
    height: 350px; /* Increased height for vertical appearance */
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Create a shadow for better separation */
    border-radius: 8px; /* Adding rounded corners */
    padding: 15px; /* Adjusting padding */
    background-color: #fff; /* Adding background color for better contrast */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; /* Align content to the top */
    transition: transform 0.3s ease, background-color 0.3s ease; /* Add transition for smooth movement and color change */
    border: 2px solid #d8bfd8; /* Light purple border */
    overflow: hidden; /* Ensure content does not overflow */
}

.course-item:hover {
    transform: translateY(-10px); /* Move item up on hover */
    background-color: #00008B; /* Dark blue color on hover */
    color: #fff; /* Change text color to white */
}

.course-image {
    width: 200px; /* Adjusted width */
    height: 200px; /* Adjusted height */
    background-color: #ccc;
    margin-bottom: 10px;
    border-radius: 8px; /* Matching image corners with container */
    transition: transform 0.3s ease; /* Add transition for smooth scaling */
}

h1 {
    font-size: 1.8em; /* Default font size for larger screens */
    text-align: center;
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

h2 {
    font-size: 1.2em;
    text-align: center;
    margin-bottom: 20px;
}

.course-item p {
    margin-top: 10px; /* Add space above the text */
    width: 100%; /* Ensure text fits within the box */
    word-wrap: break-word; /* Ensure text wraps within the box */
    overflow: hidden; /* Ensure text does not overflow */
    text-overflow: ellipsis; /* Add ellipsis for overflow text */
    white-space: normal; /* Allow text to wrap */
    text-align: center; /* Center-align the text */
}

/* Media Queries for Responsive Design */
@media (max-width: 1200px) {
    .course-item {
        flex: 0 1 calc(25% - 20px); /* Adjust width for larger screens */
        height: 300px; /* Adjust height for larger screens */
    }
    .course-image {
        width: 150px; /* Adjusted image size */
        height: 150px;
    }
    h1 {
        font-size: 1.6em; /* Adjust font size */
    }
    h2 {
        font-size: 1.1em; /* Adjust font size */
    }
}

@media (max-width: 768px) {
    .course-item {
        flex: 0 1 calc(50% - 20px); /* Adjusting width to fit 2 items per row */
        height: 250px; /* Adjust height for smaller screens */
    }
    .course-image {
        width: 120px; /* Adjusted image size */
        height: 120px;
    }
    h1 {
        font-size: 1.4em; /* Smaller font size for tablets */
    }
    h2 {
        font-size: 1em; /* Adjust font size */
    }
}

@media (max-width: 480px) {
    .course-item {
        flex: 0 1 calc(100% - 20px); /* Adjusting width to fit 1 item per row */
        height: auto; /* Adjust height for mobile devices */
    }
    .course-image {
        width: 200px; /* Adjusted image size */
        height: 200px;
        margin-bottom: 10px; /* Add space below the image */
    }
    h1 {
        font-size: 1em; /* Adjust font size for mobile devices */
    }
    h2 {
        font-size: 0.8em; /* Adjust font size for mobile devices */
    }
    .course-item p  {
        font-size: 0.8em; /* Adjust font size for mobile devices */
    }
}

</style>