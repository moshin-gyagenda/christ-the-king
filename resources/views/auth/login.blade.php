<!DOCTYPE html>
<html>

<head>
    <title>Christ the King Nursary and Primary School</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta
      name="description"
      content="Christ the King nursery and primary school"
    />
    <style>
        .custom-input {
            border-radius: 5px;
            border: 1px solid #161176;
            padding: 8px;
            width: 100%;
        }
        .custom-input:focus {
    outline: none;
    box-shadow: 0 0 5px #aaa;
    border-color: #161176;
}

    </style>
</head>

<body>

    <x-jet-authentication-card class="container">
        <x-slot name="logo">
            <img style="outline: none;
                box-shadow: 0 0 5px #aaa;
                border-color: #161176; border-radius: 100%;" src="{{ asset('images/logo.png') }}" alt="" width="100px" height="100px">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-md text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-4">
                <h3 class="text-gray-600 text-md">Please enter your email and password</h3>
            </div>
            <div class="mt-4">
                <x-jet-label for="email" class="text-md" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full custom-input" type="email" name="email"
                    :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="text-md" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full custom-input" type="password" name="password"
                    required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-md text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div>
                    <x-jet-button style="text-align: center; width: 120px; background: #161176; color:white;">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="block mt-4">
                @if (Route::has('password.request'))
                    <a class="text-md" style="color: #161176;" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="block mt-4 mb-4">
                <p class="text-md">Don't have an account? <a style="color: #161176;" href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </x-jet-authentication-card>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>
