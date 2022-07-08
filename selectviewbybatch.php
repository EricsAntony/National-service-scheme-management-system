<?php

$batch = $_POST['batch'];

include_once 'database.php';

$result1 = mysqli_query($conn,"SELECT * FROM student where status=1 and batch='$batch' order by mark desc");
 
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
<style>
  a{
    display: inline-block;
    text-decoration: none;
    color: black;
    padding: 5px 20px;
    border:1px solid transparent;
    transition: 0.3s ease;
    float: right;
  }
  a:hover{
    color: #fff;
  }
}
</style>
</head>
<body id="page-top">
  <a href="main2.php"><h5 class="m-0 font-weight-bold text-primary">Home</h5></a>
	<h1 align="center">Selected NSS volunteers</h1>
	 <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Volunteers</h6><br>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search by name..." aria-label="Search" aria-describedby="basic-addon2" id="myInput" onkeyup="myFunction()">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" width="100%" cellspacing="0" cellpadding="14">
                  <thead>
                    <tr>
                      <th>Sl.no</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Mark</th>
                    </tr>
                    <tr>
    <?php
    $i=0;
while($row = mysqli_fetch_array($result1)) 
{
?><td><?php    ++$i;echo $i; ?></td>
 <td> <?php echo $row["stid"]; ?>  </td>   
     <td> <?php echo $row["name"]; ?> </td>
 <td> <?php echo $row["dept"]; ?>  </td>
 <td> <?php echo $row["mark"]; ?>  </td>      
  </tr>  
<?php
}
?>
  </table>


</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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