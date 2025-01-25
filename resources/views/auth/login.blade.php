<div class="login">
    <x-guest-layout>
        <style>
            .session-status {
                margin-bottom: 1rem;
                
            }
    
            .login{
                background-image: url("{{ asset('images/bg_enhanced.png') }}");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }
    
            #heading{
                text-align: center;
                font-size: 30px;
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
                align-items: center;
                justify-content: center;
            }
        </style>
        <!-- Session Status -->
        
      <!-- Logo -->
    <div class="shrink-0 h-25 flex items-center justify-center  align-items-center gap-6 mb-3 mr-3">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-auto w-auto fill-current text-gray-800" />
        </a>
        <h1 id="heading" class=" mt-6 ">HiLCoE JAIO</h1>
    </div>
    
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
    
            <div class="action-buttons">
                <x-primary-button class="login-button">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
                <div class="links">
                    @if (Route::has('password.request'))
                        <a class="link" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
        </form>
    </x-guest-layout>
    </div>