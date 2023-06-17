<div class="lg:w-2/6 p-2 relative hidden lg:block" >
    <div class="bg-white lg:w-[22rem] px-4 py-6 fixed top-21">
        <p class="font-bold">Complete your profile</p>
        <p class="font-bold"><span class="text-customBlue">2 of 4</span> Complete</p>
        <div class="w-full flex justify-center my-4">
        <i class="fa-regular fa-user fa-2xl rounded-full border-2 border-tl-none border-solid border-[#000000] p-8"></i>
        </div>
        <div class="flex justify-center">
        <button class="bg-[#0047ab] text-white font-bold py-2 px-4 rounded-[50px]">Go to profile</button>
        </div>
    </div>

    <div class="bg-white border lg:w-[22rem] mt-2 px-4 py-6 fixed bottom-40 overflow-hidden">
        <p class="mb-4 font-bold">Top Contributors</p> 
        
        <div class="flex justify-between mt-4">
            <div class="flex gap-4 items-center">
                <img src="https://i.pinimg.com/564x/b1/7d/cb/b17dcb45574047e44ee198ef429fbbd4.jpg" class="object-cover rounded-full w-[45px] h-[45px]" alt="">
                <p class="font-bold">Lee Da-bin</p>
            </div>
            <div class="flex gap-4 items-center">
                <p class="text-xs">30 Jawaban</p>
                <p class="text-xs">78 Likes</p>
            </div>
        </div>

        <div class="flex justify-between mt-4">
            <div class="flex gap-4 items-center">
                <img src="https://i.pinimg.com/564x/39/9e/f8/399ef8cd69527a5756cd904b0487ca1a.jpg" class="object-cover rounded-full w-[45px] h-[45px]" alt="">
                <p class="font-bold">Jay Park</p>
            </div>
            <div class="flex gap-4 items-center">
                <p class="text-xs">23 Jawaban</p>
                <p class="text-xs">52 Likes</p>
            </div>
        </div>

        <div class="flex justify-between mt-4">
            <div class="flex gap-4 items-center">
                <img src="https://i.pinimg.com/564x/ba/a2/ab/baa2ab4cd1d4566b974db0c9c68a7558.jpg" class="object-cover rounded-full w-[45px] h-[45px]" alt="">
                <p class="font-bold">Jason Susanto</p>
            </div>
            <div class="flex gap-4 items-center">
                <p class="text-xs">19 Jawaban</p>
                <p class="text-xs">43 Likes</p>
            </div>
        </div>
        <div class="mt-2 text-customBlue items-center gap-1 justify-end flex">
            <a href="{{route('leaderboard')}}">Leaderboard
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>