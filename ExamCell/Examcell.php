<?php
include 'C:\xampp\htdocs\GVPCEW\header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Layout</title>
  <!-- Add Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .custom-table {
        border-collapse: separate; /* Ensures that cells are not collapsed into one */
        border-spacing: 10px; /* Adds gap between cells (you can adjust this value) */
        width: 100%;
    }

    /* Add border and spacing to the table cells */
    .custom-table td, .custom-table th {
      padding: 10px; /* Gap inside each cell */
    }

    /* Optional: Add shadow to the table */
    .custom-table {
      box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container-fluid" style="margin: 10px;">
    <div class="row">
      <!-- Left side: Card (30% width) -->
      <div class="col-md-4" >
      <div class="card text-white" style="background-color: #000435f1">
  <div class="card-body text-center border border-light">
    <h3 class="card-title">
        Member
    </h3>
    <img src="saiprasad.jpg" class="mx-auto d-block">
    <h6 class="card-title">Dr.K.L.Sai Prasad M.Sc.,Ph.D</h6>
    <p class="card-text">
      Associate Professor and Incharge
      <contact>8885043349</contact>
    </p> <!-- Decreased description size -->
    <div class="card-footer">
      <a href="#" class="btn btn-primary btn-sm btn-fixed">Profile</a>
    </div>
  </div>
</div>

        <!-- Below the card: Table -->
        <div class="mt-4">
          <table class="table custom-table" style="color:#000435f1; border: 1px solid #000435f1;">
          <h2 class="text-center mb-4" style="color:#000435f1; border: 1px solid #000435f1;">Exam Details</h2>
            <thead>
              <tr>
                <th scope="col">Exam Name</th>
                <th scope="col">Links</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td >4-2 Sup (R13 & R10) Exam Application Form_JUNE 2021</td>
                <td><a href="4-2 Sup (R13 & R10) Exam Application Form_JUNE 2021.pdf" target="new" class="btn btn-primary" download>Download PDF</a></td>
              </tr>
              <tr>
                <td>4-1 Adv Supply (R13 & R10) Application Form_June 2021</th>
                <td><a href="4-1 Adv Supply (R13 & R10) Application Form_June 2021.pdf" target="new" class="btn btn-primary" download>Download PDF</a></td>
              </tr>
              <tr>
                <td>3-2 Sup (R13 & R10) Exam Application Form_June 2021</th>
                <td><a href="3-2 Sup (R13 & R10) Exam Application Form_June 2021.pdf" target="new" class="btn btn-primary" download>Download PDF</a></td>
              </tr>
              <tr>
                <td>3-1 Sup (R13 & R10) Exam Application Form_June 2021</th>
                <td><a href="3-1 Sup (R13 & R10) Exam Application Form_June 2021.pdf" target="new" class="btn btn-primary" download>Download PDF</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Right side: Table (70% width) -->
      <div class="col-md-8">
        <table class="table table-bordered" style=" border: 1px solid #000435f1;">
        <h2 class="text-center mb-4" style="color:#000435f1; border: 1px solid #000435f1;">Exam Details</h2>
          <thead>
            <tr>
            <th>SI.NO</th>
                    <th>Release Date</th>
                    <th>Result Name</th>
                    <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <tr class="custom-row">
                    <td>1</td>
                    <td>2024-01-15</td>
                    <td>
                        3-2 (R20-R19-R16) Supply Exam Results_Dec-2023
                        
                        </td>
                    <td>
                        <a href="3-2 (R20-R19-R16) Supply Exam Results_Dec-2023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>2</td>
                    <td>2024-02-10</td>
                    <td>3-1 (R16-R19-R20) Regular and Supply Exam Results_Dec 2023</td>
                    <td>
                        <a href="3-1 (R16-R19-R20) Regular and Supply Exam Results_Dec 2023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>3</td>
                    <td>2024-03-05</td>
                    <td>2-1_2-2 and 3-2 Supply External Lab Exam Time tables_December 2023 Exams

                    </td>
                    <td>
                        <a href="2-1_2-2 and 3-2 Supply External Lab Exam Time tables_December 2023 Exams.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>4</td>
                    <td>2024-04-22</td>
                    <td>3-1 Regular and Supply External Lab Exam Time tables_December 2023 Exams</td>
                    <td>
                        <a href="3-1 Regular and Supply External Lab Exam Time tables_December 2023 Exams.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>5</td>
                    <td>2024-05-30</td>
                    <td>2-1 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS</td>
                    <td>
                        <a href="2-1 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>6</td>
                    <td>2024-05-30</td>
                    <td>2-2 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS</td>
                    <td>
                        <a href="2-2 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>7</td>
                    <td>2024-05-30</td>
                    <td>3-1 (R20-R19-R16) REGULAR & SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS</td>
                    <td>
                        <a href="3-1 (R16-R19-R20) Regular and Supply Exam Results_Dec 2023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>8</td>
                    <td>2024-05-30</td>
                    <td>3-2 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS</td>
                    <td>
                        <a href="3-2 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>9</td>
                    <td>2024-05-30</td>
                    <td>Result of III B.Tech II Semester (R13) Supplementary Examinations, July-2023</td>
                    <td>
                        <a href="Result of III B.Tech II Semester (R13) Supplementary Examinations, July-2023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>10</td>
                    <td>2024-05-30</td>
                    <td>Result of III B.Tech II Semester (R16) Supplementary Examinations, July-2023</td>
                    <td>
                        <a href="Result of III B.Tech II Semester (R16) Supplementary Examinations, July-2023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>11</td>
                    <td>2024-05-30</td>
                    <td>I YEAR B TECH II SEM END EXAM TIME TABLE - AU (2022 BATCH)</td>
                    <td>
                        <a href="2-1 (R20-R19-R16) SUPPLY THEORY EXAMS TIME TABLE_DEC 2023 EXAMS" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>12</td>
                    <td>2024-05-30</td>
                    <td>I YEAR B TECH II SEMESTER (2022 ADMITTED BATCH) MID-II EXAM TIME TABLE AUGUST 2023

                    </td>
                    <td>
                        <a href="I YEAR B TECH II SEMESTER (2022 ADMITTED BATCH) MID-II EXAM TIME TABLE AUGUST 2023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td>13</td>
                    <td>2024-05-30</td>
                    <td>3-2 (R20) External lab exam Timetables_All Branches_24062023</td>
                    <td>
                        <a href="3-2 (R20) External lab exam Timetables_All Branches_24062023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>  <tr class="custom-row">
                    <td>14</td>
                    <td>2024-05-30</td>
                    <td>2-2 (R20) External lab exam Timetables_All Branches_24062023

                    </td>
                    <td>
                        <a href="2-2 (R20) External lab exam Timetables_All Branches_24062023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>  <tr class="custom-row">
                    <td>15</td>
                    <td>2024-05-30</td>
                    <td>3-2_3-1_2-1_1-2 Supply External lab exam Timetables_All Branches_24062023</td>
                    <td>
                        <a href="3-2_3-1_2-1_1-2 Supply External lab exam Timetables_All Branches_24062023.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>  <tr class="custom-row">
                    <td>16</td>
                    <td>2024-05-30</td>
                    <td>I B TECH II SEMESTER (2022 ADMITTED BATCH) MID-I EXAM TIME TABLE</td>
                    <td>
                        <a href="I B TECH II SEMESTER (2022 ADMITTED BATCH) MID-I EXAM TIME TABLE.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr>  <tr class="custom-row">
                    <td>17</td>
                    <td>2024-05-30</td>
                    <td>3-2 (R20-R19-R16-R13) Regular & Supply theory Exam TT_July 2023 Exams

                    </td>
                    <td>
                        <a href="3-2 (R20-R19-R16-R13) Regular & Supply theory Exam TT_July 2023 Exams.pdf" target="new" class="btn btn-primary" download>Show</a>
                    </td>
                </tr> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php
include 'C:\xampp\htdocs\GVPCEW\footer.php';
?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
