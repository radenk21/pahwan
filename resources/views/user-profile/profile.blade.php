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
                    {{-- USER ANSWERS START --}}
                    <div class="bg-white border border-1 border-solid border-[#dadada] mb-4 px-4 py-6">
                        {{-- author detail --}}
                        <div class="flex justify-between items-center h-4">
                          <div class="flex gap-4 items-center">
                            <img src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" class="object-cover rounded-full w-[45px] h-[45px]" alt="">
                            <p class="font-bold">Raihan Abdillah</p>
                            {{-- Follow muncul jika milik user lain --}}
                            {{-- <p class="text-xs text-customBlue">&#8226; <a href="">Follow</a></p> --}}
                          </div>
                    
                          {{-- hamburger dropdown --}}
                          <div class="text-xl relative">
                            <button id="more" class="px-4 py-2 border-none rounded-md focus:outline-none" onclick="toggleReport()">
                              <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="bg-white shadow-lg w-[180px] rounded-md p-2 text-sm leading-8 absolute right-0 top-6 hidden" id="more-dropdown">
                              {{-- <a href=""><i class="fa-regular fa-flag"></i> Report post</a> --}}
                              <form action="">
                                  <button type="submit" class="flex items-center">Delete Post</button>
                                </form>
                            </div>
                          </div>
                    
                        </div>
                    
                        {{-- content --}}
                        <div class="mt-8">
                          <p class="font-bold text-lg">
                            Lorem ipsum dolor sit
                          </p>
                          <p id="paragraph" class="font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis rerum atque soluta deserunt, dolor tempore veniam. Vel aspernatur quisquam, quos placeat a cupiditate consequuntur! Reprehenderit dolor cupiditate necessitatibus rem voluptatem. Similique odit ipsam sapiente beatae quia omnis porro saepe optio sint, cum ex, quaerat commodi quae itaque quas laborum quos. Delectus, corrupti? Mollitia suscipit, quis ducimus itaque eius voluptates. Dolores eveniet debitis, numquam tempora quis quo similique velit, saepe incidunt quibusdam amet vel facere rem optio iusto labore nulla earum quas. Sit consectetur molestias aliquam! Esse rerum temporibus eligendi enim cumque. Dicta inventore quis aliquam repellendus magnam magni provident numquam?</p>
                          <img src="https://i.pinimg.com/564x/fc/61/12/fc6112da965d17592999a7108441a641.jpg" 
                          class="w-[100%]" alt="">
                        </div>
                    
                        {{-- actions --}}
                        <div class="mt-2">
                          <p class="text-sm">
                            Liked by 
                            <span class="font-bold">rrreyabd</span> 
                            and
                            <span class="font-bold">280 others</span> 
                          </p>
                    
                          <div class=" rounded-xl py-1 lg:py-2 flex mt-2 justify-evenly items-center gap-4 text-xl px-2 lg:px-4">
                            {{-- like --}}
                            <a class="flex gap-1 items-center" href="">
                              <i class="text-lg fa-regular fa-heart"></i>
                              <p class="text-xs">281</p>
                            </a>
                    
                            {{-- reply --}}
                            <button class="flex gap-1 items-center" id="replyBtn" onclick="toggleReply()">
                              <i class="text-lg fa-regular fa-comment"></i>
                              <p class="text-xs">147</p>
                            </button>
                    
                            {{-- bookmark --}}
                            <a class="flex gap-1 items-center" href="">
                              <i class="text-lg fa-regular fa-bookmark"></i>
                              <p class="text-xs">23</p>
                            </a>
                          </div>
                        </div>
                        
                        {{-- show reply --}}
                        <div id="reply" class="hidden mt-2">
                          <div class="flex items-center w-[100%]">
                            <form action="" class="flex gap-2 w-[100%] items-center">
                              <img src="https://i.pinimg.com/736x/1a/6d/36/1a6d3657bca0faf010d72d8548e5f839.jpg" 
                              class="rounded-full w-[40px] h-[40px] object-cover" alt="">
                              <textarea class="bg-gray-200 px-4 py-2 rounded-2xl resize-none overflow-y-hidden w-[90%] h-10 lg:w-[450px] lg:h-[40px]"  
                              id="replyTextarea" type="text" placeholder="Tambahkan komentar..."></textarea>
                              <button class="bg-customBlue text-white px-4 rounded-full flex items-center justify-center
                              w-[40px] h-[40px]"><i class="fa-solid fa-paper-plane"></i></button>
                            </form>
                          </div>
                    
                          <div class="mt-2">
                            {{-- foreach reply --}}
                            <div class="flex mt-4 w-[100%]">
                              <div class="overflow-hidden lg:w-[40px]">
                                <img src="https://avatars.githubusercontent.com/u/99064873?v=4" 
                                  class="rounded-full w-[40px] h-[40px] object-cover" alt="">
                              </div>
                              <div class="ms-4 w-[94%] lg:w-[500px]">
                                <p class="font-bold">Alwin Liufandy</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla, dolor eaque cupiditate rem obcaecati eos accusamus vitae corrupti harum?</p>
                              </div>
                            </div>
                            {{-- endforeach reply --}}
                    
                          </div>
                        </div>
                      </div>
                    {{-- USER ANSWERS END --}}
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