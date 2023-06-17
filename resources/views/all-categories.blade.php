<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category ~ PAHWAN</title>
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

  <div class="flex justify-center pt-1 md:pt-4 bg-gray-100">
    <div class="flex flex-col w-7/8 md:w-4/5 justify-center items-center min-h-[89vh] max-h-fit">
      
      
      <div class="flex flex-col border items-center justify-center shadow-xl rounded-xl border-gray-300 md:w-5/6 bg-white p-2 md:p-4">
        <div class="w-full pl-4 md:pl-14">
          <p class="font-bold text-xl md:text-3xl">What are you looking for?</p>
        </div>
        
        <div class="flex flex-wrap items-center justify-center">
          @for ($i = 0; $i < 20; $i++)
          <a href="">
            <div class="border-black border rounded-xl h-[100px] w-[150px] flex text-center hover:brightness-90 transition duration-150 m-4 items-center justify-center overflow-hidden relative object-">
              <img src="https://i.pinimg.com/736x/aa/53/68/aa53683a96a23571867f1eafa0d845a1.jpg" alt="">
              <div class="absolute bottom-0 w-full bg-gradient-to-b from-transparent to-black h-[60px]"></div>
              <p class="text-white font-bold absolute left-2 bottom-1">Music</p>
            </div>
          </a>
          @endfor
        </div>

      </div>
    </div>
  </div>

  
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>