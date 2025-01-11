<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/account-page.css') }}">
    <div class="account-page">
        @include('Side-bar')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
    <script src="{{ asset('js/forumpage.js') }}"></script>
</x-app-layout>
