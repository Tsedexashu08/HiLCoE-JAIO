<div class="job-filter-card">
    <button class="filters"><img src="{{ asset('images/deadline.png ') }}" alt=""></button>
    <button class="filters"><img src="" alt=""></button>
    <button class="filters"><img src="{{ asset('images/location.png ') }}" alt=""></button>
    <button class="filters"><img src="" alt=""></button>
</div>
<style>
    .job-filter-card {
        overflow: hidden;
        border-radius: 10px;
        width: 350px;
        height: 70px;
        background: white;
        box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 4px, rgba(0, 0, 0, 0.1) 0px 7px 13px -2px, rgba(0, 0, 0, 0.2) 0px 0px 0px inset;
        margin: 0 auto;
        position: relative;
        top: 60%;
        transform: translateY(-50%);
        display: flex;
        justify-content: center;
    }

    .filters {
        border: 0.5px solid #bbbbbb;
        background: #f9f9f9;
        font-size: 1.2rem;
        cursor: pointer;
        width: 100%;
        border-radius: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 0.5em
    }

    .filters img {
        width: 65px;
        height: auto;
        /* margin-right: 10px; */
        object-position: center;
    }
</style>
