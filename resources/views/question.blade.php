<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions ~ PAHWAN</title>
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

    <div class="flex justify-center pt-1 md:pt-4 bg-gray-100 min-h-[89vh] max-h-fit">
        <div class="flex flex-wrap w-7/8 md:w-4/5">

            {{-- KATEGORI START --}}
            @include('user-layout.category')
            {{-- KATEGORI END --}}

            <div class="w-full lg:w-1/2 pt-2 px-2">
                {{-- Top Question Start --}}
                <div class="bg-white border border-1 border-solid border-[#dadada] mb-4 px-4 py-6">
                    <div class="flex items-center gap-1 h-fit border-transparent pb-4 border-b-gray-300 border">
                        <i class="fa-regular fa-star"></i>
                        <p>Top Questions</p>
                    </div>

                    <div class="pt-2 pb-4 border-transparent border-b-gray-300 border">
                        <a href="">
                            <b class="hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                                eveniet?</b>
                        </a>
                        <div class="flex gap-2">
                            <p class="text-gray-600">711 Answers</p>
                            &centerdot;
                            <p class="text-gray-600">Last answer 20 May 2023</p>
                        </div>
                        <div class="flex justify-between mt-2">
                            <button data-target="answer-modal" class="flex items-center modal-trigger">
                                <div
                                    class="flex items-center gap-2 border border-gray-400 px-3 py-2 rounded-3xl transition duration-200 hover:bg-gray-200">
                                    <i class="fa-solid fa-keyboard"></i>
                                    <p>Answer</p>
                                </div>
                            </button>

                            <button data-target="report-modal" class="modal-trigger">
                                <div
                                    class="flex items-center gap-2 border border-gray-400 px-3 py-2 rounded-3xl transition duration-200 hover:bg-gray-200">
                                    <i class="fa-regular fa-flag"></i>
                                    <p>Report</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                {{-- Top Question End --}}

                {{-- Recent Question Start --}}
                <div class="bg-white border border-1 border-solid border-[#dadada] mb-4 px-4 py-6">
                    <div class="flex items-center gap-2 h-fit border-transparent pb-4 border-b-gray-300 border">
                        <i class="fa-regular fa-clock"></i>
                        <p>Recent Questions</p>
                    </div>

                    <div class="pt-2 pb-4 border-transparent border-b-gray-300 border">
                        <a href="">
                            <b class="hover:underline">Bagaimana cara hack NASA menggunakan HTML?</b>
                        </a>
                        <div class="flex gap-2">
                            <p class="text-gray-600">0 Answer</p>
                            {{-- Jika ada jawaban, munculkan tanggal jawaban terakhir --}}
                            &centerdot;
                            <p class="text-gray-600">Last answer Wednesday</p>
                        </div>
                        <div class="flex justify-between mt-2">
                            <button class="flex items-center gap-2 modal-trigger" data-target="answer-modal">
                                <div
                                    class="flex items-center gap-2 border border-gray-400 px-3 py-2 rounded-3xl transition duration-200 hover:bg-gray-200">
                                    <i class="fa-solid fa-keyboard"></i>
                                    <p>Answer</p>
                                </div>
                            </button>

                            <button data-target="report-modal" class="modal-trigger">
                                <div
                                    class="flex items-center gap-2 border border-gray-400 px-3 py-2 rounded-3xl transition duration-200 hover:bg-gray-200">
                                    <i class="fa-regular fa-flag"></i>
                                    <p>Report</p>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
                {{-- Recent Question End --}}
            </div>

            {{-- stats start --}}
            @include('user-layout.stats')
            {{-- stats end --}}

        </div>
    </div>

    {{-- ANSWER MODAL START --}}
    <div id="answer-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div id="overlay" class="fixed inset-0 bg-gray-700 opacity-0 transition-opacity"></div>
        <div id="modalContent"
            class="bg-white w-3/5 p-6 rounded-lg shadow-lg transform scale-0 transition-transform">
            <button id="closeModalButton" data-target="answer-modal"
                class="text-3xl bg-transparent text-customBlue rounded modal-close">
                &times;
            </button>
            <div class="mt-4 flex gap-2 items-center">
                <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
                src="https://i.pinimg.com/564x/fa/a7/0e/faa70eb03ab30a0e991724a4702e90fc.jpg" alt="">
                <b>Raihan Abdillah</b>
            </div>
            <div class="mt-2">
                <b>Bagaimana cara hack NASA menggunakan HTML?</b>
                <form action="" class="mt-2">
                    <textarea name="" id="" rows="15" class="text-sm w-[100%] focus:outline-none focus:border-transparent resize-none" placeholder="Write your answer"></textarea>
                    <input type="file" class="hidden" id="fileInput" onchange="handleFileChange()">
                    <div class="flex justify-between">
                        <input type="file" id="fileInput" class="hidden">
                        <label for="fileInput">
                            <i class="fas fa-image"></i>
                            <span>Choose Image</span>
                        </label>

                        <button type="submit" class="bg-customBlue text-white rounded-2xl px-4 py-1 transition duration-200 hover:bg-blue-900">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ANSWER MODAL END --}}

    {{-- REPORT MODAL START --}}
    <div id="report-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div id="overlay" class="fixed inset-0 bg-gray-700 opacity-0 transition-opacity"></div>
        <div id="modalContent"
            class="bg-white w-1/4 p-6 rounded-lg shadow-lg transform scale-0 transition-transform">
            <div class="">
                <b>Report question</b>
                <form action="" class="mt-2 leading-8">
                    <div class="">
                        <input type="radio" name="reason"> Spam
                    </div>
                    <div class="">
                        <input type="radio" name="reason"> Hate Speech
                    </div>
                    <div class="">
                        <input type="radio" name="reason"> Harassment and bullying
                    </div>
                    <div class="">
                        <input type="radio" name="reason"> Adult content (Consensual)
                    </div>
                    <div class="flex justify-end gap-3 mt-4">
                        <button id="closeModalButton" data-target="report-modal" class=" modal-close">
                            Cancel
                        </button>
                        <button type="submit" class="bg-customBlue text-white rounded-2xl px-3 transition duration-200 hover:bg-blue-900">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- REPORT MODAL END --}}

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
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>