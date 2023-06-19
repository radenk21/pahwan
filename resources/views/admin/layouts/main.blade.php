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
<html class="dark">

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
  {{-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> --}}
</head>

<body
  class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
  <!-- sidenav  -->

  <aside id="default-sidebar"
    class="top-0 left-0 z-40 h-screen sm:translate-x-0 md:translate-x-0 fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        @foreach ($navbar as $name => $url)
          <li class="mt-0.5 w-full">
            <a class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-gray-100 hover:rounded-lg dark:hover:bg-gray-700
                  @if($title == $name)
                  py-2.7 bg-blue-500/13 rounded-lg font-bold text-slate-700
                  @else
                  font-semibold
                  @endif
                " href="/admin{{ $url }}">
              <div class=" mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center
                xl:p-2.5">
                <i
                  class="relative top-0 leading-normal
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
            <li data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
              aria-controls="default-sidebar" type="button"
              class="flex items-center pl-4 text-sm text-white rounded-lg sm:hiddenfocus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 xl:hidden">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
              </svg>
            </li>
            {{-- side navbar trigger button end --}}
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