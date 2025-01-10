// Function to scroll to the respective event section
function scrollToEvent(eventId) {
    document.getElementById(eventId).scrollIntoView({ behavior: 'smooth' });
  }
 

let currentImageIndex = 0;
const images = [
    'https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-1.jpeg',
    'https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-2.jpeg',
    'https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-4.jpeg',
    'https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-5.jpeg',
    'https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-6.jpeg',
    'https://www.gvpcew.ac.in/img/gallery/National%20science%20day-1.jpg ',
    ' https://www.gvpcew.ac.in/img/gallery/National%20science%20day-2.jpg',
    ' https://www.gvpcew.ac.in/img/gallery/National%20science%20day-3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/22.jpg ',
    ' https://www.gvpcew.ac.in/img/gallery/23.jpg',
    'https://www.gvpcew.ac.in/img/gallery/24.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Republic-1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Republic-2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Republic-3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/26Jan2020/7.jpg',
    'https://www.gvpcew.ac.in/img/gallery/26Jan2020/6.jpg',
    'https://www.gvpcew.ac.in/img/gallery/26Jan2020/9.jpg',
    'https://www.gvpcew.ac.in/img/gallery/2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/4.jpg',
    'https://www.gvpcew.ac.in/img/gallery/6.jpg',
    'https://www.gvpcew.ac.in/img/gallery/5.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Aug2021-1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Aug2021-2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Aug2021-3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Felicitation_NAAC-1.jpeg',
    ' https://www.gvpcew.ac.in/img/gallery/Felicitation_NAAC-2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/Felicitation_NAAC-3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/24Feb2020-ECE/2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/24Feb2020-ECE/1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/24Feb2020-ECE/3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/MathsClub-15Feb2020/2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/MathsClub-15Feb2020/1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/MathsClub-15Feb2020/3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/18Dec2019/2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/18Dec2019/1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/18Dec2019/3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/2.jpg',
    'https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/4.jpg',
    'https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/1.jpg',
    'https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/3.jpg',
    'https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/4.jpg',
    'https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/2.jpg',
    
    
];

function openImageViewer(index) {
    currentImageIndex = index;
    const largeImage = document.getElementById("largeImage");
    largeImage.src = images[currentImageIndex];
    document.getElementById("imageViewer").style.display = "flex";
}

function closeImageViewer() {
    document.getElementById("imageViewer").style.display = "none";
}

function changeImage(direction) {
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    } else if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }
    const largeImage = document.getElementById("largeImage");
    largeImage.src = images[currentImageIndex];
}







  // Function to open the modal and set the image and caption
  function openModal(imageSrc, captionText) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const caption = document.getElementById('caption');
    
    modalImage.src = imageSrc;
    caption.textContent = captionText;
    modal.style.display = 'block';
  }

  // Function to close the modal when the close button is clicked
  document.getElementById('closeModal').onclick = function() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
  }

  // Close the modal when clicking outside of the image
  window.onclick = function(event) {
    const modal = document.getElementById('imageModal');
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }

