
<?php
session_start();
if(!isset($_SESSION["sess_user1"])){
 header("Location: main2.php");
}
else
{
?><?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "nss";
$l = "Present"; 
$k = 0;
$t = 0;
$p = 0;
$s = 0;
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
 ?>

<?php

$email=$_SESSION["sess_user1"];

include_once 'database.php';

$result1 = mysqli_query($conn,"SELECT * FROM student,event,attendance where email='$email' and attendance.stid=student.stid and attendance.eventid=event.eid and event.view=0 and student.status=1");
 
?>
 <?php 

  $sql = "select * from noti order by slno desc";
  $rs = mysqli_query($conn, $sql);
  //get row
  $fetchRow1 = mysqli_fetch_assoc($rs);
 $sql2 = "select * from student where email='$email'";
  $rs2 = mysqli_query($conn, $sql2);
  //get row
  $fetchRow = mysqli_fetch_assoc($rs2); 
  ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="student.php?email=<?php echo $email;?>">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3"> Student Home</div>
      </a>

      <!-- Divider -->

         <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
           <li class="nav-item">
        <a class="nav-link" href="stedit.php?email=<?php echo $email; ?>">
          <i class="fas fa-pencil-alt"></i>
          <span>Update your details</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="stattendance.php?email=<?php echo $email; ?>">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <span>View attendance details</span></a>
          </li>

<li class="nav-item">
        <a class="nav-link" href="contact.php?email=<?php echo $email;?>">
          <i class="fas fa-pencil-alt"></i>
          <span>Contact Admin</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->


                      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
            <!-- Divider -->
          

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
            

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           

                  <!-- Nav Item - Alerts -->
                 
                  <div class="topbar-divider d-none d-sm-block"></div>
                             <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
          Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $fetchRow1['date']?></div>
                    <span class="font-weight-bold"><?php echo $fetchRow1['message']?></span>
                  </div>
                </a>


                

            <div class="topbar-divider d-none d-sm-block"></div>


                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi,<?php echo $fetchRow['name']; ?>!</span>
                      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                     
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>

                </ul>

              </nav>
               <div class="container-fluid">

               	  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Attendance</h6>
              <a href="markviewbybatch.php" style="float: right; text-decoration: none;"></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="Registered_Students" width="100%" cellspacing="0" cellpadding="14" >
                  <thead>
                    <tr>
                      <th>Sl.no</th>
                     
                      <th>Event name</th>
                      <th>Event date</th>
                      <th>Attendance status</th>
                    </tr>
                    <tr>
    <?php
    $i=0;
while($row = mysqli_fetch_array($result1)) 
{
?> 
<td><?php    ++$i;echo $i; ?></td>  
   
  <td> <?php echo $row["ename"]; ?>  </td> 
  <td> <?php echo $row["date"]; ?>  </td> 
  <td> <?php echo $row["attendance"]; ?>  </td> <?php if($row["attendance"]==$l)
{
++$k;
}?>

  </tr>  
<?php
}
?>
<tr><td></td>
<td></td><td>Attendance Percentage</td>
<td><?php 
if($i==0)
{
  $i=1;
}
$s=$k/$i; $p=$s*100;echo $p;echo "%"; ?></td>
</tr>
  </table>



              <!-- Bootstrap core JavaScript-->
              <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Core plugin JavaScript-->
              
              <!-- Custom scripts for all pages-->
              <script src="js/sb-admin-2.min.js"></script>


            </body>

            </html>
<?php
}
?>