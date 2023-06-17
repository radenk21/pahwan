  <div class="sticky top-0 z-50 bg-white">
    <div class="relative flex flex-col items-center shadow-md">
      <div class="h-16 border-b  flex w-full lg:w-4/5 items-center px-4 md:px-8 justify-between">
        <a href="{{route('index')}}">
          <h1 class="text-xl font-bold text-customBlue">PAHWAN</h1>
        </a>
        <nav class="hidden md:flex items-center mx-auto">
          <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:text-customBlue">
            For you
          </a>
          <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:text-customBlue">
            Following
          </a>
          <a href="{{ route('question')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:text-customBlue">
            Questions
          </a>
          <div class="input-wrapper sm:hidden md:block lg:block">
            <input type="text" placeholder="Search here..." name="text" class="bg-white border-none px-4 py-2 text-sm 
            lg:w-40 focus:lg:w-80 focus:transition-all duration-300 ease-in-out rounded-lg text-lightcoral shadow-md
            focus:outline-lightcoral hidden md:block" autocomplete="off">
          </div>        
        </nav>
        <a href="{{route('profile')}}" class="py-2.5 px-4 rounded hidden md:block">
          <img class="block w-10 h-10 rounded-full sm:hidden md:block lg:block"
            src="https://i.pinimg.com/564x/4b/22/ea/4b22eaa178362386c3a341fb5d5e5e3e.jpg" alt="">
        </a>

        {{-- sidebar button start --}}
        <button onclick="toggleSidebar()"
          class="mobile-menu-button md:hidden md:p-4 focus:outline-none">
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        {{-- sidebar button end --}}
      </div>
      <div id="sidebar" class="sidebar absolute py-2 px-4 top-0 right-0 w-60 h-screen bg-customBlue 
      shadow-lg border-l rounded-l-2xl transform translate-x-full md:hidden transition duration-200 ease-in-out">
      <div class="flex justify-between">
        <button class="text-2xl text-white" onclick="closeSidebar()">&times;</button>
        <a href="{{route('profile')}}">
          <img src="https://i.pinimg.com/736x/1a/6d/36/1a6d3657bca0faf010d72d8548e5f839.jpg" 
          class="object-cover rounded-full mt-2 w-[40px] h-[40px]" alt="">
        </a>
      </div>
  
        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-xl flex items-center gap-2">
            <i class="fa-solid fa-magnifying-glass w-[25px] h-[25px]"></i>
            <p>Search</p>
          </a>
        </div>
        
        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-xl flex items-center gap-2">
            <i class="fas fa-star w-[25px] h-[25px]"></i>
            <p>For you</p>
          </a>
        </div>
  
        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-xl flex items-center gap-2">
            <i class="fas fa-heart w-[25px] h-[25px]"></i>
            <p>Following</p>
          </a>
        </div>

        <div class="h-14 flex justify-start items-center">
          <a href="{{ route('question')}}" class="text-white text-xl flex items-center gap-2">
            <i class="fas fa-question-circle w-[25px] h-[25px]"></i>
            <p>Question</p>
          </a>
        </div>
  
        <div class="h-14 flex justify-start items-center">
          <a href="{{route('leaderboard')}}" class="text-white text-xl flex items-center gap-2">
            <i class="fa-solid fa-ranking-star w-[25px] h-[25px]"></i>
            <p>Leaderboard</p>
          </a>
        </div>
  
        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-xl flex items-center gap-2">
            <i class="fa-solid fa-list w-[25px] h-[25px]"></i>
            <p>Category</p> 
          </a>
        </div>

        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-lg flex items-center gap-2">
            <p class="text-3xl">&centerdot;</p>
            <p>Category 1</p> 
          </a>
        </div>

        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-lg flex items-center gap-2">
            <p class="text-3xl">&centerdot;</p>
            <p>Category 2</p> 
          </a>
        </div>

        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-lg flex items-center gap-2">
            <p class="text-3xl">&centerdot;</p>
            <p>Category 3</p> 
          </a>
        </div>

        <div class="h-14 flex justify-start items-center">
          <a href="" class="text-white text-lg flex items-center gap-2">
            <p class="text-3xl">&centerdot;</p>
            <p>Category 4</p> 
          </a>
        </div>

      </div>
    </div>
  </div>