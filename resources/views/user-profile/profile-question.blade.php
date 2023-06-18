<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>

    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="font-inter overflow-x-hidden">
    {{-- navbar start --}}
    @include('user-layout.navbar')
    {{-- navbar end --}}

    <div class="flex justify-center pt-1 md:pt-4 bg-gray-100">
        <div class="pt-6 md:pt-10 mx-6 md:mx-0 w-full md:w-3/5 min-h-[89vh] max-h-fit">
            {{-- PROFILE DETAIL START --}}
            @include('user-profile.profile-detail')
            {{-- PROFILE DETAIL END --}}

            <div class="flex mt-2">
                <div class="w-full lg:w-3/4 lg:pr-4">
                    {{-- USER QUESTION START --}}
                    <div class="bg-white border border-1 border-solid border-[#dadada] mb-4 px-4 py-4">
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
                                        <p>Delete</p>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- USER QUESTION END --}}
                </div>
                
                {{-- PROFILE DISCOVER --}}
                <div class="lg:w-1/3 hidden lg:block">
                    @include('user-profile.discover-user')
                </div>
                {{-- PROFILE DISCOVER END --}}
            </div>
        </div>
    </div>

    {{-- EDIT PROFILE MODAL START --}}
    <div id="edit-profile-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div id="overlay" class="fixed inset-0 bg-gray-700 opacity-0 transition-opacity"></div>
        <div id="modalContent" class="bg-white w-5/6 sm:w-5/6 md:w-3/4 lg:w-1/2 p-2 md:p-6 rounded-lg shadow-lg transform scale-0 transition-transform">
            <button id="closeModalButton" data-target="edit-profile-modal"
                class="text-3xl bg-transparent text-customBlue rounded modal-close">
                &times;
            </button>
            <div class="mt-2">
                <form action="" class="mt-2">
                    <div class="flex gap-4">
                        <div class="ml-2 w-1/5 md:w-1/4">
                            <img class="block w-10 h-10 md:w-20 md:h-20 rounded-full"
                            src="https://i.pinimg.com/564x/fa/a7/0e/faa70eb03ab30a0e991724a4702e90fc.jpg" alt="">
                            <input type="file" class="hidden" id="fileInput" onchange="handleFileChange()">
                            <label for="fileInput">
                                <i class="fas fa-image"></i>
                                <span class="text-sm md:text-base">Choose Image</span>
                            </label>
                        </div>

                        <div class="w-4/5">
                            <div class="flex items-center gap-1 md:mt-2">
                                <label class="w-1/4 md:w-1/3 text-xs font-bold md:font-normal md:text-base" for="name">Name</label>
                                <input class="rounded-xl h-[30px] w-3/4 md:w-3/4" type="text" name="" id="name" value="Raihan Abdillah" placeholder="name">
                            </div>
                            <div class="flex items-center gap-1 md:mt-2">
                                <label class="w-1/4 md:w-1/3 text-xs font-bold md:font-normal md:text-base" for="email">Email</label>
                                <input class="rounded-xl h-[30px] w-3/4 md:w-3/4" type="email" name="" value="raihan@gmail.com" id="email" placeholder="email">
                            </div>
                            <div class="flex items-center gap-1 md:mt-2">
                                <label class="w-1/4 md:w-1/3 text-xs font-bold md:font-normal md:text-base" for="password">Password</label>
                                <input class="rounded-xl h-[30px] w-3/4 md:w-3/4" type="password" value="11111111" name="" id="password" placeholder="password">
                            </div>
                            <div class="flex items-center gap-1 md:mt-2">
                                <label class="w-1/4 md:w-1/3 text-xs font-bold md:font-normal md:text-base" for="number">Phone Number</label>
                                <input class="rounded-xl h-[30px] w-3/4 md:w-3/4" type="text" name="" value="0818181818" id="number" placeholder="number">
                            </div>
                            <div class="flex items-center gap-1 md:mt-2">
                                <label class="w-1/4 md:w-1/3 text-xs font-bold md:font-normal md:text-base" for="password">Gender</label>
                                <select class="h-[40px] w-3/4 md:w-3/4 rounded-xl" name="" id="password">
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        
         
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit"
                            class="bg-customBlue text-white rounded-2xl px-4 py-1 transition duration-200 hover:bg-blue-900">Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- EDIT PROFILE MODAL END --}}

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

<script>
    // post dropdown
    function toggleReport() {
        const replyDiv = document.getElementById("more-dropdown");
    
        if (replyDiv.classList.contains("hidden")) {
          replyDiv.classList.remove("hidden");
        } else {
          replyDiv.classList.add("hidden");
        }
    }
    
    // reply
    function toggleReply() {
        const replyDiv = document.getElementById("reply");
    
        if (replyDiv.classList.contains("hidden")) {
          replyDiv.classList.remove("hidden");
        } else {
          replyDiv.classList.add("hidden");
        }
    }
    
    </script>
    
    <script>
    const textarea = document.getElementById('replyTextarea');
    
    textarea.addEventListener('input', () => {
      textarea.style.height = 'auto'; // Atur tinggi textarea menjadi auto untuk mengukur teks yang terisi
      textarea.style.height = `${textarea.scrollHeight}px`; // Sesuaikan tinggi textarea dengan scrollHeight
    });
    </script>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>