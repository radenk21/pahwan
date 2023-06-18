<div class="bg-white h-[180px] md:h-[150px] relative border border-gray-200 p-1">
    <div class="flex h-4/5 justify-between">
        <div class="flex w-2/3">
            <div class="p-2 md:p-0 w-[90px] md:w-[170px] lg:w-[140px]">
                <img class="w-[90px] md:w-32 md:h-32 rounded-full md:absolute  md:top-[-40px] md:left-2 border-white border-2"
                    src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
            </div>

            <div class="w-[200px] md:w-4/5 ml-4 pt-4 flex flex-col items-start">
                <p class="font-bold border-0 text-xl">Raihan Abdillah</p>
                <p class="border-0 text-xs md:text-sm w-full">Undergraduate Information Technology Student</p>
            </div>
        </div>

        <div class="p-2 md:p-4">
            <button class="bg-transparent md:bg-customBlue rounded-full md:rounded-none p-2 text-base md:text-xs text-white modal-trigger"
                data-target="edit-profile-modal">
                <p class="hidden md:block">Edit Profile</p>
                <i class="md:hidden fa-solid fa-gear h-4 w-4 text-customBlue"></i>
            </button>
        </div>
    </div>

    <div class="absolute gap-2 text-gray-500 duration-150 transition bottom-0 flex text-sm px-2">
        <a href="{{route('profile')}}" class="hover:text-black hover:underline visited:underline">0 Answer</a>
        <a href="{{route('profile-question')}}" class="hover:text-black hover:underline">1 Question</a>
        <a href="{{route('profile-followers')}}" class="hover:text-black hover:underline">29 Followers</a>
        <a href="{{route('profile-following')}}" class="hover:text-black hover:underline">41 Following</a>
    </div>
</div>