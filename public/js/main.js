



// For Mobile Menu Function
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenuContent = document.getElementById('mobile-menu-content');

mobileMenuBtn.addEventListener('click', () => {
    mobileMenuContent.classList.toggle('hidden');

});


// For Table
let table = new DataTable('#table-tamu', {
    responsive: true
});
