<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events</title>
  <link rel="stylesheet" href="gallery1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</head>
<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<body >
  <div class="heading">
    <h1>Our Latest Events</h1>
  </div>
  <!-- Events Cards Section -->
  <div class="events-container">
    <div class="event-row">

      <div class="event-card" onclick="scrollToEvent('event1')"       style="background-image: url('https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-2.jpg');">
        <h3>Hackathons</h3>
        <button class="view-more-btn">View More</button>
      </div>
      <div class="event-card" onclick="scrollToEvent('event2')"       style="background-image: url('gdg.jpg');"  >
        
        <h3>Technical Clubs</h3>
        <button class="view-more-btn">View More</button>
      </div>
      <div class="event-card" onclick="scrollToEvent('event3')"        style="background-image: url('https://www.gvpcew.ac.in/img/gallery/22.jpg');"       >
        <h3>Science day</h3>
        <button class="view-more-btn">View More</button>
      </div>

    </div>
    <div class="event-row">

      <div class="event-card" onclick="scrollToEvent('event5')"             style="background-image: url('https://www.gvpcew.ac.in/img/gallery/2.jpg');"      >
        <h3>Women's day</h3>
        <button class="view-more-btn">View More</button>
      </div>
      <div class="event-card" onclick="scrollToEvent('event6')"              style="background-image: url('independenceday.JPG');"     >
        <h3>Independence day</h3>
        <button class="view-more-btn">View More</button>
      </div>
      <div class="event-card" onclick="scrollToEvent('event7')"            style="background-image: url('https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/2.jpg');"       >

        <h3>NSS</h3>
        <button class="view-more-btn">View More</button>
      </div>
     
    </div>


<div class="event-row">

  <div class="event-card" onclick="scrollToEvent('event4')"        style="background-image: url('https://www.gvpcew.ac.in/img/gallery/Republic-2.jpg');"     >   
    <h3>Republic day</h3>
    <button class="view-more-btn">View More</button>
  </div>
  <div class="event-card" onclick="scrollToEvent('event8')"                    style="background-image: url('other events.jpg');" >
    <h3>Others</h3>
    <button class="view-more-btn">View More</button>
  </div>
  <div class="event-card" onclick="scrollToEvent('event8')"                    style="background-image: url('other events.jpg');" >
    <h3>Others</h3>
    <button class="view-more-btn">View More</button>
  </div>
