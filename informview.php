<?php
$servername='localhost';
$username='root';
$password='';
$dbname='nss';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$result1 = mysqli_query($conn,"SELECT * FROM noti order by slno desc");
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
</style>

</head>

<body id="page-top">
  <a href="main2.php"><h5 class="m-0 font-weight-bold text-primary">Home</h5></a>
	<h1 align="center">Message from the admin</h1>
	<br>

              <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Announcements</h6>
                <div class="inputfield">
                  <br>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" width="100%" cellspacing="0" cellpadding="40" >
                  <thead>
                    <tr>
                      
                      <th>Date</th>
                      <th>Message</th>
                    </tr>
                    <tr>
    <?php
          $i=0;
while($row = mysqli_fetch_array($result1)) 
{
?> 
  
     <td> <?php echo $row["date"]; ?> </td>
 <td> <?php echo $row["message"]; ?>  </td> 
  </tr> 

<?php
}
?>
  </table>
</html>