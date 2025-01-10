<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EEE</title>
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
    <div class="overlay-text"><h1 style="font-size: 1.5rem;">Department of Electrical & Electronics Engineering</h1></div>
    </div> 
    
  <div class="About_Dept">
<h3 class="heading">
About the Programme

</h3>
<p >
  The department of Electrical and Electronics Engineering(EEE)was established in the year 2011. The main objective of the department is to produce high quality Electrical Engineering graduates. The department flourishes in its enthusiastic and energetic environment comprising of the major fields of Electrical, Electronics and Elements of Computer Science. The department has state of the art laboratories that are equipped with instruments and equipment for teaching, learning and research.
  The department offers intensive training theoretical and practical in all of the major areas of Electrical and Electronics engineering. The faculty of the department continuously promote advanced short term courses to upgrada themselves and provide quality education to the students in the field of Electrical Engineering.

</p>
  </div>
<div class="flex visionBlocks">
<span class="visionAndMission aos-init " data-aos="fade-right" data-aos-delay="100">
<h2>Vision</h2>
<p>
  To develop into a centre of learning that empowers students with contemporary knowledge in Electrical & Electronics Engineering for their overall growth.
</p>
</span>
<span class="visionAndMission aos-init"data-aos="fade-left" data-aos-delay="100" >
<h2> Mission</h2>
<p>
* Impart skills both in traditional and modern areas of Electrical & Electronics Engineering<br>
* Provide exposure to latest developments in the field through Seminars, Industrial visits, Workshops and Paper presentations.  <br>
*Prepare the young minds to apply professional engineering practices by considering environmental and societal needs.<br>
</p>
</span>
</div>
<section class="dept_info">
  <div class="container mt-5">
    <div class="heading2"><h1 style=" font-family: Arial, Helvetica, sans-serif;font-size: 2rem;text-align: center; color: white; background-color: #000435f1;margin: 5px;">Department At A Glance</h1></div> 
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
                        <img src="EEE_HOD.jpg" alt="HOD Image" width="200">
                      </div>
                      <div class="card-body" style="background-color:#000435f1; color: white;">
                        <h3>
                          Dr. R.V.S Lakshmi Kumari-EEE</h3>
                        <p style="text-align: center;">-B.Tech., M.Tech., Ph.D</p>
                      </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                      <a href="/GVPCEW/Faculty/Faculty.php#faculty-eee" class="btn btn-primary" target="new">View More Faculty</a>
                    </div>
                  </div>
                  
                </div>
                <div class="tab-pane fade" id="v-pills-Research" role="tabpanel" aria-labelledby="v-pills-Research-tab">
                    <div class="card">
                        <div class="card-header">Research</div>
                        <div class="card-body">
                          <ul>
                         
                         <li><a href="Faculty Journal PublicationsEEE.pdf" target="new" download >Journal Publications from EEE</a></li>
                         <li><a href="Faculty Conference PublicationsEEE.pdf" target="new" download >Conference Publications from EEE</a></li>
                         <li><a href="EEE Faculty FDPs.pdf" target="new" download >Faculty Development Programs</a></li>
                        <li><a href="EEE faculty Patents.pdf" target="new" download >Patents from EEE</a></li>
                        <li><a href="EEE faculty book chapters.pdf" target="new" download >Book Chapters from EEE</a></li>
                        <li> <a href="Innovative Methodologies.pdf" target="new" download >Innovative Methodologies</a></li>
        
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
                                <a href="Vidyut-2022.pdf" target="new" download >Vidyut 2k22</a>
                            </div>
                            <!-- Box 2 -->
                            <div class="box">
                                <a href="Vidyut-2021.pdf" target="new" download >Vidyut 2k21</a>
                            </div>
                            <!-- Box 3 -->
                            <div class="box">
                                <a href="Vidyut-2020.pdf" target="new" download >Vidyut 2k20</a>
                            </div>
                            <!-- Box 4 -->
                            <div class="box">
                                <a href="Vidyut-2019.pdf"target="new" download >Vidyut 2k19</a>
                            </div>
                            <div class="box">
                              <a href="Vidyut-2018.pdf" target="new" download >Vidyut 2k18</a>
                          </div>
                          <div class="box">
                            <a href="Vidyut-2017.pdf" target="new" download >Vidyut 2k17/a>
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
                                <a href="R16 EEE.pdf" target="new" download >R16</a>
                            </div>
                            <!-- Box 2 -->
                            <div class="box">
                                <a href="EEE R19.pdf" target="new" download >R19</a>
                            </div>
                            <!-- Box 3 -->
                            <div class="box">
                                <a href="19-20 B.Tech Academic Calenders-2-3-4 yearsEEE.pdf"target="new" download >2019 - 2020 B.Tech Academic Calenders-II-III-IV Years
                                </a>
                            </div>
                           
        
                          </div>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-coPo" role="tabpanel" aria-labelledby="v-pills-coPo-tab">
                          <div class="card">
                              <div class="card-header">CO-PO</div>
                              <div class="card-body">
                                <li> <a href="POs EEE.pdf" target="new" download >Program Outcomes</a></li>
                                <li><a href="B.Tech EEE R16 COs.pdff "target="new" download >B.Tech R16 Course Outcomes</a></li>
                                  
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
          <li class="peosEffectList box-shadow aos-init" data-aos="fade-left" data-aos-delay="0">Applying fundamentals of Mathematics, Science, Electrical and Electronics Engineering and soft skills in their Professional Engineering Practice.</li>
          <li class="peosEffectList box-shadow aos-init" data-aos="fade-left" data-aos-delay="100">Exhibit critical thinking, problem solving skills and design systems for real world problems</li>
          <li class="peosEffectList box-shadow aos-init" data-aos="fade-left" data-aos-delay="200">Establish leading positions in society by adopting professional ethics and life long learning.</li>        
    </ul>
  </div>
</div> 
<div class="ProgrmaSpecificOutcomes">
  <div class="container " style="box-shadow: 3px 3px 6px #000000;padding: 50px;">
    <h3 class="heading">Program Specific Outcomes</h3>

<div>
  <h5>Engineering Graduates will be able to:</h5>
  <ul>
    <li>PSO-1: Design and analyze systems that efficiently generate, transmit, distribute and utilize electrical power..</li>
    <li>PSO-2: Demonstrate the proficiency in the use of hardware and software tools for solving the complex engineering problems in renewable energy and other emerging areas.</li>
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
                <p class="card-text">B.Tech   -   Intake: 60

                </p>
                
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
                <p class="card-text">TESLA   -   Technolosky Electrical Scientella   </p>
            </div>
        </div>
    </div>
    <div class="col-md-3"data-aos="fade-right" data-aos-delay="300">
      <div class="card">
        
          <div class="card-body" style="height:250px">
            <h5 class="card-title">Student Activities</h5>
            <ul>
             <li>
               <a href="Student Activity photos_ECE.pdf" target="new" download>Student Activity</a>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="node_modules/aos/dist/aos.js"></script>
  <script> 
    AOS.init();
  </script>
</body>
</html>
