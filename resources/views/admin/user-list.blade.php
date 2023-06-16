<x-main-layout title="User List">
    @section('content')
    <label for="table-search" class="sr-only">Search</label>
    <div class="relative mb-6 mt-1">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <form action="" method="get">
            @csrf
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="pencarian" aria-label="pencarian" autocomplete="off" value="{{ request()->pencarian }}" placeholder="Cari User">
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Pengguna
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Pertanyaan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Jawaban
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Komentar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Report Masuk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = ($user_list->currentPage() - 1) * $user_list->perPage() + 1;
                @endphp
                @foreach ($user_list as $pengguna)
                    @php
                        $reportCount = 0;
                    @endphp
                    <tr class="bg-white border-b dark:bg-gray-800 text-center dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $number }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pengguna->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $pengguna->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pengguna->pertanyaan->count() }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pengguna->jawaban->count() }}
                        </td>                                
                        <td class="px-6 py-4">
                            {{ $pengguna->komentar->count() }}
                        </td>                                
                        <td class="px-6 py-4">
                            @foreach ($pengguna->pertanyaan as $pertanyaan)
                                @php
                                    $reportCount += $pertanyaan->report_pertanyaan->count()
                                @endphp
                            @endforeach
                            @foreach ($pengguna->jawaban as $jawaban)
                                @php
                                    $reportCount += $jawaban->report_jawaban->count()
                                @endphp
                            @endforeach
                            @foreach ($pengguna->komentar as $komentar)
                                @php
                                    $reportCount += $komentar->report_komentar->count()
                                @endphp
                            @endforeach
                            {{ $reportCount }}
                        </td>                                
                        <td class="flex items-center px-6 py-4 space-x-3">
                            {{-- Modal trigger start --}}
                            <button data-modal-target="popup-modal-{{ $number }}" data-modal-toggle="popup-modal-{{ $number }}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800" type="button">
                                Delete
                            </button>
                        </td>
                    </tr>
                    {{-- Delete modal start --}}
                        <div id="popup-modal-{{ $number }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-{{ $number }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                            Yakin ingin menghapus pengguna <br>
                                            {{-- "{{ $pengguna->pengguna }}" --}}
                                        </h3>
                                        <form action="/admin/pengguna/{{ $pengguna->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button data-modal-hide="popup-modal-{{ $number }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Hapus
                                            </button>
                                        </form>
                                        <button data-modal-hide="popup-modal-{{ $number }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak, close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- Delete modal end --}}
                    @php
                        $number++;
                    @endphp
                @endforeach
                
            </tbody>
        </table>
    </div>
    <div class="w-full flex place-content-center">
        <div class="w-48">
            {{ $user_list->links() }}
        </div>
    </div>
    @endsection
</x-main-layout>