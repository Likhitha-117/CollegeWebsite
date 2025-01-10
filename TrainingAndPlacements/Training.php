<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training And Placements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Custom styles for the navbar */

        .navbar {
            background-color: #f8f9fa; /* Light gray background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .navbar-nav .nav-link {
            color:white; /* Text color */
            font-weight: bold;
            font-size: 20px;
        }

        /* Ensure dropdown is inline with other nav items */
        .navbar-nav .nav-item {
            display: inline-block;
        }
        .dropdown-item {
            padding: 10px 20px !important; /* Increase padding for better clickability */
            border-radius: 5px !important; /* Rounded corners */
            transition: background-color 0.3s ease !important;
        }

        /* Hover effect for dropdown items */
        .dropdown-item:hover {
            background-color: #000435f1 !important;
            color: white !important;
        }

        /* Custom styles for cards */
        .card {
            margin: 10px 0;
            text-align: center;
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Shadow effect */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Card hover effect */
        .card:hover {
            transform: translateY(-10px); /* Lift effect */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Stronger shadow */
        }

        /* Styling for the image */
        .card img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0; /* Rounded top corners for the image */
            border-bottom: 2px solid #f1f1f1; /* Border between image and body */
        }
        /* Card title and text */
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
        }

        .card-text {
            font-size: 1rem;
            color: white;
        }
/* Styling for the PDF icon section */
.pdf-icons-container {
    display: flex;
    justify-content: center;
    margin-top: 40px;
}

.pdf-icon {
    margin: 0 20px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.pdf-icon:hover {
    transform: scale(1.1); /* Slight zoom effect on hover */
}

.pdf-icon img {
    width: 120px; /* Increased width */
    height: 120px; /* Increased height */
    border-radius: 50%; /* Make image round */
}
.pdf-icons-container p{
    color: #000435f1;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}
.table-container {
            margin: 40px auto;
            max-width: 95%;
        }
       .table-container {
        margin: 40px auto; /* Centers the container horizontally */
    width: 50%; /* Limits the width of the container */
    text-align: center; /* Centers the heading and any text inside the container */
        }
        table {
            margin: 0 auto; /* Centers the table within the container */
    border-collapse: collapse;
    width: 80%; /* Adjust width as needed */
    background-color: #f8f9fa;
    font-size: 0.8rem;
        }
        th, td {
            padding: 1px; /* Reduce padding for cells */
            border: 1px solid #ddd;
        }
        th {
            background-color: #000435f1;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .column-1 {
            width:100px; /* Wider for column 1 */
        }
        .column-small {
            width: 50px; /* Smaller for columns 2-7 */
        }
    </style>
</head>
<body>
 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid d-flex justify-content-end" style="background-color: #000435f1; color:white;">
            <!-- Right-aligned links -->
            <a class="nav-link" href="#" style="font-size: 20px; margin:20px">Recruiters</a>
            <a class="nav-link" href="#" style="font-size: 20px;margin:20px">Training and Programs</a>
            
            <!-- Dropdown for Placements and Records -->
            <li class="nav-item dropdown" style="display: inline-block;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;margin:20px">
                    Placements And Records
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2019-23</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2018-22</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2017-21</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2016-20</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2015-10</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2014-18</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2013-17</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2012-16</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2011-15</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2010-14</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2009-13</a></li>
                    <li><a class="dropdown-item" href="#" style="text-align: center;">2008-12</a></li>
                </ul>
            </li>

            <a class="nav-link" href="#" style="font-size: 20px;margin:20px">Placements Gallery</a>
        </div>
    </nav>
     <!-- Table Section -->
     <div class="container table-container" style="background-color: orange;">
    <h3 style="text-align: center; font-weight: bold; color: #000435f1; font-family: Arial, Helvetica, sans-serif;">Placement Data Table</h3>
    <table>
        <thead>
            <tr>
                <th class="column-1">Column 1</th>
                <th class="column-small">CSE</th>
                <th class="column-small">CSM</th>
                <th class="column-small">IT</th>
                <th class="column-small">ECE</th>
                <th class="column-small">EEE</th>
                <th class="column-small">Total</th>
            </tr>
        </thead>
        <tbody>
            <!-- Replace the below rows with your data -->
            <tr>
                <td class="column-1">2023</td>
                <td class="column-small">100</td>
                <td class="column-small">80</td>
                <td class="column-small">70</td>
                <td class="column-small">90</td>
                <td class="column-small">60</td>
                <td class="column-small">400</td>
            </tr>
            <tr>
                <td class="column-1">2022</td>
                <td class="column-small">120</td>
                <td class="column-small">85</td>
                <td class="column-small">75</td>
                <td class="column-small">95</td>
                <td class="column-small">65</td>
                <td class="column-small">440</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <tr>
                <td class="column-1">2021</td>
                <td class="column-small">110</td>
                <td class="column-small">82</td>
                <td class="column-small">68</td>
                <td class="column-small">88</td>
                <td class="column-small">58</td>
                <td class="column-small">406</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Cards Section -->
    <div class="container mt-5">
        
        <div class="row">
            <h3 style="text-align: center;font-weight:bold;color:#000435f1;font-family:Arial, Helvetica, sans-serif;">Placement Team</h3>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Image">
                    <div class="card-body" style=" padding: 20px; background-color: #000435f1; border-radius: 0 0 15px 15px;">
                        <h5 class="card-title" style="color: white;">Card Title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Image">
                    <div class="card-body" style=" padding: 20px; background-color: #000435f1; border-radius: 0 0 15px 15px;">
                        <h5 class="card-title" style="color: white;">Card Title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Image">
                    <div class="card-body" style=" padding: 20px; background-color: #000435f1; border-radius: 0 0 15px 15px;">
                        <h5 class="card-title" style="color: white;">Card Title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Image">
                    <div class="card-body" style=" padding: 20px; background-color: #000435f1; border-radius: 0 0 15px 15px;">
                        <h5 class="card-title" style="color: white;">Card Title 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Icons Section -->
    <div class="container mt-5">
        <div class="pdf-icons-container">
        <div class="pdf-icon" onclick="window.open('pdf3.pdf', '_blank');">
                
        <img src=""alt="PDF Icon 3">
        <p > Campus Overall Placements</p>
    </div>
            <div class="pdf-icon" onclick="window.open('pdf3.pdf', '_blank');">
                <img src=""alt="PDF Icon 3">
                <p> Campus Overall Placements</p>
            </div>
            <div class="pdf-icon" onclick="window.open('pdf3.pdf', '_blank');">
                <img src=""alt="PDF Icon 3">
                <p> Campus Overall Placements</p>
            </div>
            <div class="pdf-icon" onclick="window.open('pdf3.pdf', '_blank');">
                <img src=""alt="PDF Icon 3">
                <p> Campus Overall Placements</p>
            </div>
            <div class="pdf-icon" onclick="window.open('pdf3.pdf', '_blank');">
                <img src=""alt="PDF Icon 3">
                <p> Campus Overall Placements</p>
            </div>
            <div class="pdf-icon" onclick="window.open('pdf3.pdf', '_blank');">
                <img src=""alt="PDF Icon 3">
                <p> Campus Overall Placements</p>
            </div>
        </div>
    </div>

<?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>  
</body>
</html>
