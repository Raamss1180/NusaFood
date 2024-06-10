// Get the popup container and close button elements
const popupContainer = document.getElementById('popup-container');
const closeBtn = document.getElementById('close-btn');

// Function to open the popup container
function openPopup() {
  popupContainer.style.display = 'flex';
}

// Function to close the popup container
function closePopup() {
  popupContainer.style.display = 'none';
}

// Add event listener to the contact button to open the popup
document.getElementById('contact-btn').addEventListener('click', openPopup);

// Add event listener to the close button to close the popup
closeBtn.addEventListener('click', closePopup);