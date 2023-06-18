<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pahwan Login</title>
    @vite('resources/css/app.css') 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/login-regist-styles.css')}}">
    <script src="{{asset('js/login-validation.js')}}"></script>
</head>
<body class="bg-gray-100">
    {{-- Login Form Section Start --}}
    <div class="login-container">
        <div class="max-w-md w-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="#">
                @csrf
                <div class="mb-4">
                    <img src="{{asset('img/Pahwan logo 1.png')}}" alt="Pahwan Logo" class="mx-auto" id="pahwan-logo-login" draggable="false">
                    <p class="text-blue-500 mx-auto "></p>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Enter your username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********">
                </div>
                <div class="flex items-center justify-between pb-3">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div>
                <p class="text-center text-gray-500 text-xs">
                    Don't have an account?
                    <a class="text-blue-500 hover:text-blue-800 font-bold" href="/regist">Register!</a>
                </p>
            </form>
            <p class="text-center text-gray-500 text-sm">
                &copy; 2023 Pahwan.
            </p>
        </div>
    </div>
    {{-- Login Form Section End --}}
</body>
</html>