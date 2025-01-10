<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="library.css">
    
</head>
<body>
<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<div class="container-fluid">
    <!-- Section 1 -->
    <section class="scroll-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="content">
            <h1>Welcome to GVPCEW Library!</h1>
            <p>The Central Library is well equipped with modern facilities and resources (print and electronic) in the form of CD-ROMS, DVD ROMs, online databases, books, journals, Project reports, etc.
                It also has full fledged digital library possessing good e-resources (e-journals, e-books and e-database).</p>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="scroll-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="content text-center">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Timings</h5>
                            <p class="card-text">Monday - Saturday 7:00AM - 7:00PM</p>
                            <p class="card-text">2nd Saturday 9:00AM - 5:00PM</p>
                            <p class="card-text">Sunday 9:00AM - 1:00PM</p>
                            
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Membership</h5>
                                <a href="libLinks.php#section4" class="btn btn-primary " target="new" style="margin: 5px;">Students</a><br><br>
                                <a href="libLinks.php#section5" class="btn btn-primary" target="new" >Faculty</a>
                                <br>
                                <br>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Details</h5>
                            <a href="libLinks.php#section7" class="d-block" target="new">General Instructions</a>
                            <a href="libLinks.php#section2" class="d-block" target="new">Books</a>
                            <a href="libLinks.php#section1" class="d-block" target="new">Special Features</a>
                            <a href="libLinks.php#section8 " class="d-block" target="new">Selection</a>
                            <a href="libLinks.php#section6" class="d-block" target="new">Services</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">e-Materials</h5>
                                <a href="E-Books Titles.pdf" class="d-block" target="new">e-Books</a>
                                <a href="Elsevier Science Direct ejournals-ComputerScienceEngineering 2016.pdf" class="d-block" target="new">Elsevier Science Direct ejournals-ComputerScienceEngineering 2016</a>
                                <a href="IEEE -ejournals  2016.pdf" downaload class="d-block" target="new">IEEE e-Journals</a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Library JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Duration of animation in milliseconds
        once: true      // Animation only happens once as you scroll
    });
</script>

</body>
</html>
