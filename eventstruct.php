<!DOCTYPE html>
<html>
<head>
<title></title>
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
    </script>
</head>
	<meta charset="utf-8">
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
	<form action="eventprocess.php" method="post">
	<div class="wrapper">
		<h1>Create Event</h1>

		<div>
			<p>Event Type</p>
			<div class="custom_select">
            <select name="etype">
            <option class="list" >Regular Event</option>
  			<option class="list" >Camp Event</option>
            </select>
          </div>
          <br>
          <br>
<br>
<br>
          

		<div class="input-data">
			<input type="text" required name="ename" id="username" pattern="[a-zA-Z ]*" >
			<div class="underline"></div>
			<label>Event Name</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="edesc">
			<div class="underline"></div>
			<label>Event Description</label>
		</div><br>

		<div class="input-data">
			<input type="time" required name="stime">
			<div class="underline"></div>
			<label>Starting Time</label>
		</div><br>

		<div class="input-data">
			<input type="time" required name="etime">
			<div class="underline"></div>
			<label>Ending Time</label>
		</div><br>

		<div>
			<p>Batch</p>
			<div class="custom_select">
            <select name="batch" id="year"></select>
           
          </div></div>
          <br>
          <br>
<br>
<br>
<br>

          <div class="input-data">
			 <input id="txtdate" type="text" name="date">
			
			<label>Date</label>
		</div><br>
		<br>
		<br>

		<div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>

		<div >
			</form>
</body>
<script>
input.oninvalid = function(event) {
    event.target.setCustomValidity('NAME should only contain letters and Space');
}
</script>
<script>
var year = 2017;
var till = 2100;
var options = "";
for(var y=year; y<=till; y++){
Y=y+3;
  options += "<option>"+ y+"-"+Y+"</option>";
}
document.getElementById("year").innerHTML = options;
</script>
</html>