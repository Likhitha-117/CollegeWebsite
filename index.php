<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="st.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      /* Set the cursor for the entire body */
      body {
        cursor: url('images/pen.png'), auto; /* Replace 'pen-cursor.png' with your image path */
      }
    </style>
    <style>
      /* Basic reset for body */
      
      /* Custom glowing cursor element */
      .cursor {
        position: absolute;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: cyan;
        box-shadow: 0 0 10px rgba(0, 255, 255, 0.6), 0 0 20px rgba(0, 255, 255, 0.4);
        pointer-events: none; /* Ensure the cursor doesn’t interfere with other elements */
        transform: translate(-50%, -50%);
        transition: transform 0.05s ease; /* Smooth movement */
      }
    </style>
   
<style>
  /* Container box styling */
  .marquee-box {
      width: 100%; /* Full width of the screen */
      max-width: 100%; /* Ensure it takes up full width on both desktop and mobile */
      height: 70px; /* Increased height */
      overflow: hidden;
      border: 2px solid #000435; /* Dark blue border */
      border-radius: 8px;
      background-color: #000435; /* Dark blue background */
      position: relative;
      padding: 10px;
      box-sizing: border-box;
  }

  /* Scrolling content inside the box */
  .marquee-content {
      display: flex;
      gap: 20px;
      white-space: nowrap;
      animation: marquee 15s linear infinite;
      color: white; /* Text color */
  }

  /* Blinking effect for the notification icon */
  .blink {
      animation: blink 1s step-start infinite;
  }

  @keyframes blink {
      0% { opacity: 1; }
      50% { opacity: 0; }
      100% { opacity: 1; }
  }

  /* Animation for scrolling effect */
  @keyframes marquee {
      0% {
          transform: translateX(100%);
      }
      100% {
          transform: translateX(-100%);
      }
  }

  /* Styling for each update item */
  .update-item {
      display: inline-block;
  }

  /* Stop the marquee animation when hovered */
  .marquee-box:hover .marquee-content {
      animation-play-state: paused;
  }

  /* Responsive design: adjust height for smaller screens */
  @media (max-width: 768px) {
      .marquee-box {
          height: 60px; /* Slightly smaller height for mobile */
      }
      .marquee-content {
          font-size: 14px; /* Adjust font size for mobile */
      }
  }

  /* Large screen styles (desktop) */
  @media (min-width: 769px) {
      .marquee-box {
          height: 70px; /* Default height for desktop */
      }
      .marquee-content {
          font-size: 16px; /* Font size for desktop */
      }
  }
</style>
  <!-- chat bot styling  -->
  <style>
    /* Chat Icon */
    #chatbot-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #d6511d;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 1000;
    }

    /* Chatbox Overlay */
    #chatbox-overlay {
        position: fixed;
        bottom: 90px;
        right: 20px;
        width: 300px;
        height: 500px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
        display: none; /* Hidden by default */
        z-index: 1001;
    }

    /* Close Button */
    #close-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        color:rgb(212, 77, 5);
    }
</style>
<!-- loder styling  -->
 <style>
  /* svg text{
    font-size: 5rem;
    stroke-width:2;
  }
  svg text.text-body{
    stroke: var(--loader-text-color);
    
  } */

 </style>
