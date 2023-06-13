<div class="w-full lg:w-1/2 pt-2 px-2">
    {{-- @for ($i = 0; $i < 3; $i++) --}}
    <div class="bg-white border border-1 border-solid border-[#dadada] mb-4 px-4 py-6">
      {{-- author detail --}}
      <div class="flex justify-between items-center h-4">
        <div class="flex gap-4 items-center">
          <img src="https://i.pinimg.com/736x/1a/6d/36/1a6d3657bca0faf010d72d8548e5f839.jpg" class="object-cover rounded-full w-[45px] h-[45px]" alt="">
          <p class="font-bold">Raihan Abdillah</p>
          <p class="text-xs text-customBlue">&#8226; <a href="">Follow</a></p>
        </div>

        {{-- hamburger dropdown --}}
        <div class="text-xl relative">
          <button id="more" class="px-4 py-2 border-none rounded-md focus:outline-none" onclick="toggleReport()">
            <i class="fas fa-ellipsis-h"></i>
          </button>
          <div class="bg-white shadow-lg w-[180px] rounded-md p-2 text-sm leading-8 absolute right-0 top-6 hidden" id="more-dropdown">
            <a href=""><i class="fa-regular fa-flag"></i> Report post</a>
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
      <div id="reply" class="mt-2">
        <div class="flex items-center w-[100%]">
          <form action="" class="flex gap-2 w-[100%] items-center">
            <img src="https://i.pinimg.com/736x/1a/6d/36/1a6d3657bca0faf010d72d8548e5f839.jpg" 
            class="rounded-full w-[40px] h-[40px] object-cover" alt="">
            <textarea class="bg-gray-200 px-4 py-2 rounded-2xl resize-none w-[90%] h-10 lg:w-[450px] lg:h-[40px]"  
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
    {{-- @endfor --}}


</div>




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