<x-app-layout>
    <div class="user-management-page">
        <h1>user management page</h1>
        {{-- option cards with ad role..minamn options(maybe more if i can figure some out) --}}
        <div class="option-cards">
            <section class="option-card">


            </section>
            <section class="option-card">


            </section>
            <section class="option-card">


            </section>
        </div>
        {{-- searching section --}}
        <section class="search-section">
            <div class="search-bar">
                <input type="text" placeholder="  search users">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>
        </section>
        {{-- users-list --}}
        <section class="user-list">
            {{-- @include('components.user-card') --}}

        </section>
    </div>
</x-app-layout>
<style>
    .user-management-page {
        height: 100vh;
        width: 95vw;
        box-shadow: rgba(0, 0, 0.6, 0.4) 3px 2px 6px,
            rgba(0.5, 0, 0.3, 0.3) 2px 7px 15px -2px,
            rgba(0, 0.3, 0.6, 0.2) 0 -3px 0 inset;
        text-align: center;
    }

    .user-management-page h1 {
        color: #ccc;
    }

    .search-section .search-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0.5px solid #ccc;
        border-radius: 5px;
        padding:1px;
        width: 60%;
        height: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        /* Semi-transparent white background */
        margin: 0 auto;
        /* Center horizontally */
    }

    .search-section .search-bar input {
        border: #ccc 0.5px solid;
        outline: none;
        flex: 1;
        padding: 10px;

        background-color: rgba(255, 255, 255, 0.9);
    }

    .search-section .search-bar button {
        background: none;
        border: 1px solid white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background-color: rgb(14, 71, 243);
    }

    .search-section .search-bar svg {
        width: 30px;
        height: 30px;
        color: white;

    }

    .option-cards {
        display: flex;
        width: 100%;
        border: 1px solid black;
        padding: 4%;
        align-items: center;
        justify-content: center;
        gap: 5%;
        margin-bottom: 1%;
        background-color: rgba(16, 123, 246, 0.937);
    }

    .option-card {
        height: 300px;
        width: 350px;
        box-shadow: rgba(0, 0, 0.6, 0.4) 3px -2px 6px,
            rgba(0.5, 0, 0.3, 0.3) 2px -7px 15px -2px,
            rgba(0, 0.3, 0.6, 0.2) 0 3px 0;
        background-color: white;
        border-radius: 4px;
        transition: all 0.2s ease;
    }

    .option-card:hover {
        scale: 1.03;
        opacity: 0.9;
    }
</style>
