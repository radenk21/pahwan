<x-main-layout title="Dashboard">
  @section('content')
  {{-- Table status start --}}

    {{-- <div class="grid w-full max-w-full xl:grid-cols-5 sm:grid-cols-1 mb-7 gap-5 sm:flex sm:place-content-center"> --}}
    {{-- <div class="flex flex-wrap gap-5 place-content-center max-w-full">
      @foreach ($status as $nama_status => $item)    
      <div class="w-full ">
        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $nama_status }}</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item }}</p>
        </a>
      </div>
      @endforeach
    </div> --}}
    {{-- <div class="flex flex-wrap gap-5 place-content-center max-w-full"> --}}
      <div class="grid xl:grid-cols-3 sm:grid-cols-1 gap-5 mb-4">
        @foreach ($status as $nama_status => $item)
        <a href="#" class="">
          <div class="flex place-content-center rounded bg-gray-50 dark:bg-gray-800 border">
            <div class="grid place-content-center">
              <div class="text-center p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $nama_status }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item }}</p>
              </div>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    {{-- </div> --}}
  {{-- Table status start --}}
  @endsection
</x-main-layout>