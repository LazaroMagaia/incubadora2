let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) currentSlide = 0;
    if (index < 0) currentSlide = slides.length - 1;
    document.getElementById('slides').style.transform = `translateX(-${currentSlide * 100}%)`;
}

function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide--;
    showSlide(currentSlide);
}

// Troca automática de slides a cada 3 segundos
setInterval(() => {
    nextSlide();
}, 3000);


/* MENU */
 // Toggle the mobile menu
 document.getElementById('mobileMenuButton').addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
});

// Toggle the mobile dropdown menu
document.getElementById('mobileDropdownButton').addEventListener('click', function () {
    const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
    mobileDropdownMenu.classList.toggle('hidden');
});

// Desktop dropdown toggle
document.getElementById('dropdownButton').addEventListener('click', function () {
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownMenu.classList.toggle('hidden');
});

// Close dropdowns when clicking outside
window.addEventListener('click', function (e) {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileDropdownButton = document.getElementById('mobileDropdownButton');
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');

    if (!mobileMenuButton.contains(e.target) && !document.getElementById('mobileMenu').contains(e.target)) {
        document.getElementById('mobileMenu').classList.add('hidden');
    }
    if (!mobileDropdownButton.contains(e.target) && !mobileDropdownMenu.contains(e.target)) {
        mobileDropdownMenu.classList.add('hidden');
    }
    if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
    }
});