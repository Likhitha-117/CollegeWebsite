<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT DEPT</title>
  <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
<link rel="icon" type="image/x-icon" href="images/gaytri-removebg-preview.png">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Dept.css">
<style>
   @media (max-width: 768px) {
    .DeptName {
      font-size: 0.8rem;  /* Reduce font size on medium screens */
    }
  }

  /* Small screens (phones) */
  @media (max-width: 480px) {
    .DeptName {
      font-size:0.8rem;  /* Further reduce font size on small screens */
    }
  }
</style>
</head>
<body>
<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
  <div class="dept_img" >
    <!-- <img src="banner.png" class="img-fluid" alt="Responsive image" > -->
    <div id="carouselExampleIndicators" class="carousel slide dept_img" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="banner.png" class="d-block w-100" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="cse_banner1.png" class="d-block w-100" alt="Second slide">
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
    <div class="overlay-text"><h1 style="font-size: 1.5rem;">Information Technology </h1></div>
    </div> 
    
  <div class="About_Dept">
<h3 class="heading">
About the Programme

</h3>
<p >
        The Department of Information Technology(IT) at GVPW aims to equip the students with fundamental concepts and techniques of computing and applications relevant to emerging technological advancements. The curriculum designed by JNTUK is followed by the department and focuses on providing fundamentals of theory followed by practical projects and industrial training.
       The department comprises of dedicated, diligent faculty team to guide the student reach higher altitudes with positive attitude. The Information Technology engineers are expected to perform a variety of duties that range from installing applications to designing software, complex networks and information databases. The goal of the department is to prepare the students to face the challenges of the fast growing IT industry.

</p>
  </div>
<div class="flex visionBlocks">
<span class="visionAndMission aos-init " data-aos="fade-right" data-aos-delay="100">
<h2>Vision</h2>
<p>
    The Department of IT strives to produce competent professionals who are technically sound and ethically strong for the IT industry.
</p>
</span>
<span class="visionAndMission aos-init"data-aos="fade-left" data-aos-delay="100" >
<h2> Mission</h2>
<p>
* Provide quality training that prepares Students to be technically competent for the Industrial and Societal needs.<br>
*Facilitate an environment that promotes continuous learning to face the challenges in the IT sector.<br>
* Provide opportunities for learning, leadership and communication skills.<br>
</p>
</span>
</div>
<section class="dept_info">
  <div class="container mt-5">
    <div class="heading2"><h1 style=" font-family: Arial, Helvetica, sans-serif;font-size: 2rem;text-align: center; color: white; background-color: #000435f1;margin: 5px;">Department At A Glance</h1> </div> 
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-FacultyDirectory-tab" data-toggle="pill" href="#v-pills-FacultyDirectory" role="tab" aria-controls="v-pills-FacultyDirectory" aria-selected="true">HOD</a>
                <a class="nav-link" id="v-pills-Research-tab" data-toggle="pill" href="#v-pills-Research" role="tab" aria-controls="v-pills-Research" aria-selected="false">Research</a>
                <a class="nav-link" id="v-pills-DepartMagazines-tab" data-toggle="pill" href="#v-pills-DepartMagazines" role="tab" aria-controls="v-pills-DepartMagazines" aria-selected="false">Department Magazines</a>
                <a class="nav-link" id="v-pills-syllabus-tab" data-toggle="pill" href="#v-pills-syllabus" role="tab" aria-controls="v-pills-syllabus" aria-selected="false">Syllabus</a>
                <a class="nav-link" id="v-pills-coPo-tab" data-toggle="pill" href="#v-pills-coPo" role="tab" aria-controls="v-pills-coPo" aria-selected="false">CO-PO</a>
  
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-FacultyDirectory" role="tabpanel" aria-labelledby="v-pills-FacultyDirectory-tab">
                  <div class="card">
                    <div class="d-flex align-items-start">
                      <div class="img_hod">
                        <img src="IT_HOD.jpeg" alt="HOD Image" width="170">
                      </div>
                      <div class="card-body" style="background-color:#000435f1; color: white;">
                        <h3>Dr. M. Bhanu Sridhar-IT</h3>
                        <p style="text-align: center;">-B.E.,M.Tech.,Ph.D </p>
                      </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                      <a href="/GVPCEW/Faculty/Faculty.php#faculty-IT" class="btn btn-primary" target="new">View More Faculty</a>
                    </div>
                  </div>
                  
                </div>
                <div class="tab-pane fade" id="v-pills-Research" role="tabpanel" aria-labelledby="v-pills-Research-tab">
                    <div class="card">
                        <div class="card-header">Research</div>
                        <div class="card-body">
                          <ul>
                         
                         <li><a href="JOURNALS_IT.pdf" target="new" download >Publications</a></li>
                         <li><a href="PATENTS_IT.pdf" target="new" download >Patents</a></li>
                        <li><a href="CONFERENCES_IT.pdf" target="new" download >List of Conferences</a></li>
                        <li><a href="BOOK_CHAPTERS_IT.pdf" target="new" download> Book Chapters</a></li>
                        <li><a href="FDP_IT.pdf" target="new" download >Faculty Development Programs</a></li>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-DepartMagazines" role="tabpanel" aria-labelledby="v-pills-DepartMagazines-tab">
                    <div class="card">
                        <div class="card-header">Department Magazines</div>
                        <div class="card-body">
                          <div class="Magazinesvolumes">
                            <!-- Box 1 -->
                            <div class="box">
                                <a href="Spike IQ - 16.pdf" target="new" download >SPIKE-IQ - VOL 1</a>
                            </div>
                            <!-- Box 2 -->
                            <div class="box">
                                <a href="Spike IQ - 17.pdf" target="new" download >SPIKE-IQ - VOL 2</a>
                            </div>
                            <!-- Box 3 -->
                            <div class="box">
                                <a href="Spike IQ - 18.pdf" target="new" download >SPIKE-IQ - VOL 3</a>
                            </div>
                          </div>
                        </div> 
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-syllabus" role="tabpanel" aria-labelledby="v-pills-syllabus-tab">
                    <div class="card">
                        <div class="card-header">Syllabus</div>
                        <div class="card-body">
                          <div class="Magazinesvolumes">
                            <!-- Box 1 -->
                            <div class="box">
                                <a href="R16 IT.pdf" target="new" download >R20-CSE(AI&ML)</a>
                            </div>
                            <!-- Box 2 -->
                            <div class="box">
                                <a href="IT R19.pdf" target="new" download >R20-CSE</a>
                            </div>
                            <!-- Box 3 -->
                            <div class="box">
                                <a href="19-20 B.Tech Academic Calenders-2-3-4 years.pdf" target="new" download >R19</a>
                            </div>
                          
                          </div>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-coPo" role="tabpanel" aria-labelledby="v-pills-coPo-tab">
                          <div class="card">
                              <div class="card-header">CO-PO</div>
                              <div class="card-body">
                                <li> <a href="POs_IT.pdf" target="new" download >B.Tech R16 Course Outcomes</a></li>
                                <li><a href="B.Tech IT R16 COs.pdf" target="new" download >Program Outcomes</a></li>
                             
                              </div>
                          </div>
                      </div>
            </div>
        </div>
    </div>
  </div>
  </section>
