<div class="job-filter-card">
    <button class="filters">
        <img src="{{ asset('images/deadline.png') }}" alt="Deadline" />
        <span>Deadline</span>
    </button>
    <button class="filters">
        <img src="{{ asset('images/job-title.png') }}" alt="Job Title" />
        <span>Job Title</span>
    </button>
    <button class="filters">
        <img src="{{ asset('images/location.png') }}" alt="Company" />
        <span>Company</span>
    </button>
    <button class="filters">
        <img src="{{ asset('images/job-category.png') }}" alt="Job Category" />
        <span>Category</span>
    </button>
</div>

<style>
    .job-filter-card {
        overflow: hidden;
        border-radius: 10px;
        width: 350px;
        height: 80px; /* Increased height to accommodate text */
        background: white;
        box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 4px, 
                    rgba(0, 0, 0, 0.1) 0px 7px 13px -2px, 
                    rgba(0, 0, 0, 0.2) 0px 0px 0px inset;
        margin: 0 auto;
        position: relative;
        top: 60%;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-around; /* Change to space-around for even spacing */
        align-items: center; /* Center items vertically */
    }

    .filters {
        border: 0.5px solid #bbbbbb;
        background: #f9f9f9;
        font-size: 0.8em; /* Slightly increased font size */
        cursor: pointer;
        width: 70px; /* Fixed width for uniform buttons */
        border-radius: 5px; /* Added border radius */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: background 0.2s; /* Transition for hover effect */
    }

    .filters:hover {
        background: #e0e0e0; /* Change background on hover */
    }

    .filters img {
        width: 30px; /* Adjusted size for better fit */
        height: auto;
        margin-bottom: 5px; /* Space between image and text */
    }
</style>