<div class="w-full sm:w-1/3 md:w-30p lg:w-1/6 p-2 hidden lg:block relative">
    <div class="bg-white px-4 py-6 fixed w-[12%]">
        <p class="font-bold">Topik</p>
        @php
            $categories = ['Ilmu Komputer & Teknologi Informasi', 'Kedokteran',
            'Kehutanan', 'Pertanian', 'Ilmu Budaya', 'Ekonomi Bisnis',
            'Matematika dan Ilmu Pengetahuan Alam', 'Ilmu Sosial & Ilmu Politik']
        @endphp
        {{-- @for ($i = 1; $i < 12; $i++) <a href=""> --}}
            @foreach ($categories as $kategori)
            <div class="flex mt-4 gap-1">
                <a href="">
                    <p class="hover:text-customBlue hover:underline">{{$kategori}}</p>
                </a>
            </div>
            </a>
            @endforeach
            <div class="mt-2 flex justify-end">
                <a href="{{route('categories')}}">
                    <p class="text-customBlue">See More...</p>
                </a>
            </div>
        {{-- @endfor --}}
    </div>
</div>