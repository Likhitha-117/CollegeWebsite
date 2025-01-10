<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>
    <link rel="stylesheet" href="superstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>

    <header>
        <h1>Facilities</h1>
    </header>
    <main>
        <a href="allfacilities.html#lab" class="facility" id="labLink">
            <h2>Lab Facilities</h2>
            <div class="images">
                <img src="https://www.gvpcew.ac.in/images/facilities/cselab-1.jpg" alt="Lab Image 1">
                <img src="https://www.gvpcew.ac.in/images/facilities/cselab-2.jpg" alt="Lab Image 2">
                <img src="https://www.gvpcew.ac.in/images/facilities/cselab-3.jpg" alt="Lab Image 3">
            </div>
        </a>
        <a href="allfacilities.html#classroom" class="facility" id="classroomLink">
            <h2>Classroom Facilities</h2>
            <div class="images">
                <img src="https://www.gvpcew.ac.in/images/facilities/101.jpg" alt="Classroom Image 1">
                <img src="https://www.gvpcew.ac.in/images/facilities/102.jpg" alt="Classroom Image 2">
                <img src="https://www.gvpcew.ac.in/images/facilities/104.jpg" alt="Classroom Image 3">
            </div>
        </a>
        <a href="allfacilities.html#library" class="facility" id="libraryLink">
            <h2>Library Facilities</h2>
            <div class="images">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-1.jpg" alt="Library Image 1">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-2.jpg" alt="Library Image 2">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-3.jpg" alt="Library Image 3">
            </div>
        </a>
        <a href="allfacilities.html#bus" class="facility" id="busLink">
            <h2>Bus Facilities</h2>
            <div class="images">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-1.jpg" alt="Bus Image 1">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-2.jpg" alt="Bus Image 2">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-3.jpg" alt="Bus Image 3">
            </div>
        </a>
        <a href="allfacilities.html#hostel" class="facility" id="hostelLink">
            <h2>Hostel Facilities</h2>
            <div class="images">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-1.jpg" alt="Hostel Image 1">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-2.jpg" alt="Hostel Image 2">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-3.jpg" alt="Hostel Image 3">
            </div>
        </a>
        <a href="allfacilities.html#sports" class="facility" id="sportsLink">
            <h2>Sports Facilities</h2>
            <div class="images">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-1.jpg" alt="Sports Image 1">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-2.jpg" alt="Sports Image 2">
                <img src="https://www.gvpcew.ac.in/images/facilities/Library-3.jpg" alt="Sports Image 3">
            </div>
        </a>
 <script>
        // JavaScript to handle highlighting the selected facility
        const facilityLinks = document.querySelectorAll('.facility');
        
        facilityLinks.forEach(link => {
            link.addEventListener('click', function() {
                facilityLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>

</main>
<?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
       