<div class="container my-5">
  <div class="row">
      <div class="col-lg-4 aos-init" data-aos="fade-right">
          <img src="peo.png" alt="" class="Poesimage" style="height: auto;width:100%">
      </div>
      <ul class="col-lg-8 d-inline-flex flex-column align-items-stretch justify-content-around peosEffect">
          <li class="peosEffectList box-shadow aos-init" data-aos="fade-left" data-aos-delay="0">Apply, analyze and solve complex engineering problems using emerging IT technologies with the help of fundamental knowledge in mathematics, science, and engineering.</li>
          <li class="peosEffectList box-shadow aos-init" data-aos="fade-left" data-aos-delay="100"> Comprehend, Analyse, Design and Create innovative computing products and solutions for real-life problems.</li>
          <li class="peosEffectList box-shadow aos-init" data-aos="fade-left" data-aos-delay="200">Inculcate the necessary skills to engage in lifelong learning.</li>        
    </ul>
  </div>
</div> 
<div class="ProgrmaSpecificOutcomes">
  <div class="container " style="box-shadow: 3px 3px 6px #000000;padding: 50px;">
    <h3 class="heading">Program Specific Outcomes</h3>

<div>
  <h5>Engineering Graduates will be able to:</h5>
  <ul>
    <li>PSO-1: Develop software applications by analyzing, designing and implementing with cutting edge technology to address the needs of IT industry.</li>
    <li>PSO-2: Apply the knowledge of Data Science, machine learning, image processing and allied areas to obtain optimized solutions for real time problems.</li>
  </ul>
</div>
</div>
<div class="Dept_details"  >
  <div class="row">
    <div class="col-md-3" data-aos="fade-right" data-aos-delay="0">
        <div class="card">
            <div class="card-body" style="height:250px">
                <h5 class="card-title">Courses Offered</h5>
                <hr>
                <p class="card-text">B.Tech(IT)   -   Intake: 60</p>
            </div>
        </div>
    </div>
    <div class="col-md-3" data-aos="fade-right" data-aos-delay="100">
        <div class="card">
            
            <div class="card-body" style="height:250px">
                <h5 class="card-title">Placements</h5>
                <hr>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               
            </div>
        </div>
    </div>
    <div class="col-md-3"data-aos="fade-right" data-aos-delay="200">
        <div class="card">
          
            <div class="card-body" style="height:250px">
                <h5 class="card-title">Clubs/Professional Bodies</h5>
                <hr>
                <p class="card-text">CSI   -   Computer Society of India</p>
                <p>SPIKE   -   Students Panapoly of Information Knowledge Enhancement</p>
                
            </div>
        </div>
    </div>
    <div class="col-md-3"data-aos="fade-right" data-aos-delay="300">
      <div class="card">
        
          <div class="card-body" style="height:250px">
            <h5 class="card-title">Club activities</h5>
            <ul>
             <li>
               <a href="Spike IQ - 16.pdf" target="new" download>SPIKE-IQ - VOL 1</a>
             </li>
             <li>
               <a href="Spike IQ - 17.pdf" target="new" download>SPIKE-IQ - VOL 2</a>
             </li>
             <li>
               <a href="Spike IQ - 18.pdf" target="new" download>SPIKE-IQ - VOL 3</a>
             </li>
            </ul>
         </div>
          </div>
      </div>
  </div>
</div>
</div>
<?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="node_modules/aos/dist/aos.js"></script>
  <script> 
    AOS.init();
  </script>
</body>
</html>
