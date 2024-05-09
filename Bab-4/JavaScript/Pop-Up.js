const contactBtn = document.getElementById('contact-btn');
const popupContainer = document.getElementById('popup-container');
const closeBtn = document.getElementById('close-btn');

contactBtn.addEventListener('click', () => {
    popupContainer.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    popupContainer.style.display = 'none';
});