
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "nss");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    $eid = $_POST['eid'];
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$eid')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<script type='text/javascript'>alert('image uploaded!')</script>";



header( "refresh:0;url=eventupdate.php" );
    }else{
      echo "<script type='text/javascript'>alert('image upload error!')</script>";



header( "refresh:0;url=eventupdate.php" );
    }
  }
 
?>