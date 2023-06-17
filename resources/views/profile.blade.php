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
</head>

<body class="font-inter overflow-y-hidden">
    {{-- navbar start --}}
    @include('user-layout.navbar')
    {{-- navbar end --}}

    <div class="flex justify-center pt-1 md:pt-4 bg-gray-100 ">
        <div class="flex flex-col pt-10 w-7/8 md:w-4/5 min-h-[89vh] max-h-fit">
            <div class="bg-white h-[150px] relative">
                <div class="flex h-4/5 justify-between">
                    <div class="flex w-2/3">
                        <div class="w-1/5">
                            <img class="w-32 h-32 rounded-full absolute top-[-40px] left-6 border-white border-8"
                                src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
                        </div>

                        <div class="w-4/5 pt-4 flex flex-col items-start">
                            <p class="font-bold border-0 text-xl">Raihan Abdillah</p>
                            <p class="border-0 text-sm :outline-none w-full">Undergraduate Information Technology
                                Student</p>
                        </div>
                    </div>

                    <div class="p-4">
                        <button class="bg-customBlue p-2 text-xs text-white modal-trigger"
                            data-target="edit-profile-modal">
                            <p>Edit Profile</p>
                        </button>
                    </div>
                </div>

                <div class="absolute gap-2 text-gray-500 duration-150 transition bottom-0 flex text-sm px-2">
                    <a href="" class="hover:text-black hover:underline visited:underline">0 Answer</a>
                    <a href="" class="hover:text-black hover:underline">1 Question</a>
                    <a href="" class="hover:text-black hover:underline">29 Followers</a>
                    <a href="" class="hover:text-black hover:underline">41 Following</a>
                </div>
            </div>
        </div>
    </div>

    {{-- EDIT PROFILE MODAL START --}}
    <div id="edit-profile-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div id="overlay" class="fixed inset-0 bg-gray-700 opacity-0 transition-opacity"></div>
        <div id="modalContent" class="bg-white w-1/2 p-6 rounded-lg shadow-lg transform scale-0 transition-transform">
            <button id="closeModalButton" data-target="edit-profile-modal"
                class="text-3xl bg-transparent text-customBlue rounded modal-close">
                &times;
            </button>
            <div class="mt-2">
                <form action="" class="mt-2">
                    <div class="flex gap-4">
                        <div class="ml-2 w-1/4">
                            <img class="block w-20 h-20 rounded-full sm:hidden md:block lg:block"
                            src="https://i.pinimg.com/564x/fa/a7/0e/faa70eb03ab30a0e991724a4702e90fc.jpg" alt="">
                            <input type="file" class="hidden" id="fileInput" onchange="handleFileChange()">
                            <label for="fileInput">
                                <i class="fas fa-image"></i>
                                <span>Choose Image</span>
                            </label>
                        </div>

                        <table class="w-1/2">
                            <tr>
                                <td><label for="name">Name</label></td>
                                <td>
                                    <input type="text" id="name" name="" value="Raihan Abdillah" class="rounded-xl" placeholder="Name">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td>
                                    <input type="email" id="email" value="raihanabd@gmail.com" class="rounded-xl" placeholder="Email">    
                                </td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td>
                                    <input type="password" id="password" value="password" class="rounded-xl" placeholder="Password">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="gender">Gender</label></td>
                                <td>
                                    <select name="" id="gender" class="rounded-xl w-full">
                                        <option></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="number">Phone Number</label></td>
                                <td>
                                    <input type="text" name="" id="number" value="+6282277112233" class="rounded-xl" placeholder="Password">   
                                </td>
                            </tr>
                        </table>
         
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
</body>

</html>