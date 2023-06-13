<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAHWANA</title>
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>  
</head>
<style>
  .sticky-nav {
    position: sticky;
    top: 0;
    z-index: 999;
  }
</style>

<body class="font-inter">
  {{-- navbar start --}}
  @include('user-layout.navbar')
  {{-- navbar end --}}

  <div class="flex justify-center pt-1 md:pt-4 bg-gray-100">
    <div class="flex flex-wrap w-7/8 md:w-4/5">

      {{-- KATEGORI START --}}
      @include('user-layout.category')
      {{-- KATEGORI END --}}

      {{-- scroll content --}}
      @include('for-you')
      {{-- scroll content end --}}

      {{-- stats start --}}
      @include('user-layout.stats')
      {{-- stats end --}}

    </div>
  </div>

  
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>