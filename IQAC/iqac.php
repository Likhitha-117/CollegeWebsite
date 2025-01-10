<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Additional styling for the custom layout */

        .panel {
            background-color: #000435;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: darkblue;
            padding: 20px;
        }

        .panel h2 {
            font-size: 24px;
            margin-bottom: 20px;
            border-bottom: 2px solid orange;
            padding-bottom: 10px;
            color: orange;
            text-align: center;
        }

        .panel a {
            display: block;
            color: #ffffff;
            font-size: 18px;
            text-decoration: none;
            margin-bottom: 15px;
            padding: 8px;
            border-radius: 5px;
            transition: all 0.3s ease;
            position: relative;
        }

        .panel a:hover {
            background-color:white;
            padding-left: 16px;
            color: #000435;
        }

        .panel a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        .panel a:hover::after {
            width: 100%;
        }

        .section {
            background-color: #ffffff;
            color: #000435;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .section a {
            display: inline-block;
            background-color: orange;
            color: #000435;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .section a:hover {
            background-color: #000435;
            color: orange;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .panel h2 {
                font-size: 20px;
            }

            .panel a {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
<div class="container" style=" background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <h2>IQAC</h2>
                <a href="#">Annual Report 21-22</a>
                <a href="#">Annual Report 22-23</a>
                <a href="#">IQAC Meeting 1</a>
                <a href="#">IQAC Meeting 2</a>
                <a href="#">IQAC Meeting 3</a>
                <a href="#">IQAC Meeting 4</a>
                <a href="#">IQAC Report 22-23</a>
                <a href="#">Strategic Plan</a>
                <a href="#">Academic Calendar AU Planned and Executed 2022-2023</a>
                <a href="#">Academic Calendar JNTUK Planned and Executed 2022-2023</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="section">
                <a href="#">AQAR 22-23</a>
                <a href="#">Patents Published/Granted</a>
                <a href="#">ML Hackathon Data Sets</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional for responsiveness) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->





<?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>