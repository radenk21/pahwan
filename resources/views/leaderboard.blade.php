<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leaderboard - Pahwan</title>
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>  
</head>

<body class="font-inter">
  {{-- navbar start --}}
  @include('user-layout.navbar')
  {{-- navbar end --}}

  <div class="flex justify-center pt-1 md:pt-4 bg-gray-100 ">
    <div class="flex flex-col w-7/8 md:w-4/5 min-h-[89vh] max-h-fit">
        {{-- <a href="" class="py-2.5 px-4 rounded hidden md:block">
            <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
            src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
        </a> --}}
        <h1 >Leaderboard</h1>

        <div class="">
            {{-- RANK 1 --}}
            <div class="flex items-center bg-yellow-300 rounded-3xl px-4 justify-between">
                <a href="" class="flex py-2.5 px-4 rounded gap-4 items-center">
                    <i class="text-4xl fa-solid fa-crown" style="color: #7a5f00;"></i>
                    <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
                    src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
                    <p class="font-bold text-2xl">Raihan Abdillah </p>
                </a>
                <div class="flex gap-2 font-bold">
                    <p>351 Answers</p>
                    <p>12478 Likes</p>
                </div>
            </div>

            {{-- RANK 2 --}}
            <div class="flex items-center bg-red-300 rounded-3xl px-4 justify-between mt-2">
                <a href="" class="flex py-2.5 px-4 rounded gap-4 items-center">
                    <p class="w-[40.5px] text-4xl text-center font-bold text-red-700">2</p>
                    <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
                    src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
                    <p class="font-bold text-2xl">Alwin Liufandy</p>
                </a>
                <div class="flex gap-2 font-bold">
                    <p>196 Answers</p>
                    <p>1627 Likes</p>
                </div>
            </div>

            {{-- RANK 3 --}}
            <div class="flex items-center bg-green-300 rounded-3xl px-4 justify-between mt-2">
                <a href="" class="flex py-2.5 px-4 rounded gap-4 items-center">
                    <p class="w-[40.5px] text-4xl text-center font-bold text-green-700">3</p>
                    <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
                    src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
                    <p class="font-bold text-2xl">Grant Gabriel</p>
                </a>
                <div class="flex gap-2 font-bold">
                    <p>189 Answers</p>
                    <p>1526 Likes</p>
                </div>
            </div>

            {{-- RANK 4-10 --}}
            @for ($i = 4; $i < 11; $i++)
            <div class="flex items-center bg-white rounded-3xl px-4 justify-between mt-2">
                <a href="" class="flex py-2.5 px-4 rounded gap-4 items-center">
                    <p class="w-[40.5px] text-4xl text-center font-bold">{{$i}}</p>
                    <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
                    src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
                    <p class="font-bold text-2xl">Raden Khairu</p>
                </a>
                <div class="flex gap-2 font-bold">
                    <p>152 Answers</p>
                    <p>1041 Likes</p>
                </div>
            </div>
            @endfor

            {{-- RANK MILIK USER --}}
            <div class="flex items-center bg-customBlue text-white rounded-3xl px-4 justify-between mt-2">
                <a href="" class="flex py-2.5 px-4 rounded gap-4 items-center">
                    <p class="w-[40.5px] text-4xl text-center font-bold">28</p>
                    <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
                    src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
                    <p class="font-bold text-2xl">You</p>
                </a>
                <div class="flex gap-2 font-bold">
                    <p>22 Answers</p>
                    <p>84 Likes</p>
                </div>
            </div>
        </div>
    </div>
  </div>

  
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>