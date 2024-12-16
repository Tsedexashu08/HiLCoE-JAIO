<style>
    .custom-button {
    display: inline-flex;                /* Use inline-flex for alignment */
    align-items: center;                 /* Vertically center the text */
    justify-content: center;             /* Horizontally center the text */
    padding: 0.5rem 1rem;               /* Padding for the button */
    background-color: #4A5568;          /* Gray background */
    border: none;                       /* Remove border */
    border-radius: 0.375rem;            /* Rounded corners */
    font-size: 0.75rem;                  /* Font size */
    font-weight: 600;                    /* Bold text */
    text-transform: uppercase;           /* Uppercase text */
    letter-spacing: 0.1em;               /* Letter spacing */
    color: white;                        /* Text color */
    cursor: pointer;                     /* Pointer on hover */
    transition: background-color 0.15s; /* Smooth transition */
}

.custom-button:hover {
    background-color: #2D3748;          /* Darker gray on hover */
}

.custom-button:focus {
    outline: none;                      /* Remove default outline */
    box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.6); /* Focus ring */
}

.custom-button:active {
    background-color: #1A202C;          /* Darker when active */
}
</style>
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'custom-button']) }}>
    {{ $slot }}
</button>