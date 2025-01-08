@extends('dashboard')
@section('content')

        <div class="events-page">
            <h1 class="heading">Checkout some events coming up soon</h1>

            <div class="event">
                <div class="event-date">
                    26 <br> <span>Dec</span>
                </div>
                <div class="event-details">
                    <h3>Santa comes for Christmas</h3>
                    <p>Lord knows where</p>
                    <div class="rsvp-section">
                        <span>RSVP here</span>
                    </div>
                    <form action="#" method="POST" class="apply-form">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>

            <div class="event">
                <div class="event-date">
                    26 <br> <span>Dec</span>
                </div>
                <div class="event-details">
                    <h3>Santa comes for Christmas</h3>
                    <p>Lord knows where</p>
                    <div class="rsvp-section">
                        <span>RSVP here</span>
                    </div>
                    <form action="#" method="POST" class="apply-form">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>


            <div class="event">
                <div class="event-date">
                    26 <br> <span>Dec</span>
                </div>
                <div class="event-details">
                    <h3>Santa comes for Christmas</h3>
                    <p>Lord knows where</p>
                    <div class="rsvp-section">
                        <span>RSVP here</span>
                    </div>
                    <form action="#" method="POST" class="apply-form">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="event">
                <div class="event-date">
                    26 <br> <span>Dec</span>
                </div>
                <div class="event-details">
                    <h3>Santa comes for Christmas</h3>
                    <p>Lord knows where</p>
                    <div class="rsvp-section">
                        <span>RSVP here</span>
                    </div>
                    <form action="#" method="POST" class="apply-form">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>

            <div class="contact-us">
                Contact us <br>
                P.O. Box : 25304/1000 <br>
                Addis Ababa, Ethiopia
            </div>

            <div class="copyright">
                Copyright All Rights Reserved 2025, HILCOE.
            </div>
        </div>
   
    <style>
header {
    background-color: white;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
}

header h1 {
    margin: 0;
    font-size: 1.5rem;
    color: black;
    font-weight: bold;
}

header nav {
    display: flex;
    align-items: center; /* Align items vertically */
}

header nav a {
    margin-left: 1rem;
    text-decoration: none;
    color: black;
    font-size: 0.9rem;
}

header nav a:hover {
    text-decoration: underline;
}

header nav a.active {
    background-color: #36448B;
    color: white;
    padding: 0.5rem 0.75rem;
    border-radius: 4px;
    text-decoration: none;
}
/* Header Account Icon */
header .account-icon {
    background-color: #36448B; /* Dark blue icon */
    color: white; /* White icon color */
    border-radius: 50%;
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 10px;
}

/* Main Content Styles */
main {
    padding: 20px 0;
    max-width: 900px; /* Limit main content width */
    margin: 0 auto; /* Center main content */

}

/* Footer Styles */
footer {
    background-color: #36448B;
    color: white;
    text-align: center;
    padding: 1rem 0;
    font-size: 0.8rem;
    position: relative;
    bottom: 0;
    width: 100%;
}
/* public/css/eventController.css */

.events-page {
    font-family: sans-serif; /* Ensure consistent font */
}

.events-page .heading {
    text-align: left; /* Align heading to left */
    font-size: 2rem;
    font-weight: bold;
    margin: 1rem 0 2rem 0; /* Increased bottom margin */
    padding:0 1rem;
    color: black;
}

.events-page .event {
    display: flex;
    margin: 1rem 0;
    padding: 1rem;
    background: #D7E1F5; /* Light blue background */
    border: 1px solid #D7E1F5; /* Same color border */
    border-radius: 8px;
    max-width: 800px; /* Limit width of event cards */
    margin: 1rem auto; /* Center cards horizontally */

}

.events-page .event-date {
    width: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #36448B; /* Dark blue */
    font-size: 1.5rem;
    font-weight: bold;
    color: white; /* White text on dark blue */
    margin-right: 1.5rem;
    padding: 1rem;
    border-radius: 8px;
    text-align: center;
}

.events-page .event-date span {
    display: block;
    font-size: 1rem;
    font-weight: normal; /* 'Dec' font-weight */
}


.events-page .event-details {
    flex: 1;
    padding-right: 1rem; /* Add space for form*/
}

.events-page .event-details h3 {
    margin: 0;
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
    color: black; /* Black event name*/
}

.events-page .event-details p{
    color: gray; /* gray details color*/
    font-size: 0.9rem;
    margin: 0;
}

.events-page .event-details .rsvp-section{
    margin-top: 0.5rem;
    font-size: 0.8rem;
}

.events-page .event-details .rsvp-section span {
    color: black;
    font-weight: bold;

}

.events-page .event-details .apply-form {
    display: flex;
    flex-direction: column;
    margin-top: 0.5rem;
    max-width: 250px; /* Limit form width*/
}

.events-page .event-details .apply-form label{
    font-size: 0.8rem;
    margin-top: 0.2rem;
}

.events-page .event-details .apply-form input[type="text"] ,
.events-page .event-details .apply-form input[type="email"] {
    padding: 0.5rem;
    border-radius: 4px;
    border: 1px solid #ccc;
    margin-bottom: 0.2rem;
    color: black;
}


.events-page .event-details .apply-form button {
    padding: 0.6rem 1rem;
    background-color: #36448B; /* Dark blue submit button */
    color: white; /* White text on dark blue */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    align-self: flex-start;
    margin-top: 0.2rem;
}

.events-page .event-details .apply-form button:hover {
    background-color: #223171; /* Slightly darker hover color */
}

.events-page .contact-us {
    background-color: #36448B;
    color: white;
    padding: 20px;
    text-align: center;
    margin-top: 20px;
    font-size: 0.9rem;
}

.events-page .copyright{
    text-align: center;
    padding: 10px;
    font-size: 0.7rem;
    color: gray;
}

    </style>
@endsection