</head>
<body>
      <!-- Chat Icon -->
      <div id="chatbot-icon" onclick="toggleChatbox()">
      <img src="images/gpticon.png" alt="Chat Icon" width="60">
  </div>

  <!-- Chatbox Overlay -->
  <div id="chatbox-overlay">
      <span id="close-btn" onclick="toggleChatbox()">✖</span>
      <iframe
          src="https://www.chatbase.co/chatbot-iframe/43IK6ICiLnOqOHgnwTTep"
          width="100%"
          style="height: 100%;"
          frameborder="0"
      ></iframe>
  </div>

  <script>
      function toggleChatbox() {
          const chatbox = document.getElementById('chatbox-overlay');
          chatbox.style.display = chatbox.style.display === 'none' || chatbox.style.display === '' ? 'block' : 'none';
      }
  </script>

  <!-- example test -->
   <!-- <section class="home">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Gayatri Vidya Parishad college of Engineering for Women </p>
          <p>Suscribe  Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias harum quae velit fuga magnam. Ab similique distinctio quis beatae, dolorum labore, ad non deserunt temporibus eaque facilis eius harum amet?</p>
        </div>
      </div>
    </div>
   </section> -->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item text-center bg-dark vh-100 slide-1">
        <div class="continer h-100 d-flex justify-content-center align-items-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 w-100">
                  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="images/GVP COLLEGE OF ENGINEERING FOR WOMEN AV.mp4" class="opacity-75" type="video/mp4">
                    
                  </video>

                </div>
            </div>
        </div>
   
  </div>
  
      <div class="carousel-item   bg-dark vh-100 active slide-2">
        <!-- here we have given background color as balc vh that us heigth as 100 and algining the items in the below -->
         <div class="continer h-100 d-flex align-items-center justify-content-center"> 
             <div class="row justify-content-center"> 
                <div class="col-lg-8  w-100">
                 
                  <img src="images/HomePageOr.png" alt="" width="100%">
      
                </div>
            </div>
        </div>
      </div>
      <div class="carousel-item text-center bg-dark vh-100 slide-3">
            <div class="continer h-100 d-flex justify-content-center align-items-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8 w-100">
                        <img src="images/main2.jpg" alt="" width="100%">
    
                    </div>
                </div>
            </div>
       
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 

  <!-- placemnets -->
  <!-- <div class="text-8xl text-yellow-500 hover: text-blue-700 text-center ">1250+ Placemnets</h1></div>
 Font Awesome CDN
 <div class="cont">
 <div class="grid grid-cols-4 gap-4">
  <div class="m-10">.</div>
  <div class="m-10">.</div>
  <div class="m-10">.</div> b
  <div class="m-10">.</div>
 
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md   text-xl hover:scale-110 hover:bg-orange-300 hover:translate-x-2"><span class="text-6xl hover:text-orange-500">20+</span><br> Amazon</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md  text-xl hover:translate-x-2   hover:bg-yellow-400 hover:scale-110   "><span class="text-6xl hover:text-blue-600">10+</span><br>Flipkart</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md text-xl hover:translate-x-2  hover:bg-bule-400 hover:scale-110"><span class="text-6xl hover:text-white-600">9+</span><br>Wipro</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md text-xl hover:translate-x-2 hover:scale-110  hover:bg-yellow-400 hover:scale-110  "><span class="text-6xl hover:text-blue-600">10+</span><br>Flipkart</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md text-xl hover:translate-x-2 hover:scale-110  hover:bg-yellow-400 hover:scale-110  "><span class="text-6xl hover:text-blue-600">10+</span><br>Flipkart</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md text-xl hover:translate-x-2 hover:scale-110  hover:bg-yellow-400 hover:scale-110  "><span class="text-6xl hover:text-blue-600">10+</span><br>Flipkart</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md  text-xl hover:translate-x-2 hover:scale-110  hover:bg-yellow-400 hover:scale-110  "><span class="text-6xl hover:text-blue-600">10+</span><br>Flipkart</div>
  <div class="rounded-lg bg-blue-700 p-8 mx-10  text-white  transition transform shadow-md text-xl  hover:translate-x-2 hover:scale-110  hover:bg-yellow-400 hover:scale-110  "><span class="text-6xl hover:text-blue-600">10+</span><br>Flipkart</div> 
  <div class=" bg-blue-700 p-8 mr-10 mb-24 rounded-lg text-center items-center text-white hover:bg-blue-300"><a href="index.html">our achivers</a></div>
  
 
</div>
 
</div> -->
<!-- <section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="images/background.jpg" alt="">
        <h1>About Our College</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ipsum vero, minus veritatis corporis nostrum beatae ex. Nihil mollitia eveniet repellendus, voluptatem deserunt optio eius labore neque voluptate, voluptatum aperiam?</p>
        </div>
    </div>
  </div> -->
