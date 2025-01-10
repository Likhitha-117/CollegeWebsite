const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
  
    // Pagination bullets
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // Responsive breakpoints
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });













// Select all the "Message" buttons and "Back" buttons
const messageButtons = document.querySelectorAll('.message-button');
const backArrowButtons = document.querySelectorAll('.back-arrow-btn');
const cards = document.querySelectorAll('.card');

// Add event listeners for the "Message" button (flip the card to back)
messageButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    const card = cards[index];
    card.classList.add('flip'); // Add flip class to flip the card
  });
});

// Add event listeners for the "Back" button (flip the card back)
backArrowButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    const card = cards[index];
    card.classList.remove('flip'); // Remove flip class to flip the card back
  });
});




  