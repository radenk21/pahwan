<x-main-layout title="Kategori">
    @section('content')
    <div class="border-2 rounded-lg p-2 w-1/4 m-auto mb-5">
        <form action="/pages/kategori" method="post">
            @csrf
            <label class="block text-center">
                <span class="block text-lg font-medium text-white text-center">Tambah Kategori</span>
                <input name="kategori" type="text" class="text-center m-auto mt-1 block w-3/4 px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500" autocomplete="off" />
                @error('kategori')
                <p class="mt-2 text-center text-pink-600 text-sm">
                    {{ $message }}
                </p>
                @enderror
                <button
                    class="rounded-md bg-slate-500 px-3 py-2 text-white mt-2 hover:bg-slate-600 transition-all">Tambah</button>
            </label>
        </form>
    </div>
    <div class="flex flex-wrap gap-5 justify-center mb-14">
        @php
        $i=1
        @endphp
        @foreach ($kategoris as $kategori)
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-slate-600 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-full">
                            <p
                                class="mb-0 font-sans text-xl text-center font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                {{ $kategori->kategori }}</p>
                            <div class="flex justify-evenly">
                                <a href="/pertanyaan/{{ $kategori->id }}" class="w-25">
                                    <p class="text-md font-semibold">Pertanyaan</p>
                                    <p class="text-center text-3xl">{{ $kategori->pertanyaan->count() }}</p>
                                </a>
                                @php
                                $jumlah_jawaban = 0;
                                foreach ($kategori->pertanyaan as $pertanyaan) {
                                $jumlah_jawaban += $pertanyaan->jawaban->count();
                                }
                                @endphp
                                <a href="/jawaban/{{ $kategori->id }}" class="w-25">
                                    <p class="text-md font-semibold">Jawaban</p>
                                    <p class="text-center text-3xl">{{ $jumlah_jawaban }}</p>
                                </a>
                            </div>
                            <div class="flex justify-evenly">
                                <!-- Modals Component Start -->
                                <div class="flex items-center justify-center py-2">
                                    <button data-target="edit-modals-component{{ $i }}"
                                        class="px-4 py-2 bg-slate-300 text-black rounded modal-trigger">
                                        Edit
                                    </button>
                                </div>
                                <!-- Modals Component Start -->
                                <div class="flex items-center justify-center py-2">
                                    <button data-target="hapus-modals-component{{ $i }}"
                                        class="px-4 py-2 bg-red-500 text-white rounded modal-trigger">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir card 1 --}}
        {{-- modal edit --}}
        <div id="edit-modals-component{{ $i }}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div id="overlay" class="fixed inset-0 bg-gray-500 opacity-0 transition-opacity"></div>
            <div id="modalContent"
                class="bg-white dark:bg-gray-800 w-1/4 max-w-lg p-6 rounded-lg shadow-lg transform scale-0 transition-transform text-center">
                <h2 class="text-2xl font-bold mb-4 text-center dark:text-white">
                    Edit Kategori
                </h2>
                <form action="/pages/kategori/{{ $kategori->id }}" class="m-auto w-50" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    {{-- Nama Produk --}}
                    <div class="mb-5">
                        <input name="kategori" type="text" class="text-center m-auto mt-1 block w-1/2 px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500" autocomplete="off"
                            value="{{ $kategori->kategori }}" />
                        @error('kategori')
                        <p class="mt-2 text-center text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{-- akhir nama produk --}}
                    <button type="button" id="closeModalButton" data-target="edit-modals-component{{ $i }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded modal-close">
                        Close
                    </button>
                    <button type="submit" class="px-4 py-2 bg-slate-300 text-black ms-10 mt-3 rounded">
                        Edit
                    </button>
                </form>
            </div>
        </div>
        {{-- end-modal edit --}}
        {{-- modal hapus --}}
        <div id="hapus-modals-component{{ $i }}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div id="overlay" class="fixed inset-0 bg-gray-500 opacity-0 transition-opacity"></div>
            <div id="modalContent"
                class="bg-white dark:bg-gray-800 w-1/2 max-w-lg p-6 rounded-lg shadow-lg transform scale-0 transition-transform text-center">
                <h2 class="text-2xl font-bold mb-4 text-center dark:text-white">
                    Hapus Kategori
                </h2>
                <p class="mb-4 text-center text-white">Yakin Ingin Menghapus Kategori "{{ $kategori->kategori }} ??"</p>
                <button id="closeModalButton" data-target="hapus-modals-component{{ $i }}"
                    class="px-4 py-2 bg-blue-500 text-white rounded modal-close mt-3">
                    Close
                </button>
                <form action="/pages/kategori/{{ $kategori->id }}" method="POST" class="inline-block ms-10 mt-3">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-500 rounded-md py-2 px-3 text-white">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
        {{-- end-modal hapus --}}
        <!-- Modals Component End -->
        @php
        $i++
        @endphp
        @endforeach
    </div>
    <!-- Modals Component End -->

    <!-- Modals Listener Script Start -->
    <script>
        const modalTriggers = document.querySelectorAll(".modal-trigger");
        const modalCloses = document.querySelectorAll(".modal-close");
        const modals = document.querySelectorAll(".modal");
  
        modalTriggers.forEach((trigger) => {
          trigger.addEventListener("click", () => {
            const targetModalId = trigger.getAttribute("data-target");
            const targetModal = document.getElementById(targetModalId);
            targetModal.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
  
            setTimeout(() => {
              targetModal.querySelector("#overlay").classList.add("opacity-50");
              targetModal
                .querySelector("#modalContent")
                .classList.add("scale-100");
            }, 100);
          });
        });
  
        modalCloses.forEach((close) => {
          close.addEventListener("click", () => {
            const targetModalId = close.getAttribute("data-target");
            const targetModal = document.getElementById(targetModalId);
            targetModal.querySelector("#overlay").classList.remove("opacity-50");
            targetModal
              .querySelector("#modalContent")
              .classList.remove("scale-100");
  
            setTimeout(() => {
              targetModal.classList.add("hidden");
              document.body.classList.remove("overflow-hidden");
            }, 300);
          });
        });
    </script>
    <!-- Modals Listener Script End -->
    @endsection
</x-main-layout>