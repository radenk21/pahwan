<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose A Categories</title>
    <link href="https://fonts.googleapis.com/css?family=Inter:400,700" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
</head>
<body class="bg-gray-100">
    <div class="bg-white dark:bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-900 dark:text-white">Pick a categories that might interest you ~!</h2>
            <form id="logoForm"
                class="mx-auto mt-10 grid max-w-lg grid-cols-2 md:grid-cols-4 lg:grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:gap-x-10 lg:mx-0 lg:max-w-none"
                action="/submit-form" method="POST">
                @csrf
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="transistor" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="reform" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="tuple" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="savvycal" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <label class="flex flex-col items-center cursor-pointer">
                    <input type="checkbox" name="logo[]" value="statamic" class="hidden">
                    <img class="max-h-12 w-full object-contain transition-all duration-300 transform hover:scale-110"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                        width="158" height="48">
                </label>
                <div class="flex justify-center mt-8">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Submit</button>
                    <button type="button" id="skipButton"
                        class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Skip</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('js/categories.js')}}"></script>
</body>

</html>
