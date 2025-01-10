<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.png" type="image/png">
  <title>GVPCEW_Faculty</title>
  <style>
    .d-none {
      display: none;
    }
  
    .content-section {
      background:white;
      padding: 20px;
      border: 1px solid #000435f1;
      border-radius: 8px;
    }
  
    .content-section h2 {
      color: #000435f1;
    }
  
    .content-section p {
      font-size: 16px;
      line-height: 1.6;
    }
    .nav-link.active {
    background-color:white !important;
    color: #000435f1 !important;
    font-weight: bold;
  }
  .nav-link{
    background-color: #000435f1 !important; 
    /* border: 3px solid #000435f1; */
  }
  </style>
  
</head>
<body>
  <?php
  include 'C:\xampp\htdocs\GVPCEW\header.php';
  ?>
  <div class="Faculty">
    <div class="Faculty d-flex">
      <!-- Sidebar -->
      <nav class="sidebar  text-white p-3" >
        <ul class="nav flex-column" id="sidebar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#faculty-cse" onclick="navigateToSection('faculty-cse', this)">CSE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#faculty-csm" onclick="navigateToSection('faculty-csm', this)">CSM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#faculty-IT" onclick="navigateToSection('faculty-IT', this)">IT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#faculty-ece" onclick="navigateToSection('faculty-ece', this)">ECE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#faculty-eee" onclick="navigateToSection('faculty-eee', this)">EEE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#faculty-bsh" onclick="navigateToSection('faculty-bsh', this)">BSH</a>
          </li>
        </ul>
      </nav>
    
      <!-- Content -->
      <div class="content p-4" id="content-area">
        <!-- Content sections -->
         
        <section id="faculty-cse" class="content-section d-none">
         <h1 style="text-align: center;font-size: 2rem;font-weight:bold;color: #000435f1;">CSE Faculty</h1>

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="CSE_HOD.jpg" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Prof. Dr. N.B.Venkateswarlu</h5>
                    <p class="card-text">M.Tech(IIT Kanpur)., Ph.D(BITS,Pilani)<br>Desgination:Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('NBVCV.pdf', '_blank');">View Profile</button>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3"  style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Prof.Dr.P.V.S.Lakshmi Jagadamba</h5>
                    <p class="card-text">M.Tech.,Ph.D<br>Designation:Professor & HOD</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrPVSLJagadamba.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. N. Sharmili<br><br></h5>
                    <p class="card-text">B.E.,M.Tech.,Ph.D<br>Designation:Associate Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('SHARMILI.pdf ', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. K. Suneetha<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr. S. Sumahasan<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('SSumahasan.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. Udaya Kumar Addanki</h5>
                    <p class="card-text">B.Tech.,M.Tech.,Ph.D<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('AUK.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. K. Rohini<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('KRohini.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. V. Lakshmana Rao<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,Ph.D<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('VLR.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr. G. Sankara Rao<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('GSR.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. Y. Soumya<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Sowmya.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. D. Indu<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Indu.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. V. Gowtami Annapurna</h5>
                    <p class="card-text">B.Tech.,M.Tech.<br>Designation:	Assistant Professor  </p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Gowthami.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs.K V S Mounica<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,<br>Designation:	Assistant Professor </p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('KVSMounica.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms.Kinjal Goswami<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('KINJAL GOSWAMI.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">	Mrs M Aswini<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Aswini.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms. A Bindu<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:	Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('BINDU.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        
    
        <section id="faculty-csm" class="content-section d-none">
          <div class="row">
            <h1 style="text-align: center;font-size: 2rem;font-weight:bold;color: #000435f1;">CSM Faculty</h1>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="CSE_HOD.jpg" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Prof.Dr. M.R.K. Krishna Rao <br><br></h5>
                    <p class="card-text">Ph.D(TIFR, Bombay)<br>Designation:Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Prof. MRK Krishna Rao.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3"  style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. Dwiti Krishna Bebarta</h5>
                    <p class="card-text">M.Tech.,Ph.D</p>Designation:Associate Professor & HOD<br>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrDKB.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. K. Purushotham Naidu</h5>
                    <p class="card-text">B.Tech.,M.Tech.,Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('KPN.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms.D B Santhoshi<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs.H Gouthami<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr.P Siva<br><br></h5>
                    <p class="card-text">B.Tech.,M.Tech.,<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            
          </div>
        </section>
    
        <section id="faculty-IT" class="content-section d-none">
          <h1 style="text-align: center;font-size: 2rem;font-weight:bold;color: #000435f1;">IT Faculty</h1>
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="CSE_HOD.jpg" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. C. Srinivas</h5>
                    <p class="card-text">B.E.,M.Tech.,Ph.D<br>Designation:Associate Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3"  style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. M. Bhanu Sridhar</h5>
                    <p class="card-text">B.E.,M.Tech.,Ph.D<br>Designation:Associate Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr M Bhanu Sridhar.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. R. Sridevi</h5>
                    <p class="card-text">B.E.,M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. P. Sridevi</h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr. Ch.V.V.D Prasad</h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('ChVVDPrasad.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs. M. Deepthi</h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('MDeepthi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr. G. Tirupathi</h5>
                    <p class="card-text">B.Tech.,M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('GTirupathi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr.G.Appaji</h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs.R.Prasanna Kumari</h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            
          </div>
        </section>
    
        <!-- Similar structure for other sections -->
        <section id="faculty-ece" class="content-section d-none">
          <h1 style="text-align: center;font-size: 2rem;font-weight:bold;color: #000435f1;">ECE Faculty</h1>
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. R. K. Goswami<br><br></h5>
                    <p class="card-text">B.E.,M.Tech.,Ph.D<br>Designation:Professor & Principal</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Prof.Dr. RK Goswami.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3"  style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Prof. Dr. K. Raja Rajeswari</h5>
                    <p class="card-text">B.E.,M.E.,Ph.D<br>Designation:Professor & Director R & D</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('ProfKRajaRajeswari.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr P. Murali Krishna Prasad</h5>
                    <p class="card-text">M.E.,Ph.D<br>Designation:Associate Professor & HOD</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrPMKPrasad CV.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr L. Ganesh<br><br></h5>
                    <p class="card-text">	B.Tech., M.Tech., Ph.D<br>Designation:Associate Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr.L.Ganesh.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr D.V.A.N. Ravi Kumar<br><br></h5>
                    <p class="card-text">M.Tech.,Ph.D<br>Desgination:Associate Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DRK.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. B. Vijaya Lakshmi<br><br></h5>
                    <p class="card-text">M.Tech., Ph.D<br>Designation:Associate Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrBVL-ECE.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs B.V.S.Renuka Devi</h5>
                    <p class="card-text">B.Tech., M.Tech(IIT, DELHI).,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('BVSRenukaDevi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs Ch.Sirisha<br><br></h5>
                    <p class="card-text">M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('ChSirisha.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs M. Manikumari<br><br></h5>
                    <p class="card-text">M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('MManiKumari.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr N.V. Maheswara Rao</h5>
                    <p class="card-text">M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('NVMahesh.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs B. Lakshmi<br><br></h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('B Lakshmi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs L. Sarika<br><br></h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('LSarika.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <!-- Image on the left -->
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  
                  <!-- Card content -->
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr R. Sunil Kumar<br><br></h5>
                    <p class="card-text">M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <!-- Button at the bottom-right -->
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('RSunilKumar.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr P.V.K Chaitanya<br><br></h5>
                    <p class="card-text">M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('PVKChaitanya.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr S. Ramanjaneya Reddy</h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('RamanjaneyaReddy.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs R. Jalaja<br><br></h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Jalaja Rajana.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs G.P.S Prasanthi<br><br></h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Mrs. G.P.S. Prashanthi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs N. Roopavathi<br><br></h5>
                    <p class="card-text">M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('ROOPA VATHI.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs B. Divya Sathi<br><br></h5>
                    <p class="card-text">M.Tech.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('BDivyaSathi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. P V Dileep Bhumireddy</h5>
                    <p class="card-text">B.Tech., M.Tech., Ph.D (IIT Kharagpur)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrBVPDileepResume.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms M. Hemlata</h5>
                    <p class="card-text">B.Tech., M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('hemlata.M.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="faculty-eee" class="content-section d-none">
          <h1 style="text-align: center;font-size: 2rem;font-weight:bold;color: #000435f1;">EEE Faculty</h1>
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. R.V.S Lakshmi Kumari</h5>
                    <p class="card-text">B.Tech., M.Tech., Ph.D<br>Designation:Associate Professor, HOD</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr R V S Lakshmi Kumari.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. P. Devendra<br><br></h5>
                    <p class="card-text">B.Tech., M.E., Ph.D<br>Designation:Associate Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr P Devendra.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. A.S.V. Vijaya Lakshmi</h5>
                    <p class="card-text">B.Tech., M.Tech., Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Mrs ASV Vijaya Lakshmi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr. M. Krishna<br><br></h5>
                    <p class="card-text">B.E., M.Tech, (Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Mr M Krishna.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms V. Sree Vidhya</h5>
                    <p class="card-text">B.E., M.E, (Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Mrs V Srividya.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr Y. Ramu</h5>
                    <p class="card-text">B.E., M.Tech., (Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Mr Y Ramu.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms P Sai Jyothi</h5>
                    <p class="card-text">B.Tech., M.Tech(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Ms P Sai Jyothi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr A Srinivas Rao</h5>
                    <p class="card-text">B.Tech., M.Tech(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Mr A Srinivas Rao.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms P. Hemalatha</h5>
                    <p class="card-text">B.Tech., M.Tech<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('P Hemalatha.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--BSH Faculty-->
        <section id="faculty-bsh" class="content-section d-none">
          <h1 style="text-align: center;font-size: 2rem;font-weight:bold;color: #000435f1;">BSH Faculty</h1>
          
          <div class="row">
            <h2 style="font: bold ; font-size: 2rem;">Faculty in Mathematics</h2>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Prof. Dr. G. Sudheer</h5>
                    <p class="card-text" style="font-size: 0.8rem;">M.Sc.,Ph.D
                      FIMA(UK), SMIEEE, SMACM, LMCSI<br>Designation:Professor & Vice-Principal</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Prof. Dr.Gopinathan Sudheer.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr.K.L.Sai Prasad</h5>
                    <p class="card-text">M.Sc.,Ph.D<br>Designation:Associate Professor & HOD</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrKLSP.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. A. Suseelatha</h5>
                    <p class="card-text">M.Sc.,Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('DrASuseelatha.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs B. Bharathi</h5>
                    <p class="card-text">M.Sc.,M.Phil.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Bharathi.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. A.Kameswara Rao</h5>
                    <p class="card-text">M.Sc.,Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr Kameswara Rao.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr V.S.S.V.D Prakash</h5>
                    <p class="card-text">M.Sc., M.Phil., (Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Prakash.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. T. Purna Kantha</h5>
                    <p class="card-text">M.Sc.,M.Phil., Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr Purnakantha.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <h2 style="font: bold ; font-size: 2rem;">Faculty in Physics</h2>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs V.Siva Jahnavy<br><br></h5>
                    <p class="card-text">M.Sc.,M.Phil<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr V.V.V. Satyanaryana<br><br></h5>
                    <p class="card-text">M.Sc.,(Ph.D)<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. B.Rajesh Babu</h5>
                    <p class="card-text">M.Sc.,M.Phil., Ph.D., Post Doctoral Fellow<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. Ch. Sanyasa Lakshmi</h5>
                    <p class="card-text">M.Sc.,M.Phil., Ph.D.<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <h2 style="font: bold ; font-size: 2rem;">Faculty in Chemistry</h2>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mr S. Ashok<br><br></h5>
                    <p class="card-text">M.Sc<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. Ms Rani Prava Nanda</h5>
                    <p class="card-text">M.Sc.,Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr Rani Prava.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. P Srinivasa Rao<br><br></h5>
                    <p class="card-text">M.Sc.,Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr P Srinivasa Rao.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <h2 style="font: bold ; font-size: 2rem;">Faculty in English</h2>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. Ch. Alekya</h5>
                    <p class="card-text">M.A., M.Phil., Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr Alekhya.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr V.V.L Usha Ramani</h5>
                    <p class="card-text">M.A., M.Phil., Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Dr Usha Ramani.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <h2 style="font: bold ; font-size: 2rem;">Faculty in Management Studies</h2>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Ms K. Valli Krishnaveni</h5>
                    <p class="card-text">M.B.A<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Krishna Veni.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr R. Neelima</h5>
                    <p class="card-text">M.Com, M.B.A., Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Dr. R.Anuradha<br><br></h5>
                    <p class="card-text">M.L.I.Sc.,M.Phil,Ph.D<br>Designation:Assistant Professor</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('Anuradha.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3" style="background-color: #000435f1; color: #ffff;">
                <div class="card-body d-flex flex-row align-items-start">
                  <img src="https://via.placeholder.com/100" alt="Faculty Image" class="me-3" style="width: 100px; height: 100px;">
                  <div class="flex-grow-1">
                    <h5 class="card-title">Mrs N.Mangala Gowri</h5>
                    <p class="card-text">M.Com., M.P.Ed<br>Designation:Assistant Physical Education Director</p>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <button class="btn btn-primary" onclick="window.open('path/to/your/file.pdf', '_blank');">View Profile</button>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
    </div>
    </div>
    <?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
    <script>
      // Function to show the content and update active class
      function navigateToSection(sectionId, clickedLink) {
        // Show the relevant content
        showContent(sectionId);
    
        // Highlight the clicked navigation item
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => link.classList.remove('active')); // Remove active class from all links
    
        // Add active class to the clicked link
        clickedLink.classList.add('active');
      }
    
      // Function to display the relevant content
      function showContent(sectionId) {
        // Hide all content sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => {
          section.classList.add('d-none');
        });
    
        // Show the selected section
        const selectedSection = document.getElementById(sectionId);
        if (selectedSection) {
          selectedSection.classList.remove('d-none');
        }
      }
    
      // Handle hash navigation on page load or hash change
      function handleHashNavigation() {
        const hash = window.location.hash.substring(1); // Remove the '#' from the hash
        const navLinks = document.querySelectorAll('.nav-link');
    
        if (hash) {
          showContent(hash); // Display the section based on the hash
          // Highlight the corresponding navigation link
          navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${hash}`) {
              link.classList.add('active');
            }
          });
        } else {
          // Default to showing the first section (e.g., Overview)
          showContent('faculty-cse');
          if (navLinks[0]) {
            navLinks[0].classList.add('active');
          }
        }
      }
    
      // Listen for page load and hash changes
      window.addEventListener('load', handleHashNavigation);
      window.addEventListener('hashchange', handleHashNavigation);
    </script>
    
    
    
</body>
</html>