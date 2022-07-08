<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin Dashboard</div>
      </a>

      <!-- Divider -->

         <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="contactview.php">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Mails</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="inform.php">
            <i class="fas fa-bullhorn"></i>
            <span>Post a message on page</span></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="notistruct0.php">
            <i class="fas fa-sms"></i>
            <span>Inform via e-mail</span></a>
          </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          STUDENT
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="adminaddstruct.php">
            <i class="fas fa-user-plus"></i>
            <span>Add Students</span></a>
          </li>


			<li class="nav-item">
          <a class="nav-link" href="adminviewtable.php">
            <i class="fas fa-eye"></i>
            <span>Registered Students</span></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="volunteers.php">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <span>Volunteers</span></a>
          </li>


<li class="nav-item">
          <a class="nav-link" href="selectbatch.php">
            <i class="far fa-bookmark"></i>
            <span>Waiting List</span></a>
          </li>


          <li class="nav-item">
          <a class="nav-link" href="eventviewtable.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Attendance</span></a>
          </li>

           <li class="nav-item">
          <a class="nav-link" href="selbatch.php">
            <i class="fas fa-clipboard-check"></i>
            <span>Selection Process</span></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="deletedtablestruct.php">
            <i class="fas fa-user-times"></i>
            <span>Removed students</span></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="ocreg.php">
            <i class="fa fa-toggle-on" aria-hidden="true"></i>
            <span>Open/Close registration</span></a>
          </li>

        <!-- Nav Item - Utilities Collapse Menu -->
       

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          EVENTS
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
          <a class="nav-link" href="eventstruct.php">
            <i class="far fa-calendar-alt"></i>
            <span>Add Event</span></a>
          </li>


        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="eventupdate.php">
            <i class="fas fa-eye"></i>
            <span>View Event</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="deletedevent.php">
              <i class="fas fa-trash"></i>
              <span>Removed Events</span></a>
            </li>

            <hr class="sidebar-divider">


                     <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              <span>Log out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                      <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>

                  <!-- Nav Item - Alerts -->
                 
                  <div class="topbar-divider d-none d-sm-block"></div>

                

            <div class="topbar-divider d-none d-sm-block"></div>


                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi,Admin!</span>
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

<script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Core plugin JavaScript-->
              
              <!-- Custom scripts for all pages-->
              <script src="js/sb-admin-2.min.js"></script>


            </body>

            </html>


<?php 
@ini_set("output_buffering", "Off");
@ini_set('implicit_flush', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('max_execution_time',1200);



include_once 'database.php';
$i = $_POST['i'];
$msg = $_POST['msg'];
if(isset($_POST['submit']))
{
echo"* MESSAGE SENDING STARTED<BR>DO NOT CLOSE OR REFRESH THE WINDOW *";

    foreach ($_POST['email'] as $id => $email)
    {

        $roll_no = $_POST['roll_no'][$id];
        $email = $_POST['email'][$id];
  	$name = $_POST['student_name'][$id];
	echo "-";
$to_email = $email;
$subject = "DO NOT REPLAY";
$body = "Hai $name \n$msg,\nDO NOT REPLAY";
$headers = "From: rajakumarynsscollege@gmail.com";
mail($to_email, $subject, $body, $headers);
	flush();
	ob_flush();  
 	sleep(2);

}
 echo"<h2><br>MESSAGE SENT SUCCESSFULLY TO $i PEOPLES<h2>";   
}
?>
