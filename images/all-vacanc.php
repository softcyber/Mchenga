<?php
session_start();
include('connection.php');
include("functions.php");
$user_data = check_signin($con);
$id = $user_data['user_id'];

$sql = "SELECT COUNT(*) AS total FROM (SELECT v.user_id,r.vacancy_id FROM vacancies v JOIN resumies r ON v.vacancy_id = r.vacancy_id WHERE v.user_id = '$id') as total";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$sql = "SELECT COUNT(*) AS total FROM vacancies";
$result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_assoc($result);

$sql = "SELECT COUNT(*) AS total FROM download_logs";
$result = mysqli_query($con,$sql);
$row2 = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
       <!-- <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>-->
        <div class="header-right">
        <span class="material-icons-outlined"><img src = ./images/services/cm.png alt = ></span>
          <span class="material-icons-outlined">Admin</span>
          <span class="material-icons-outlined">Dashboard</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined"></span> Bich Group
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined"></span> Dashboard
            </a>
          </li>
          
          <li class="sidebar-list-item">
            <a href="allUsers.php">
              <span class="material-icons-outlined"></span> Users
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="allVacanciesAdmin.php">
              <span class="material-icons-outlined"></span> Vacancies
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="summary.php">
              <span class="material-icons-outlined"></span>  Summary
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="account.php">
              <span class="material-icons-outlined"></span> Accounts
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="logout.php">
              <span class="material-icons-outlined"></span> Logout
            </a>
          </li>

        </ul>
      </aside>
      <!-- End Sidebar -->

      <main class="user-main-container">
        <div class="user-main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

     

        <?php 
$sql = "SELECT organization_name AS organization FROM users where organization_name = 'national bank'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$sql = "SELECT COUNT(*) AS total FROM (SELECT v.user_id,r.vacancy_id FROM vacancies v JOIN resumies r ON v.vacancy_id = r.vacancy_id WHERE v.position = 'Clerk') as total";
$result = mysqli_query($con,$sql);
$row1 = mysqli_fetch_assoc($result);

mysqli_close($con);
 
echo "<table border ='1'>";
echo"<tr>   <th>Organization Name </th>    <th>Total Downloads</th>  <th>Action</th>  </tr>";
echo"<tr><td>". $row['organization'] . "</td>      <td>". $row1['total'] . "</td>     <td><a class = 'btn_download' href = 'index.php'>See more</a></td> <tr>";
echo"</table>";


echo "<table border ='1'>";
echo"<tr>   <th>Organization Name </th>    <th>Total Downloads</th>  <th>Action</th>  </tr>";
echo"<tr><td>". $row['organization'] . "</td>      <td>". $row1['duty'] . "</td>     <td><a class = 'btn_download' href = 'index.php'>See more</a></td> <tr>";
echo"</table>";


echo "<table border ='1'>";
echo"<tr>   <th>Organization Name </th>    <th>Total Downloads</th>  <th>Action</th>  </tr>";
echo"<tr><td>". $row['organization'] . "</td>      <td>". $row1['duty'] . "</td>     <td><a class = 'btn_download' href = 'index.php'>See more</a></td> <tr>";
echo"</table>";
?>
<!--00000000000000000000-->


      </main>





      
    <script src="script.js"></script>
  </body>
</html>