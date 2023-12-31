<!--

=========================================================
* Argon Dashboard 2 Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html class="light">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin-template/img/apple-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('admin-template/img/favicon.png') }}" />
  <title>{{ $title }} | PahWan</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{ asset('admin-template/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-template/css/nucleo-icons-svg.css') }}" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="{{ asset('admin-template/css/argon-dashboard-tailwind.css') }}" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{--
  <link href="{{ asset('admin-template/css/argon-dashboard-my-tailwindcss.css') }}" rel="stylesheet" /> --}}
</head>

<body
  class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
  <!-- sidenav  -->
  <aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">

    <hr
      class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        @foreach ($navbar as $name => $url)
        <li class="mt-0.5 w-full">
          <a class="dark:text-stone-800 dark:opacity-80 py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
              @if($title == $name)
              py-2.7 bg-blue-500/13 rounded-lg font-bold text-slate-700
              @else
              font-semibold
              @endif
            " href="/admin{{ $url }}">
            <div class=" mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center
            xl:p-2.5">
              <i class="relative top-0 leading-normal
                @if($name == 'Dashboard') text-blue-500 ni ni-tv-2 @elseif($name=='Pertanyaan List' ) text-orange-500 ni ni-collection @elseif($name=='Kategori' ) ni ni-tag @elseif($name=='User List' ) text-emerald-500 ni ni-bullet-list-67 @elseif($name=='Report List' ) text-red-700 ni ni-notification-70 @endif "></i>
            </div>
            <span class=" ml-1 duration-300 opacity-100 pointer-events-none ease">{{ $name }}</span>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </aside>
  <!-- end sidenav -->

  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <nav
      class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
      navbar-main navbar-scroll="false">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="text-white opacity-50" href="javascript:;">Admin</a>
            </li>
            <li
              class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
              aria-current="page">Page</li>
          </ol>
          <h6 class="mb-0 font-bold text-white capitalize">{{ $title }}</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          @if($title !== "Kategori" && $title !== "Pertanyaan")  
            {{-- Search Coloumn Start --}}
            <div class="tes-search flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                <span
                  class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text"
                  class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
                  placeholder="Type here..." />
              </div>
            </div>
            {{-- Search Coloumn End --}}
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          @else
          @endif
          <ul class="flex flex-row w-full justify-end pl-0 mb-0 list-none md-max:w-full">
            {{-- Sign in button start --}}
            <li class="flex items-center">
              <a href="./pages/sign-in.html"
                class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                <i class="fa fa-user sm:mr-1"></i>
                <span class="hidden sm:inline">Sign In</span>
              </a>
            </li>
            {{-- Sign in button end --}}

            {{-- side navbar trigger button start --}}
            <li class="flex items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                </div>
              </a>
            </li>
            {{-- side navbar trigger button end --}}

            <!-- notifications -->

            <li class="relative flex items-center pr-2 pl-4">
              <p class="hidden transform-dropdown-show"></p>
              <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" dropdown-trigger
                aria-expanded="false">
                <i class="cursor-pointer fa fa-bell"></i>
              </a>

              <ul dropdown-menu
                class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                  <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                    href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                            class="font-semibold">New message</span> from Laur</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                          <i class="mr-1 fa fa-clock"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- end Navbar -->

    <!-- cards content -->
    <div class="w-full px-6 py-6 mx-auto">
      {{-- INSERT CONTENT --}}
      @yield('content')
    </div>
    <!-- end cards content -->
  </main>
</body><!-- plugin for scrollbar  -->
<script src="{{ asset('admin-template/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('admin-template/js/argon-dashboard-tailwind.js') }}" async></script>

</html>