</div>



  </div>

  <!-- Event Details Sections -->
  <div class="event-details">
    <div id="event1" class="event-detail">
      <h2>Internal Hackathons</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-1.jpg" alt="Tech Fest Image 1"   class="thumbnail" onclick="openImageViewer(0)"     >
        <img src="https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-2.jpg" alt="Tech Fest Image 2"      class="thumbnail" onclick="openImageViewer(1)"    >
        <img src="https://www.gvpcew.ac.in/img/gallery/Internal%20hackthon-3.jpg" alt="Tech Fest Image 3"        class="thumbnail" onclick="openImageViewer(2)"  >
      </div>
    </div>

   
    <div id="imageViewer" class="image-viewer position-fixed top-50 start-50 translate-middle bg-dark bg-opacity-75 p-3 rounded">
      <!-- Image container with navigation buttons inside it -->
      <div class="position-relative">
          <!-- Large Image -->
          <img id="largeImage" src="your-image-path.jpg" alt="Large Image" class="img-fluid mx-auto d-block">
  
          <!-- Close button (positioned at the top-right corner of the image) -->
          <button id="closeBtn" class="btn btn-light position-absolute top-0 end-0 m-2"      style="transform: translateY(-50%);"  onclick="closeImageViewer()">
              <span>&#10006;</span> <!-- This is the 'X' symbol for the close button -->
          </button>
  
          <!-- Previous button (positioned on the left side of the image) -->
          <button id="prevBtn" class="btn btn-light position-absolute top-50 start-0 translate-middle-y" style="left: 10px; transform: translateY(-50%);" onclick="changeImage(-1)">
              <span>&#10094;</span>
          </button>
  
          <!-- Next button (positioned on the right side of the image) -->
          <button id="nextBtn" class="btn btn-light position-absolute top-50 end-0 translate-middle-y" style="right: 10px; transform: translateY(-50%);" onclick="changeImage(1)">
              <span>&#10095;</span>
          </button>
      </div>
  </div>
  


    <div id="event2" class="event-detail">
      <h2>Technical clubs</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-1.jpeg" alt="Cultural Fest Image 1"    class="thumbnail" onclick="openImageViewer(3)"    >
        <img src="https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-2.jpeg" alt="Cultural Fest Image 2"      class="thumbnail" onclick="openImageViewer(4)"    >
        <img src="https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-4.jpeg" alt="Cultural Fest Image 3"      class="thumbnail" onclick="openImageViewer(5)"  >
        <img src="https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-5.jpeg" alt="Cultural Fest Image 4"      class="thumbnail" onclick="openImageViewer(6)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Picsl-Coscengers-6.jpeg" alt="Cultural Fest Image 5"       class="thumbnail" onclick="openImageViewer(7)"   >
      </div>
    </div>

    <div id="event3" class="event-detail">
      <h2>Science day</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/National%20science%20day-1.jpg" alt="Sports Meet Image 1"         class="thumbnail" onclick="openImageViewer(8)"   >
        <img src="https://www.gvpcew.ac.in/img/gallery/National%20science%20day-2.jpg" alt="Sports Meet Image 2"         class="thumbnail" onclick="openImageViewer(9)"        >
        <img src="https://www.gvpcew.ac.in/img/gallery/National%20science%20day-3.jpg" alt="Sports Meet Image 3"          class="thumbnail" onclick="openImageViewer(10)"          >
        <img src="https://www.gvpcew.ac.in/img/gallery/22.jpg" alt="Sports Meet Image 3"                               class="thumbnail" onclick="openImageViewer(11)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/23.jpg" alt="Sports Meet Image 3"                    class="thumbnail" onclick="openImageViewer(12)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/24.jpg" alt="Sports Meet Image 3"                     class="thumbnail" onclick="openImageViewer(13)" >
        
      </div>
    </div>

    <div id="event4" class="event-detail">
      <h2>Republic day</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/Republic-1.jpg" alt="Art Exhibition Image 1"    class="thumbnail" onclick="openImageViewer(14)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Republic-2.jpg" alt="Art Exhibition Image 2"       class="thumbnail" onclick="openImageViewer(15)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Republic-3.jpg" alt="Art Exhibition Image 3"     class="thumbnail" onclick="openImageViewer(16)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/26Jan2020/7.jpg" alt="Art Exhibition Image 4"        class="thumbnail" onclick="openImageViewer(17)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/26Jan2020/6.jpg" alt="Art Exhibition Image 4"     class="thumbnail" onclick="openImageViewer(18)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/26Jan2020/9.jpg" alt="Art Exhibition Image 4"          class="thumbnail" onclick="openImageViewer(19)" >
      </div>
    </div>

    <div id="event5" class="event-detail">
      <h2>Women's day</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/2.jpg" alt="Robotics Workshop Image 1"       class="thumbnail" onclick="openImageViewer(20)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/4.jpg" alt="Robotics Workshop Image 2"        class="thumbnail" onclick="openImageViewer(21)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/6.jpg" alt="Robotics Workshop Image 3"         class="thumbnail" onclick="openImageViewer(22)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/5.jpg" alt="Robotics Workshop Image 4"       class="thumbnail" onclick="openImageViewer(23)" >
      </div>
    </div>

    <div id="event6" class="event-detail">
      <h2>Independence day</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/Aug2021-1.jpg" alt="Science Fair Image 1"              class="thumbnail" onclick="openImageViewer(24)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Aug2021-2.jpg" alt="Science Fair Image 2"          class="thumbnail" onclick="openImageViewer(25)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Aug2021-3.jpg" alt="Science Fair Image 3"           class="thumbnail" onclick="openImageViewer(26)"   >
        
      </div>
    </div>

    <div id="event7" class="event-detail">
      <h2>NSS</h2>
      <div class="event-images">
        <img src="https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/2.jpg" alt="Dance Competition Image 1"              class="thumbnail" onclick="openImageViewer(27)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/1.jpg" alt="Dance Competition Image 2"               class="thumbnail" onclick="openImageViewer(28)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/NSS-ChampoionShip/3.jpg" alt="Dance Competition Image 3"           class="thumbnail" onclick="openImageViewer(29)" >
       
      </div>
    </div>

    <div id="event8" class="event-detail">
      <h3>Other events</h3>
      <div class="event-images">
       <div  class="facilitation">
         <h4>Felicitation by APSCHE for getting the "A" Grade in NAAC</h4>
        </div>
        <div class="a1">
        <img src="https://www.gvpcew.ac.in/img/gallery/Felicitation_NAAC-1.jpeg" alt="Music Fest Image 1"                 class="thumbnail" onclick="openImageViewer(30)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Felicitation_NAAC-2.jpg" alt="Music Fest Image 2"                     class="thumbnail" onclick="openImageViewer(31)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/Felicitation_NAAC-3.jpg" alt="Music Fest Image 3"                      class="thumbnail" onclick="openImageViewer(32)" >
        </div>
        <h4>Guest Lecture - Dr. Srinivas Kota, Sr. Research Scientist, Univ. of Texas South-Western Medical Centre, Dallas, USA</h4>
        <div class="a2">
        <img src="https://www.gvpcew.ac.in/img/gallery/24Feb2020-ECE/2.jpg" alt="Music Fest Image 1"                    class="thumbnail" onclick="openImageViewer(33)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/24Feb2020-ECE/1.jpg" alt="Music Fest Image 2"                       class="thumbnail" onclick="openImageViewer(34)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/24Feb2020-ECE/3.jpg" alt="Music Fest Image 3"          class="thumbnail" onclick="openImageViewer(35)" >
        </div>
        <h4>Guest Lecture by Prof RogerMarshall - Organized by MathematicsClub on 15 Feb 2020</h4>
        <div  class="a3">
        <img src="https://www.gvpcew.ac.in/img/gallery/MathsClub-15Feb2020/2.jpg" alt="Music Fest Image 1"             class="thumbnail" onclick="openImageViewer(36)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/MathsClub-15Feb2020/1.jpg" alt="Music Fest Image 1"                class="thumbnail" onclick="openImageViewer(37)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/MathsClub-15Feb2020/3.jpg" alt="Music Fest Image 1"                    class="thumbnail" onclick="openImageViewer(38)" >
        </div>
        <h4>Address by Sri Srinivas Vanapalli, Faculty of Science & Technology at Univ. of Twente, Netherlands on 18th Dec 2019</h4>
        <div    class="a4">
        <img src="https://www.gvpcew.ac.in/img/gallery/18Dec2019/2.jpg" alt="Music Fest Image 1"                  class="thumbnail" onclick="openImageViewer(39)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/18Dec2019/1.jpg" alt="Music Fest Image 1"            class="thumbnail" onclick="openImageViewer(40)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/18Dec2019/3.jpg" alt="Music Fest Image 1"             class="thumbnail" onclick="openImageViewer(41)" >
        </div>

        <h4>Guest Lecture by Sri DVA Raghava Murthy, Director, Aerospace Research, Veltech UNIV(Former Project Director - ISRO Head Quarters B'lore)</h4>
        <div    class="a5">
        <img src="https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/2.jpg" alt="Music Fest Image 1"   class="thumbnail" onclick="openImageViewer(42)"            >
        <img src="https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/1.jpg" alt="Music Fest Image 1"            class="thumbnail" onclick="openImageViewer(43)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/3.jpg" alt="Music Fest Image 1"          class="thumbnail" onclick="openImageViewer(44)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/DVA-Raghava-Murthy/4.jpg" alt="Music Fest Image 1"               class="thumbnail" onclick="openImageViewer(45)" >
        </div>
        <h4>Alumni Meet @ Hyderabad on 30th Nov 2019</h4>
        <div  class="a5">
        <img src="https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/1.jpg" alt="Music Fest Image 1"             class="thumbnail" onclick="openImageViewer(46)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/3.jpg" alt="Music Fest Image 1"              class="thumbnail" onclick="openImageViewer(47)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/4.jpg" alt="Music Fest Image 1"              class="thumbnail" onclick="openImageViewer(48)" >
        <img src="https://www.gvpcew.ac.in/img/gallery/AlumniMeet-Hyd/2.jpg" alt="Music Fest Image 1"                  class="thumbnail" onclick="openImageViewer(49)" >
        </div>
    

      </div>
    </div>
 <!-- Modal for showing full-size image -->
 <div id="imageModal" class="modal">
  <span id="closeModal" class="close">&times;</span>
  <img id="modalImage" class="modal-content" src=" ">
  <div id="caption"></div>
</div>
  <script src="gallery1.js"></script>
  <?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>