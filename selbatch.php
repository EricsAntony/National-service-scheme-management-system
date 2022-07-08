<?php
session_start();
if(!isset($_SESSION["sess_user"])){
 header("Location: main2.php");
}
else
{
?>
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "nss";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
 ?>

<?php
include_once 'database.php';

$result1 = mysqli_query($conn,"SELECT DISTINCT batch FROM student where view = 0 order by stid desc ");
 
?>
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
      <div class="sidebar-heading">
        
      </div>
      
      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Mails</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item" href="contactview.php">Open mail</a>
            <a class="collapse-item" href="inform.php">Notify students</a>
            <a class="collapse-item" href="notistruct0.php">Inform via e-mail</a>
          </div>
        </div>
      </li>

         <hr class="sidebar-divider my-0">

          
      <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Student management</span>
        </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="adminaddstruct.php">Add students</a>
            <a class="collapse-item" href="adminviewtable.php">Registered students</a>
            <a class="collapse-item" href="volunteers.php">Volunteers</a>
            <a class="collapse-item" href="eventviewtable.php">Attendance</a>
            <a class="collapse-item" href="selectbatch.php">Waiting list</a>
          </div>
        </div>
      </li>
       <hr class="sidebar-divider my-0">

        <!-- Divider -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-clipboard-check"></i>
          <span>Event management</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="eventstruct.php">Add event</a>
            <a class="collapse-item" href="eventupdate.php">View event</a>
           
          </div>
        </div>
      </li>

      <hr class="sidebar-divider my-0">
<li class="nav-item">
        <a class="nav-link" href="ocreg.php">
          <i class="fa fa-toggle-on" aria-hidden="true"></i>
          <span>Open or close registration</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="selbatch.php">
          <i class="fas fa-clipboard-check"></i>
          <span>Selection procedure</span></a>
      </li>


        <!-- Divider -->
  <li class="nav-item">
        <a class="nav-link" href="deletedtablestruct.php">
          <i class="fas fa-trash"></i>
          <span>Deleted students</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="deletedevent.php">
          <i class="fas fa-trash"></i>
          <span>Deleted events</span></a>
      </li>
        <!-- Heading -->
<hr class="sidebar-divider my-0">

      
                      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
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
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search by batch..." aria-label="Search" aria-describedby="basic-addon2" id="myInput" onkeyup="myFunction()">
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

              <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table  id="selbatch" width="100%" cellspacing="5px" cellpadding="14px">
                  <thead>
                    <tr>
                      <th>Batch</th>
                      <th>Options</th>
                    </tr>
                    <tr>
     <?php
while($row = mysqli_fetch_array($result1)) 
{
?> <td> <?php echo $row["batch"]; ?>  </td>   
     
 
  <td><a href="testrun.php?id=<?php echo $row["batch"]; ?>"><i class="fas fa-clipboard-check" title="sort list"></i></a>
 <br> </tr>  
<?php
}
?>
 </table>

                  </thead>
                  <tfoot>
              <!-- Bootstrap core JavaScript-->
              
             
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>



            </body>
            <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("selbatch");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

            </html>
               <?php
          }
            ?>