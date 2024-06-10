// Referensi DOM
const menuIcon = document.querySelector("#menu-icon");
const navLinkItems = document.querySelectorAll(".nav-links li");
const addToCartButtons = document.querySelectorAll(".pesanan");
const pesananButton = document.querySelector("#pesanan");
const contactUsButton = document.querySelector("#contact-us"); // Mengasumsikan Anda memiliki tombol contact-us

// Pendengar Acara
menuIcon.addEventListener("click", toggleNavLinks);
navLinkItems.forEach((item) => item.addEventListener("click", toggleNavLinks));
addToCartButtons.forEach((button) => button.addEventListener("click", addToCart));
pesananButton.addEventListener("click", function(event) {
  event.preventDefault(); // Mencegah form dari submit
  alert("Item telah ditambahkan ke keranjang!");
  // Anda juga dapat submit form secara programatik jika perlu
  // document.querySelector("form").submit();
});
contactUsButton.addEventListener("click", contactUs);

function toggleNavLinks() {
  // Implementasi fungsi toggleNavLinks Anda
}

function addToCart() {
  alert("Item telah ditambahkan ke keranjang!");
}

function contactUs() {
  // Implementasi fungsi contactUs Anda
}