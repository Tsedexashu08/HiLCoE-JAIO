<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">

    <style>
        body {
            font-family: 'Times New Roman', serif;
            width: 100vw;
            height: auto;
        }

        main {
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .container {
            min-width: 100vw;
            min-height: 100vh;
            background-color: #f7fafc;
        }

        .header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .max-w-7xl {
            max-width: 100vw;
            margin-left: auto;
            margin-right: auto;
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .px-4,
        .sm\:px-6,
        .lg\:px-8 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5%
            height: 100%;
            width: 100%;
            background-color: #022c50;
            color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .contact-info {
            text-align: center;
            margin-bottom: 10px;
            font-size: 20px
        }

        .copyright {
            font-size: 0.9em;
            text-align: center;
            opacity: 0.7;
            margin-top: 2%;
        }

        @media (max-width: 600px) {
            .footer {
                padding: 10px;
                /* Less padding on smaller screens */
            }
        }

        @media (min-width: 640px) {
            .sm\:px-6 {
                padding-left: 1.5rem;
                /* For sm:px-6 */
                padding-right: 1.5rem;
                /* For sm:px-6 */
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                /* For lg:px-8 */
                padding-right: 2rem;
                /* For lg:px-8 */
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="header">
                <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <footer>
            <div class="footer">
                <span class="contact-info">
                    <h2>Contact Us</h2>
                    <p>P.O.Box 25304/1000</p>
                    <p>Addis Ababa, Ethiopia</p>
                </span>
                <span class="copyright">
                    Copy All Rights Reserved &copy; {{ date('Y') }}. HiLCoE
                </span>
            </div>
        </footer>
    </div>
</body>

</html>
