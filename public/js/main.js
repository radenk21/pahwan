function toggleSidebar() {
  const replyDiv = document.getElementById("sidebar");

  replyDiv.classList.remove("translate-x-[400px]");
  replyDiv.classList.add("translate-x-0");
}

function closeSidebar() {
  const replyDiv = document.getElementById("sidebar");

  replyDiv.classList.remove("translate-x-0");
  replyDiv.classList.add("translate-x-[400px]");
}

// navbar
var paragraph = document.querySelector('#paragraph');
var text = paragraph.innerHTML;
var maxLength = 300;

if (text.length > maxLength) {
var shortenedText = text.substr(0, maxLength);
var remainingText = text.substr(maxLength);

paragraph.innerHTML = shortenedText + '<span id="readMore">... <a href="#" onclick="showRemainingText(); return false;"><b class="text-customBlue">Baca Selengkapnya</b></a></span>';

function showRemainingText() {
    paragraph.innerHTML = text + ' <a href="#" onclick="hideRemainingText(); return false;"><b class="text-customBlue">Sembunyikan</b></a>';
}

function hideRemainingText() {
    paragraph.innerHTML = shortenedText + '<span id="readMore">... <a href="#" onclick="showRemainingText(); return false;"><b class="text-customBlue">Baca Selengkapnya</b></a></span>';
}
}
