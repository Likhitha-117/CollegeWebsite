<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BSH</title>
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
    
    <div class="overlay-text"><h1 style="font-size: 1.5rem;">Department of Basic Sciences and Humanities</h1></div>
    </div> 
<section class="dept_info">
<div class="container mt-5">
  <div class="heading2"><h1 style=" font-family: Arial, Helvetica, sans-serif;font-size: 2rem;text-align: center; color: white; background-color: #000435f1;margin: 5px;">Department At A Glance</h1></div> 
  <div class="row">
      <div class="col-md-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-FacultyDirectory-tab" data-toggle="pill" href="#v-pills-FacultyDirectory" role="tab" aria-controls="v-pills-FacultyDirectory" aria-selected="true">HOD</a>
              <a class="nav-link" id="v-pills-Research-tab" data-toggle="pill" href="#v-pills-Research" role="tab" aria-controls="v-pills-Research" aria-selected="false">Research</a>
              <a class="nav-link" id="v-pills-syllabus-tab" data-toggle="pill" href="#v-pills-syllabus" role="tab" aria-controls="v-pills-syllabus" aria-selected="false">Syllabus</a>
              

          </div>
      </div>
      <div class="col-md-9">
          <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-FacultyDirectory" role="tabpanel" aria-labelledby="v-pills-FacultyDirectory-tab">
                <div class="card">
                  <div class="d-flex align-items-start">
                    <div class="img_hod">
                      <img src="BSH_HOD.jpg" alt="HOD Image">
                    </div>
                    <div class="card-body" style="background-color:#000435f1; color: white;">
                      <h3>
                        Dr. K. L. Sai Prasad-BSH</h3>
                      <p style="text-align: center;">-M.Sc.,Ph.D</p>
                    </div>
                  </div>
                  <div class="card-footer d-flex justify-content-end">
                    <a href="/GVPCEW/Faculty/Faculty.php#faculty-bsh" class="btn btn-primary" target="new">View More Faculty</a>
                  </div>
                </div>
                
              </div>
              <div class="tab-pane fade" id="v-pills-Research" role="tabpanel" aria-labelledby="v-pills-Research-tab">
                  <div class="card">
                      <div class="card-header">Research</div>
                      <div class="card-body">
                        <ul>
                       
                       <li><a href="RESEARCH JOURNAL PUBLICATIONS BSH.pdf" target="new" download >Publications</a></li>
                       <li><a href="BOOKS_BOOK CHAPTERS CONFERENCE PROCEEDINGS BSH.pdf" target="new" download >Book Chapters</a></li>
                       <li><a href="conferences-BSH.pdf" target="new" download >Conference Publications</a></li>
                     
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
                        </div>
                      </div>
                      </div>
                      </div>
          </div>
      </div>
  </div>
</div>
</section>
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
