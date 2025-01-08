<x-guest-layout>
    <style>
        .session-status {
            margin-bottom: 1rem;
        }

        h1{
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            height: 10vh;
        }

        .input-text {
            display: block;
            margin-top: 0.25rem;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }

        .error-message {
            margin-top: 0.5rem;
            color: red;
        }

        .remember-me {
            margin-top: 1rem;
        }

        .checkbox {
            margin-right: 0.5rem;
        }

        .link {
            display: inline-block;
            margin-right: 1rem;
            text-decoration: underline;
            color: #4A5568;
            /* Gray */
        }

        .link:hover {
            color: #2D3748;
            /* Darker Gray */
        }

        .action-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
        }

        .login-button {
            /* margin-left: 1rem; */
            text-align: center;
            width: 100%;
            height: 50px;
        }

        button {
            text-align: center;
            font-size: 26px;
        }

        .links {
            display: flex;
            gap: 2%;
            white-space: nowrap;
        }
    </style>
    <!-- Session Status -->
    <h1>HiLCoE JAIO</h1>
    <x-auth-session-status class="session-status" :status="session('status')" />
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="input-text" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="input-text" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Remember Me -->
        <div class="remember-me">
            <label for="remember_me" class="inline-flex">
                <input id="remember_me" type="checkbox" class="checkbox" name="remember">
                <span class="remember-text">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="links">
            <a class="link" href="{{ route('register') }}">
                {{ __('Dont have an account? signup') }}
            </a>
            @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="action-buttons">
            <x-primary-button class="login-button">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
