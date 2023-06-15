<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,700" rel="stylesheet">
    <title>Pahwan Login</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="{{asset('css/login-regist-styles.css')}}">
</head>
<body class="bg-gray-100">
    {{-- Login Form Section Start --}}
    <div class="login-container">
        <div class="max-w-md w-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <img src="{{asset('img/Pahwan logo 1.png')}}" alt="Pahwan Logo" class="mx-auto" id="pahwan-logo-login" draggable="false">
                    <p class="text-blue-500 mx-auto "></p>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter your username">
                    <p class="text-red-500 text-xs italic">Please put a username.</p>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********">
                    <p class="text-red-500 text-xs italic">Please put a password.</p>
                </div>
                <div class="flex items-center justify-between pb-3">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
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