const checkboxes = document.querySelectorAll('input[type="checkbox"]');
checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', handleCheckboxChange);
});

function handleCheckboxChange(event) {
    const isChecked = event.target.checked;
    const img = event.target.parentNode.querySelector('img');
    img.classList.toggle('pop-out', isChecked);
}

const skipButton = document.getElementById('skipButton');
skipButton.addEventListener('click', skipCategories);

function skipCategories() {
    const form = document.getElementById('logoForm');
    form.submit();
}