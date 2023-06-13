<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/js/regist-validation.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login-regist-styles.css') }}">
    <title>Pahwan Register</title>
</head>

<body class="bg-gray-100">
    {{-- Register Form Section Start --}}
    <div class="container mx-auto p-4">
        <div class="regist-container max-w-xl mx-auto" id="regist-container">
            <div class="max-w-md w-full">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <img src="{{ asset('/img/Pahwan logo 1.png') }}" alt="Pahwan Logo" class="mx-auto"
                        id="pahwan-logo-login" draggable="false">
                    <div class="md:flex md:flex-wrap md:-mx-2">
                        <div class="lg:w-1/2 md:px-2 mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder="Enter your email">
                        </div>
                        <div class="lg:w-1/2 md:px-2 mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Username
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" placeholder="Enter your username">
                        </div>
                        <div class="lg:w-1/2 md:px-2 mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                                Gender
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="gender">
                                <option value="" disabled selected>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="lg:w-1/2 md:px-2 mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                Phone Number
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="phone" type="tel" placeholder="Enter your phone number">
                        </div>
                        <div class="lg:w-1/2 md:px-2 mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" placeholder="********">
                        </div>
                        <div class="lg:w-1/2 md:px-2 mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">
                                Confirm Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="confirm-password" type="password" placeholder="********">
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Register
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-500 text-xs">
                    &copy; 2023 Pahwan. All rights reserved.
                </p>
            </div>
        </div>
    </div>
    {{-- Register Form Section End --}}
</body>

</html>
