<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <body>
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container">
                <div class="illustration">
                    <div class="logo-container">
                        <img src="{{ asset('assets/image/image_no_bg.png') }}" style="max-width: 64px" alt="Logo">
                        <h1 class="txt1">BlueBox</h1>
                    </div>
                </div>
                <div class="form">
                    <h1>Welcome to BlueBox</h1>
                    <p>To keep connected with us, please log in with your email and password.</p>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" />
                        <x-text-input id="email" placeholder="Email Address" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" />
                        <x-text-input id="password" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="options">
                        <label for="remember_me" class="checkbox">
                            <input id="remember_me" type="checkbox" name="remember">
                            Remember me
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                    <div class="social">
                        <span>BlueBox:</span>
                        <img src="{{ asset('assets/image/image_no_bg.png') }}" alt="Twitter">
                    </div>
                </div>
            </div>
        </form>
    </body>
</x-guest-layout>