<!-- </section> -->
 <!-- <marquee behavior="" direction="left" class="d-flex"><img src="images/Frame 11 (2).png" alt=""></marquee> -->
 <!-- <div class="img card-dec">
  
   <div class="card  float-left m-5 shadow-md transition transform hover:scale-110  hover:translate-x-2" style="width: 18rem;">
    <img src="images/Frame.png" class=" imgx transition transform hover:scale-110  hover:translate-x-2 " alt="...">
    <div class="card-body bg-blue-700">
      <h4 class="card-title text-white"> <i class="ri-sparkling-2-fill text-white text-3xl"></i>Achivements</h5>
      <p class="card-text text-white"><i class="ri-user-star-fill text-white"></i> UGC has blue the Autonomous status for a period of 10 years 2024-2025 to 2033-2034.</p>
    </div>
     <ul class="list-group list-group-flush">
      <li class="list-group-item  text-blue-500"> <i class="ri-user-star-fill text-yellow-400"></i>Ms. Vasudha Yadav of Department of Computer Science and Engineering bearing Roll Number 17JG1A0558 of 2017 admitted batch is Academics Topper (9.05 CGPA) among all affiliated colleges in JNTUK and won Gold Medal.</li>
    </ul> 
  </div>
  <div class="text-container">
    <span class="text-pink-800 text-2xl"><i class="ri-graduation-cap-fill text-3xl text-blue-700"></i>Empowering Women in Engineering: Gayatri Vidya Parishad College of Engineering for Women
      Shape Your Future at GVPCEW</span>
     
  </div>
    
   <h1 class=" text-white p-2 text-3xl ">Empowering Women in Engineering: Gayatri Vidya Parishad College of Engineering for Women
    Shape Your Future at GVPCEW</h1> 
  <p class="text-blue-800 m-2 p-6 text-p ">
    
    Gayatri Vidya Parishad College of Engineering for Women (GVPCEW) empowers women to become future leaders in engineering. Established in 2021, GVPCEW provides a nurturing and dynamic environment specifically designed to cultivate the talents and ambitions of female engineers.
    
    Unleash Your Potential
    
    GVPCEW offers a comprehensive curriculum across various engineering specializations, including Computer Science, Electronics & Communication, and Information Technology. Our dedicated faculty, with extensive industry experience, provides personalized guidance and mentorship to help you excel in your chosen field.
    
    A World-Class Learning Experience
    GVPCEW offers a comprehensive curriculum across various engineering specializations, including Computer Science, Electronics & Communication, and Information Technology. Our dedicated faculty, with extensive industry experience, provides personalized guidance and mentorship to help you excel in your chosen field.  
    </p>
   
 </div> -->

 <div class="marquee-box mt-10">
  <div class="marquee-content">
      <span class="update-item"><span class="blink">🔔</span> Campus Placement Drives in October - TCS Priority Hiring - 4th, 5th October(Assessm</span>
      <span class="update-item"><span class="blink">🔔</span> Latest Update 2: PWC Launch Pad Hiring - Interviews on 23rd October</span>
      <span class="update-item"><span class="blink">🔔</span> Latest Update 3:PWC Launch Pad Hiring - Interviews on 23rd October</span>
  </div>
</div>
 
 <div class="aboutus mt-28">
  <h1 class=" h12 text-4xl text-orange-600 text-center">ABOUT US </h1>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="main">
        
        <div class="service">
          <div class="service-logo">
            <img src="images/gaytri-removebg-preview.png" alt="" class=" ml-5">
          </div>
          <h4 class="head text-3xl text-center text-orange-600  ">GVPCEW</h4>
          <p class="text-center" style="color: #000435;"> Gayatri Vidya Parishad College of Engineering for Women (GVPCEW) empowers women to become future leaders in engineering. Established in 2021, GVPCEW provides a nurturing and dynamic environment specifically designed to cultivate the talents and ambitions of female engineers.
    
            .</p>
          
          </div>
          <div class="shadowone">

          </div>
          <div class="shadowtwo">

        </div>
       </div>
      </div>
      
    <div class="col-md-4">
      <div class="main">
        
        <div class="service">
          <div class="service-logo">
            <img src="images/gvpmis.png" alt="" class=" ml-5">
          </div>
          <h4 class="head text-3xl text-orange-600 text-center  ">Mission</h4>
          <p class="text-center "style="color: #000435;">To emerge as an acclaimed centre of learning that provides value based technical education for the holistic development of students.</p>
          
          </div>
          <div class="shadowone">

          </div>
          <div class="shadowtwo">

        </div>
       </div>
      
    </div>
    
    <div class="col-md-4">
      <div class="main">
        
        <div class="service">
          <div class="service-logo">
            <img src="images/vision.png" alt="" class=" ml-5">
          </div>
          <h4 class="head text-3xl text-orange-600 text-center  "> Vision </h4>
          <p class="text-center  "style="color: #000435;">Undertake activities that provide value based knowledge in science , Engineering & Technology

            Provide opportunities for learning through Industry-Institute interaction on the state-of-the art technologies
            
            Create collaborative environment for research , innovation and entrepreneurship.
            </p>
          
          </div>
          <div class="shadowone">

          </div>
          <div class="shadowtwo">

        </div>
       </div>
      
    </div>
  </div>
  </div>
 </div>

 <!-- latest updates -->
 
 <!-- <div class="marquee-box">
  <div class="marquee-content">
      <span class="update-item"><span class="blink">🔔</span> Campus Placement Drives in October - TCS Priority Hiring - 4th, 5th October(Assessm</span>
      <span class="update-item"><span class="blink">🔔</span> Latest Update 2: PWC Launch Pad Hiring - Interviews on 23rd October</span>
      <span class="update-item"><span class="blink">🔔</span> Latest Update 3:PWC Launch Pad Hiring - Interviews on 23rd October</span>
  </div>
</div> -->

 
  <!-- <marquee behavior="" direction="left" class="d-flex"><img src="images/Frame 11 (2).png" alt=""></marquee> -->
 <!-- notice board  -->
 
<!-- <div class="notice-board notice1  p-10 mt-20">
  <div class="container-fuild border "><h1 class="text-blue-900 text-4xl text-center"> Notice Board <hr class="text-blue-800 text-6xl text-center w-6xl" style="font-weight: 600;">-</h1> -->
    <!-- GRID -->
    <!-- the grid system rows and colums  -->
     <div class="row mt-20 ">
       <div class="col ml-40 transition transform hover:translate-x-2 hover:scale-110"> <div class="card" style="width: 18rem;">
        <div class="w-30 h-10 m-4 rounded-lg" style="background-color: #000435;">
           <span class=" text-white text-center text-2xl  px-12 "> Notification</span>
        </div>
        <div class="card-body">
         
          <h5 class="card-title">Card title</h5>
          
          <p class="card-text"><marquee behavior="" direction="up"scrollamount="2">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</marquee></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        
        </ul>
        <div class="card-body">
        
          <a href="#" class="card-link btn  bg-orange-600 text-white ">View all Notification</a>
        </div>
      </div>
       </div>
       <div class="col  transition transform hover:translate-x-2 hover:scale-110"><div class="card" style="width: 18rem;">
        <div class="w-30 h-10 m-4 rounded-lg"style="background-color: #000435;">
          <span class=" text-white text-center text-2xl  px-12 "> Placements</span>
       </div>
        <div class="card-body">
          <h6 class="card-title text-orange-500" style="font-weight: 400;">Campus Placement Drives in October </h6>
          <p class="card-text" ><marquee behavior="" direction="up"scrollamount="2">
            <ol>
            <li class="list-group-item" >1.TCS Priority Hiring - 4th, 5th October(Assessment)</li>
            <li class="list-group-item">2.Infosys specialist programmer Hiring - 4th October(Interviews)</li>
            <li class="list-group-item">3. Capgemini Hiring Interviews - 4th, 7th, 9th October
            </li>
            <li class="list-group-item">4.PWC Launch Pad Hiring - Interviews on 23rd October </li>
          </ol></marquee></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"></li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          
          <a href="#" class="card-link btn bg-orange-600 text-white">View all Notification</a>
        </div>
      </div></div>
       <div class=" col transition transform hover:translate-x-2 hover:scale-110 "> <div class="card" style="width: 18rem;">
        <div class="w-30 h-10 m-4 rounded-lg"style="background-color: #000435;">
          <span class=" text-white text-center text-2xl  px-20 "> Events</span>
       </div>
       <div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text  "> <marquee behavior="" direction="up"scrollamount="2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</marquee></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">A item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
      </div>
        <div class="card-body">
        
          <a href="#" class="card-link btn  bg-orange-600 text-blue-900">View all Events</a>
        </div>
      </div></div>
     </div>
  </div>
  </div>
  <!-- Achivements  -->
   <section style="background-color: #000435;" class="m-4 p-4">
   <!-- <div class="time">
    <div class="container4 leftc">
      <img src="images/amazon.avif" alt="">
      <div class="text-box">
        <h2>alphabet</h2>
        <small>2018-2019</small>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quas quidem facilis quos doloremque reprehenderit, nesciunt aliquid at voluptatem rerum necessitatibus ratione. Officiis consectetur corporis delectus, hic expedita aliquam temporibus.</p>
        <span class="leftarrow"></span>
      </div>
    </div>
    <div class="container4 rightc">
      <img src="images/amazon.png" alt="">
      <div class="text-box">
        <h2>alphabet</h2>
        <small>2018-2019</small>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quas quidem facilis quos doloremque reprehenderit, nesciunt aliquid at voluptatem rerum necessitatibus ratione. Officiis consectetur corporis delectus, hic expedita aliquam temporibus.</p>
        <span class="rightarrow"></span>
      </div>
    </div>
    <div class="container4 leftc">
      <img src="images/images.jpeg" alt="">
      <div class="text-box">
        <h2>alphabet</h2>
        <small>2018-2019</small>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quas quidem facilis quos doloremque reprehenderit, nesciunt aliquid at voluptatem rerum necessitatibus ratione. Officiis consectetur corporis delectus, hic expedita aliquam temporibus.</p>
        <span class="leftarrow"></span>
      </div>
    </div>
    <div class="container4 rightc">
      <img src="images/amazon.avif" alt="">
      <div class="text-box">
        <h2>alphabet</h2>
        <small>2018-2019</small>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quas quidem facilis quos doloremque reprehenderit, nesciunt aliquid at voluptatem rerum necessitatibus ratione. Officiis consectetur corporis delectus, hic expedita aliquam temporibus.</p>
        <span class="rightarrow"></span>
      </div>
    </div>
   </div> -->
   <h2 class="achievements-heading">Achievements</h2>
   <div class="wrapper">
     <!-- Added Heading -->
    <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
    </div>
    <div class="row row-1">
        <section class="achievement-section transitionn transform hover:translate-x-2 hover:scale-110">
            <i class="icon fas fa-star"></i>
            <div class="details"></div>
            <p>UGC has conferred the Autonomous status for a period of 10 years w.e.f. 2024-2025 to 2033-2034. Subsequently, The Andhra University has granted Autonomous Status.</p>
            <div class="bottoms">
                <a href="achive.html">Read more</a>
            </div>
        </section>
    </div>
    <div class="row row-2">
        <section class="achievement-section transitionn transform hover:translate-x-2 hover:scale-110">
            <i class="icon fas fa-star"></i>
            <div class="details"></div>
            <p>The Andhra University granted Permanent Affiliation to the eligible courses [CSE, IT, ECE, and EEE, UG courses and PG Courses of ECE] for a period of 5 years w.e.f. 2023-2024.</p>
            <div class="bottoms">
                <a href="achive.html">Read more</a>
            </div>
        </section>
    </div>
    <div class="row row-1">
        <section class="achievement-section transitionn transform hover:translate-x-2 hover:scale-110">
            <i class="icon fas fa-star"></i>
            <div class="details">
                
            </div>
            <p>Madam Sushila ji from Vedanta Academy, Mumbai conducted a seminar on "The Goal of Human Pursuit" on 11 December 2023.</p>
            <div class="bottoms">
                <a href="achive.html">Read more</a>
            </div>
        </section>
    </div>
</div>

  
    <!-- <div class="row row-1">
      <section>
        <i class="icon fas fa-paper-plane"></i>
        <div class="details">
          <span class="title">Title of Section 5</span>
          <span>5th Jan 2021</span>
        </div>
        <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
        <div class="bottoms">
          <a href="#">Read more</a>
          <i>- Someone famous</i>
        </div>
      </section>
    </div>
    <div class="row row-2">
      <section>
        <i class="icon fas fa-map-marker-alt"></i>
        <div class="details">
          <span class="title">Title of Section 6</span>
          <span>6th Jan 2021</span>
        </div>
        <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
        <div class="ss">
          <a href="#">Read more</a>
          <i>- Someone famous</i>
        </div>
      </section>
    </div> -->
  </div>

  </section>
  <!-- events  -->
  <div class="events1" style="background: linear-gradient(45deg, #000080, #0000cd);">
    </div>
  
    <h1 class="text-3xl text-white m-5 text-center"><i class="ri-slideshow-fill text-5xl text-white"></i>Events <hr class="text-white"></h1>
    <div class="events p-2">
     
     <div></div>
     <div></div>
     <div></div>
   </div>
 </div>
 <!-- logo slider  -->
 <h1 class="text-bule-900 text-4xl m-6 text-center"> Students Work At</h1>
 <div class="logo flex items-center justify-center">
   <div class="logo-slide flex items-center justify-between">  
     <img src="images/amazon.png" alt="">
     <img src="images/wipro.jpg" alt="">
     <img src="images/google.png" alt="">
     <img src="images/capgeminmi.png" alt="">
     <img src="images/tcsss.png" alt="">
     <img src="images/amazon.png" alt="">
     <img src="images/wipro.jpg" alt="">
     <img src="images/google.png" alt="">
     <img src="images/capgeminmi.png" alt="">
     <img src="images/tcsss.png" alt="">
     <img src="images/amazon.png" alt="">
     <img src="images/wipro.jpg" alt="">
     <img src="images/google.png" alt="">
     <img src="images/capgeminmi.png" alt="">
     <img src="images/tcsss.png" alt="">
   </div>
  </div>

 <div class="container container-img m-5">
  <div class="row">
  <div class="box-item col-md-6">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url(images/whitama.jpg); border: 2px; border-style: solid; border-color: rgb(202, 91, 16);">
          <div class="inner col-white">
            <h3 class="flip-box-header">
            </h3>
            <p></p>
  
          </div>

        </div>
        <div class="filp-box-back text-center" style="background-image: url(images/orange.png);">
          <div class="inner col-white">
            <h3 class="flip-box-header text-6xl text-white shadow-md mb-4 mt-2">28 lpa</h3>
            <p class="text-white p-3">6+ members  were placed at amazon with a ctc of 28 lakhs per annum</p>
            <button class="flip-box-button "><a href="index.html" class="border-light-900">Know more</a></button>
          </div>

        </div>
      </div>
    </div>
    <div class="box-item col-md-6">
      <div class="flip-box">
        <div class="flip-box-front text-center " style="background-image: url(images/wip.jpg); border: 2px; border-style: solid; border-color: rgb(202, 16, 137);">
          <div class="inner col-white">
            <h3 class="flip-box-header">
              
            </h3>
            <p></p>
  
          </div>

        </div>
        <div class="filp-box-back text-center" style="background-image: url(images/pink.png);">
          <div class="inner col-white">
            <h3 class="flip-box-header text-6xl text-white shadow-md mb-4">21 lpa </h3>
            <p class="text- 2xl text-white"> 3+ members  were placed at wipro with a ctc of 21 lakhs per annum</p>
            <button class="flip-box-button "><a href=""> Know more</a></button>
          </div>

        </div>
      </div>
    </div>
  </div>
 </div>
  
 <!-- <div class="container py-3">
  <h1>hello</h1>
  <div calss="row row-cols-1 row-cols-md-3 g-4 py-5">
    <div class="col-3">
      <div class="card card-style bg-blue-400 transition transform hover:translate-x-2 hover:scale-110 " style="width: 18rem;">
        <div class="card-body">
         <span class="text-yellow-200 text-6xl p-15"> <i class="ri-group-fill text-center "></i></span>
          <h5 class="card-title text-white text-5xl p-2">3020</h5>
          <p class="card-text text-white text-2xl p-2">Student Strength</p>
        
        </div>
      </div>
    </div> 
    <div class="col-3 ">
      <div class="card card-style bg-blue-400 transition transform hover:translate-x-2 hover:scale-110 " style="width: 18rem;">
        <div class="card-body">
         <span class="text-yellow-200 text-6xl p-15"> <i class="ri-group-fill text-center "></i></span>
          <h5 class="card-title text-white text-5xl p-2">3020</h5>
          <p class="card-text text-white text-2xl p-2">Student Strength</p>
        
        </div>
      </div>
    </div> 
    <div class="col-3 ">
      <div class="card card-style bg-blue-400  transition transform hover:translate-x-2 hover:scale-110" style="width: 18rem;">
        <div class="card-body">
         <span class="text-yellow-200 text-6xl p-15"> <i class="ri-group-fill text-center "></i></span>
          <h5 class="card-title text-white text-5xl p-2">3020</h5>
          <p class="card-text text-white text-2xl p-2">Student Strength</p>
        
        </div>
      </div>
    </div> 
    </div>
      </div> -->
      <div class="cont mb-4">
      <div class="counter-wrapper " style="background-color: #000435;"> 
        <div class="counter  text-white mx-10" >
            <h1 class="count" data-target="3254" ><i class="ri-group-fill text-center "></i>0</h1>
            <p class=" text-white"><i class="ri-group-fill text-center text-orange-600 "></i>Student Strength</p>
        </div>
        <div class="counter  text-white mx-10">
            <h1 class="count" data-target="12168"><i class="ri-graduation-cap-fill"></i>0</h1>
            <p class=" text-white"><i class="ri-graduation-cap-fill text-orange-600"></i>Alumni Date</p>
        </div>
        <!-- <div class="counter  text-white">
            <h1 class="count" data-target="11235">0</h1>
            <p class=" text-white">Students Placed</p>
        </div> -->
        <div class="counter  text-white mx-10">
            <h1 class="count" data-target="2800000">0</h1>
            <p class=" text-white"><i class="ri-money-rupee-circle-fill text-orange-600"></i>Highest ctc</p>
        </div>
    </div>
  </div>


    <script src="main.js"></script>

      <!-- <div class="container " style="background: linear-gradient();"></i> <h1 class="text-blue-800 text-3xl m-10 text-center font-s"><i class="ri-presentation-fill text-blue-400 text-3xl"></i> Current Info  <hr class="text-blue-700 text-xl"> </h1> -->
       
        <!-- GRID 
        the grid system rows and colums  
         <div class="row">
           <div class="col"> 
            <div class="card card-s card-style bg-blue-700  transition transform hover:translate-x-2 hover:scale-110" style="width: 18rem;">
              <div class="card-body">
               <span class="text-yellow-200 text-6xl p-15"> <i class="ri-group-fill text-center "></i></span>
                <h5 class="card-title ct text-white text-5xl p-2">3020</h5>
                <p class="card-text cp text-white text-2xl p-2">Student Strength</p>
              
              </div>
            </div>
           </div>
           <div class="col"> <div class="card card-s card-style bg-blue-700 transition transform hover:translate-x-2 hover:scale-110" style="width: 18rem;">
            <div class="card-body ">
             <span class="text-yellow-200 text-6xl p-15 mb-10"> <i class="ri-graduation-cap-fill"></i></i></span>
              <h5 class="card-title ct text-white text-5xl p-2">10203</h5>
              <p class="card-text cp text-white text-2xl p-2">Alumni On Date</p>
            
            </div>
          </div></div>
           <div class=" col col-4">  <div class="card card-s card-style bg-blue-700  transition transform hover:translate-x-2 hover:scale-110" style="width: 18rem;">
            <div class="card-body">
             <span class="text-yellow-200 text-6xl p-15"> <i class="ri-money-rupee-circle-fill"></i></span>
              <h5 class="card-title ct text-white text-5xl p-2">28ctc</h5>
              <p class="card-text cp text-white text-2xl p-2">Highest Package</p>
            
            </div>
          </div></div>
         </div>
         </div> -->
        
         <div class="container-fuild border "><h1 class="text-blue-900 text-3xl  text-center font-s"><i class="ri-gallery-fill text-blue-900 text-3xl"></i> GALLERY  <hr class="text-blue-700 text-xl"> </h1>
          <!-- GRID -->
          <!-- the grid system rows and colums  -->
           <div class="row">
             <div class="col"> <div class="boxs">
              <div class=" content">
                <img src="images/cselab-2.jpg" alt="">
                <h1 class="text-blue-900 text-5xl capitalize"> Laboratory</h1>
                <a href="gallery.html"><i class="ri-search-eye-line text-white text-xl"></i>explore</a>
              </div>


            </div> 
             </div>
             <div class="col"> <div class="boxs">
              <div class=" content">
                <img src="images/classrooms.jpg" alt="">
                <h1 class="text-blue-900 text-4xl capitalize"><i class="ri-artboard-fill text-3xl text-blue-900"></i>classrooms</h1>
                <a href="classroom.html"><i class="ri-search-eye-line text-white text-xl"></i>explore</a>
              </div>


            </div></div>
             <div class=" col col-4">  <div class="boxs">
              <div class=" content">
                <img src="images/libary.png" alt="">
                <h1 class="text-blue-900 text-5xl capitalize">libary</h1>
                <a href="libary.html"><i class="ri-search-eye-line text-white text-xl"></i>explore</a>
              </div>


            </div></div>
           </div>
           
        <!-- testnomials -->
         <h1 class=" text-3xl mt-20 text-center" style="color: #000435;">Distinguished Guests
        </h1>
        <section id="reviews" class="bg-cover">
          <div class="container">
            <div class="row">
              <div class="col-12 intro-text">
                <h1 class="text-white">Our client saying</h1>
                <p class="text-white"> Lorem ipsum dolor sit amet consectetur, adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, sed nemo odio reiciendis dolor sapiente eius tempore molestiae perspiciatis nulla nobis natus dolore tempora cum quaerat eaque enim placeat dignissimos? </p>
        
              </div>
            </div>
            <div id="carouselExampleIndicator" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class=" row justify-content-center">
                    <div class="col-lg-8">
                      <div class=" review bg-white p-5 text-center ">
                        <div class="qoute-icon">
                        <i class="ri-chat-quote-line"></i>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illo et a suscipit possimus corrupti adipisci accusamus consectetur nobis voluptatem! Facilis dolores praesentium, reiciendis voluptate asperiores doloribus. Libero, esse in!</p>
                      <div class="person">
                        <img src="images/guest.png" alt="" class="">
                        <h4>
                          <h4 class="mb-0 mt-2 text-xl text-bule-900">
                            Dr.Ing. P.S.Rao
                          </h4>
                          
                        </h4>
                        
        
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="carousel-item active">
                  <div class=" row justify-content-center">
                    <div class="col-lg-8">
                      <div class=" review bg-white p-5 text-center">
                        <div class="qoute-icon">
                          <i class="ri-chat-quote-line"></i>
                        </div>
                        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos omnis maiores sed deleniti, perferendis, enim quidem, reprehenderit voluptatum ipsa nulla nisi eius quo repudiandae aliquid blanditiis eum impedit accusamus</p>
                        <div class="person mt-10 ">
                          <img src="images/guest.png" alt="">
                          <h4 class="mb-0 mt-2 text-bule-900">
                            Dr.Ing. P.S.Rao
                          </h4>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>
         
           <div class="center mt-44">
            
            <div class="stack-area">
              <div class="left">
                <div class="title" style="color: #000435; text-size-adjust: 50px;">Our Facilities</div>
                <div class="sub-title">
                  <!-- college boasts a robust internet network with high-speed leased lines and a dedicated library connection. We offer extensive sports facilities, including outdoor courts for volleyball, throwball, badminton, and more, along with indoor options like table tennis and chess. Plus, a well-equipped gymnasium and dedicated courts for basketball, badminton, volleyball, and tennis cater to all fitness needs. On top of that, we have a modern AC auditorium and seminar hall, both equipped with advanced audio-visual equipment, along with e-classrooms featuring audio and video capabilities for a dynamic learning experience -->
                  <br />
                  <img src="images/libary.png" alt="" class="rounded-lg h-72 mb-3 shadow-lg  bg-body-tertiary rounded" >
                  <img src="images/e-class.png" alt="" class="rounded-lg h-72 mb-3 shadow-lg  bg-body-tertiary rounded">
                  <img src="images/gym.png" alt=""  class="rounded-lg h-72 mb-3 shadow-lg  bg-body-tertiary rounded">
                  <img src="images/cselab-2.jpg" alt="" class="rounded-lg h-72 mb-3 shadow-lg  bg-body-tertiary rounded">
                  <button class="btn btn-danger">See More Details </button>
                </div>
              </div>
              <div class="right">
                <div class="cardsscroll">
                  <div class="cardscroll">
                    <div class="sub text-white text-xl "><i class="ri-git-repository-fill"></i> Library </div>
                    <div class="content text-white  text-white text-s p-4">Dive into our vast college library! Explore endless resources, unwind in quiet study areas, or collaborate with classmates using modern facilities.</div>
                  </div>
                 
                  <div class="cardscroll">
                    <div class="sub  text-white text-4xl"><i class="ri-robot-3-line"></i>E-Classrooms</div>
                    <div class="content  text-white text-s p-4 mt-3">Facility offers: AC auditorium, seminar hall - both with advanced AV equipment, and e-classrooms with audio & video capabilities.</div>
                   
        
                </div>
                  <div class="cardscroll">
                    <div class="sub text-3xl text-white"> <i class="ri-walk-line text-white"></i>Gymnasium and Sports</div>
                    <div class="content  text-white text-s p-4 mt-6">Indoor: Table Tennis, Chess, Carom Board. Outdoor: Volleyball, Throw Ball, Tenni-coit, Ball Badminton. Gym: Well-equipped for students & faculty. Plus courts for basketball, badminton, volleyball & tennis.</div>
                  </div>
                  <div class="cardscroll">
                    <div class="sub text-3xl text-white"> <i class="ri-ie-line text-white "></i>Internet Facility</div>
                    <div class="content text-white text-s p-4">College provides internet through BSNL (40 Mbps) and VBC Online (100 Mbps) leased lines. A separate 10 Mbps NMEICT line is dedicated for the library.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- contact us   -->
        
           <section id="reservation ">
            <iframe class=" float-left w-5xl h-80 mt-20"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.382978563308!2d83.34667057370089!3d17.820672890181555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395bedd1f655bb%3A0x7657e72dce4e21f9!2sG.V.P%20COLLEGE%20OF%20ENGINEERING%20FOR%20WOMEN!5e0!3m2!1sen!2sin!4v1720291685723!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container phone">
              <div class="row">
                <div class="col-12 intro-text">
                  <h1 class=" text-center text-blue-900 m-20 text-4xl"><i class="ri-phone-line text-5xl text-blue-900"></i>contact us </h1>
                </div>
              </div>
              <form action="" class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- g3 means gutter space 3 space bettwen each holder  -->
                  <div class="row g-3">
                    <div class="from-group col-md-6">
                      <input type="text" class="form-control" placeholder="full name">
                    </div>
                    <div class="from-group col-md-6">
                      <input type="email" class="form-control" placeholder="email address">
                    </div>
                    <div class="from-group col-md-6">
                      <input type="date" class="form-control" placeholder="date">
                    </div>
                    <div class="from-group col-md-6">
                      <input type="time" class="form-control" placeholder="time">
                    </div>
                    <div class="from-group col-md-12">
                     <textarea name="" id="" cols="30"row="4" placeholder="enter message "class="form-control"></textarea>
                    </div>
                    <div class="from-group text-center col-md-12">
                     <a href="" class="btn btn-danger">Submit</a>
                    </div>
          
                  </div>
                </div>
                
              </form>
            </div>
    
<script>
          let cardsscroll = document.querySelectorAll(".cardscroll");
          let stackArea = document.querySelector(".stack-area");
    
          function rotateCards() {
            let angle = 0;
            cardsscroll.forEach((cardscroll) => {
              if (cardscroll.classList.contains("active")) {
                cardscroll.style.transform = `translate(-50%, -120vh) rotate(-48deg)`;
              } else {
                cardscroll.style.transform = `translate(-50%, -50%) rotate(${angle}deg)`;
                angle = angle - 10;
              }
            });
          }
    
          rotateCards();
    
          window.addEventListener("scroll", () => {
            let proportion =
              stackArea.getBoundingClientRect().top / window.innerHeight;
            if (proportion <= 0) {
              let n = cardsscroll.length;
              let index = Math.ceil((proportion * n) / 2);
              index = Math.abs(index) - 1;
              for (let i = 0; i < n; i++) {
                if (i <= index) {
                  cardsscroll[i].classList.add("active");
                } else {
                  cardsscroll[i].classList.remove("active");
                }
              }
              rotateCards();
            }
          });
    
          //Code for responsiveness
    
          function adjust() {
            let windowWidth = window.innerWidth;
            let left = document.querySelector(".left");
            left.remove();
            if (windowWidth < 800) {
              stackArea.insertAdjacentElement("beforebegin", left);
            } else {
              stackArea.insertAdjacentElement("afterbegin", left);
            }
          }
          adjust();
    
          //detect Resize
    
          window.addEventListener("resize", adjust);
        </script>
        
         
         <!-- <iframe width="1100" height="500" src="https://www.youtube.com/embed/uLAD6prYrUw?si=wZOxQLq-IrrmuFO3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
        
<?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>