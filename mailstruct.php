
<?php
 
	 $name = $_POST['name'];
	 $msg = $_POST['msg'];
	  $MAIL = $_POST['email'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inform</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="istyles.css">
</style>
</head>
<body>

<form method="post" action="mail.php">
<input type="hidden" name="name" value="<?php echo $name; ?>"> </td>
<input type="hidden" name="email" value="<?php echo $MAIL; ?>"> </td> 
<input type="hidden" name="msg" value="<?php echo $msg; ?>"> </td> 


<section class="contact">
<div class="content">

<h2>NATIONAL SERVICE SCHEME</h2>
</div>
<div class="container">
<div class="contactInfo">
<div class="contactForm">
<form method="post" action="informprocess.php">
<h2>Reply To <?php echo $name; ?></h2>
<div class="inputBox">
<textarea required name="replay"></textarea>
<span>Type something...</span>
</div>
<div class="inputBox">
<input type="submit" name="save" value="SEND">

</div>
</div>
</form>
</div>
</div>

</section>
</body>
</html>

