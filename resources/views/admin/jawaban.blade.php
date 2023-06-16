<x-main-layout title="Pertanyaan">
  @section('content')
  <!-- table 1 -->
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="flex-none w-full max-w-full px-3">
      <div
        class="relative flex flex-col min-w-0 mb-6 break-word dark:bg-slate-500 bg-white border-0 border-transparent border-solid shadow-xl dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6 class="dark:text-white text-black text-2xl">Jawaban <span class="uppercase font-semibold text-white-50">{{
              $kategori->kategori
              }}</span>
          </h6>
        </div>

        {{-- search --}}
        <form action="" method="GET" class="flex m-auto w-1/4 my-3">
          @csrf
          <input class="rounded-s-xl py-2 px-3" value="{{ request()->pencarian }}" name="pencarian" style="width: 100%"
            type="text" placeholder="Cari.." aria-label="Search" autocomplete="off" />
          <button class="bg-slate-400 py-2 px-3 rounded-e-xl text-white" type="submit">
            Cari
          </button>
        </form>
        {{-- akhir search --}}

        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table
              class="items-center text-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500 ">
              <thead class="align-bottom">
                <tr>
                  <th
                    class="px-6 py-3 font-bold uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    No</th>
                  <th
                    class="px-6 py-3 font-bold uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal</th>
                  <th <th
                    class="px-6 py-3 font-bold uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Penulis</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Pertanyaan</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Jawaban</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Jumlah Report</th>
                  <th
                    class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                </tr>
              </thead>
              <tbody>
                @php
                $i = 1
                @endphp
                @foreach ($jawabans as $jawaban)
                <tr>
                  <td
                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{
                      $i + (($jawabans->currentPage()-1) * 5) }}</span>
                  </td>
                  <td
                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{
                      date('d / m / Y',strtotime($jawaban->created_at)) }}
                  </td>
                  <td
                    class="p-2 text-center bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center w-full">
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $jawaban->pengguna->nama }}</h6>
                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                          {{ $jawaban->pengguna->email }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 w-1/4 shadow-transparent">
                    <p class="mb-0 text-xs text-wrap font-semibold leading-tight dark:text-white dark:opacity-80">{{
                      $jawaban->pertanyaan->pertanyaan }}</p>
                    </p>
                  </td>
                  <td
                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 shadow-transparent">
                    <span
                      class="mb-0 text-xs text-wrap font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-40">{{
                      Str::limit($jawaban->jawaban, 200) }}</span>
                  </td>
                  <td
                    class="p-2 w-1/10 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <span class="text-lg font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{
                      $jawaban->report_jawaban->count() }}</span>
                  </td>
                  <td
                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <!-- Modals Component Start -->
                    <div class="inline items-center justify-center py-2">
                      <button data-target="detail-modals-component{{ $i }}"
                        class="text-md px-2 py-1 bg-slate-300 rounded text-black font-semibold leading-tight dark:opacity-80 modal-trigger">
                        Detail
                      </button>
                    </div>
                    <!-- Modals Component Start -->
                    <div class="inline-block items-center justify-center py-2">
                      <button data-target="hapus-modals-component{{ $i }}"
                        class="text-md px-2  py-1 bg-red-500 rounded ms-3 font-semibold leading-tight dark:text-white dark:opacity-80 modal-trigger">
                        Hapus
                      </button>
                    </div>
                  </td>
                </tr>
                {{-- modal detail --}}
                <div id="detail-modals-component{{ $i }}"
                  class="fixed inset-0 flex items-center justify-center z-50 hidden ">
                  <div id="overlay" class="fixed inset-0 bg-gray-500 opacity-0 transition-opacity"></div>
                  <div id="modalContent"
                    class="bg-white dark:bg-gray-800 w-full overflow-y-scroll max-h-[90%] max-w-4xl p-6 rounded-lg shadow-lg transform scale-0 transition-transform text-center">
                    <h2 class="text-2xl font-bold mb-4 text-center dark:text-white">
                      Detail Jawaban
                    </h2>
                    <p class="mb-4 text-lg text-center text-white">Pertanyaan {{ $jawaban->pertanyaan->pengguna->nama }}
                    </p>
                    <p class="mb-4 text-center text-slate-300">"{{ $jawaban->pertanyaan->pertanyaan
                      }}"
                    </p>
                    <p class="mb-4 text-lg text-center text-white">Jawaban {{ $jawaban->pengguna->nama }}
                    </p>
                    <p class="mb-4 text-center text-slate-300">"{{ $jawaban->jawaban
                      }}"
                    <p class="mb-4 text-lg text-center text-white">Report Jawaban
                      @foreach ($jawaban->report_jawaban as $report)
                    </p>
                    <p class="mb-4 text-center text-slate-300"> {{
                      date('d / m / Y',strtotime($report->created_at)) }} {{ $report->pengguna->nama
                      }}
                      @endforeach
                    </p>
                    <button id="closeModalButton" data-target="detail-modals-component{{ $i }}"
                      class="px-4 py-2 bg-blue-500 text-white rounded modal-close mt-3">
                      Close
                    </button>
                  </div>
                </div>
                {{-- end-modal detail --}}
                {{-- modal hapus --}}
                <div id="hapus-modals-component{{ $i }}"
                  class="fixed inset-0 flex items-center justify-center z-50 hidden">
                  <div id="overlay" class="fixed inset-0 bg-gray-500 opacity-0 transition-opacity"></div>
                  <div id="modalContent"
                    class="bg-white dark:bg-gray-800 w-1/2 max-w-lg p-6 rounded-lg shadow-lg transform scale-0 transition-transform text-center">
                    <h2 class="text-2xl font-bold mb-4 text-center dark:text-white">
                      Hapus Pertanyaan
                    </h2>
                    <p class="mb-4 text-center text-white">Yakin Ingin Menghapus Jawaban "{{
                      Str::limit($jawaban->jawaban, 100) }}
                      ??"
                    </p>
                    <button id="closeModalButton" data-target="hapus-modals-component{{ $i }}"
                      class="px-4 py-2 bg-blue-500 text-white rounded modal-close mt-3">
                      Close
                    </button>
                    <form action="/jawaban/{{ $jawaban->id }}" method="POST" class="inline-block ms-10 mt-3">
                      @csrf
                      @method('delete')
                      <button type="submit" class="bg-red-500 rounded-md py-2 px-3 text-white">
                        Hapus
                      </button>
                    </form>
                  </div>
                </div>
                {{-- end-modal hapus --}}
                @php
                $i++
                @endphp
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-10 w-1/5 m-auto">
    {{ $jawabans->links() }}
  </div>

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