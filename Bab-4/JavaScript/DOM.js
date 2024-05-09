// DOM references
const menuIcon = document.querySelector("#menu-icon");
const navLinks = document.querySelector(".nav-links");
const navLinkItems = document.querySelectorAll(".nav-links li");
const addToCartButtons = document.querySelectorAll(".bx-cart-alt");


// Event listeners
menuIcon.addEventListener("click", toggleNavLinks);
navLinkItems.forEach((item) => item.addEventListener("click", toggleNavLinks));
addToCartButtons.forEach((button) => button.addEventListener("click", addToCart));
contactUsButton.addEventListener("click", contactUs);

// Functions
function toggleNavLinks() {
  navLinks.classList.toggle("open");
}

function addToCart() {
  alert("Item added to cart!");
}