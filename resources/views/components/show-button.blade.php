<!-- From Uiverse.io by Tsiangana -->
<button class="showbtn">
    <div class="show">

        <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" enable-background="new 0 0 24 24"
            xml:space="preserve">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <g id="view">
                    <g>
                        <path
                            d="M12,21c-5,0-8.8-2.8-11.8-8.5L0,12l0.2-0.5C3.2,5.8,7,3,12,3s8.8,2.8,11.8,8.5L24,12l-0.2,0.5C20.8,18.2,17,21,12,21z M2.3,12c2.5,4.7,5.7,7,9.7,7s7.2-2.3,9.7-7C19.2,7.3,16,5,12,5S4.8,7.3,2.3,12z">
                        </path>
                    </g>
                    <g>
                        <path
                            d="M12,17c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S14.8,17,12,17z M12,9c-1.7,0-3,1.3-3,3s1.3,3,3,3s3-1.3,3-3S13.7,9,12,9z">
                        </path>
                    </g>
                </g>
            </g>
        </svg>

    </div>

    <div class="text">view</div>
</button>
<style>
    .showbtn {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 45px;
        height: 45px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition-duration: 0.3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
        background: rgb(65, 208, 255);
        background: linear-gradient(250deg,
                rgb(65, 166, 255) 15%,
                rgb(65, 185, 255) 65%);
    }

    /* plus show */
    .show {
        width: 100%;
        transition-duration: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .show svg {
        width: 17px;
    }

    .show svg path {
        fill: white;
    }

    /* text */
    .text {
        position: absolute;
        right: 0%;
        width: 0%;
        opacity: 0;
        color: white;
        font-size: 1.2em;
        font-weight: 600;
        transition-duration: 0.3s;
    }

    /* hover effect on button width */
    .showbtn:hover {
        width: 125px;
        border-radius: 40px;
        transition-duration: 0.3s;
    }

    .showbtn:hover .show {
        width: 30%;
        transition-duration: 0.3s;
        padding-left: 20px;
    }

    /* hover effect button's text */
    .showbtn:hover .text {
        opacity: 1;
        width: 70%;
        transition-duration: 0.3s;
        padding-right: 10px;
    }

    /* button click effect*/
    .showbtn:active {
        transform: translate(2px, 2px);
    }
</style>
