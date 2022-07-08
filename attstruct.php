
<?php
include_once 'database.php';
$eid = $_REQUEST['id'];
$batch = $_REQUEST['batch'];
$result1 = mysqli_query($conn,"SELECT * FROM student where view='0' and batch='$batch'");
 
?>
<form action="attprocess.php" method="post">
    <table border=1>
        <tbody>
            <tr>
                <td>S.I</td>
                <td>Roll No</td>
                <td>Student Name</td>
                <td>Attendance</td>
            </tr>

             

            <tr>
                  <?php
                  $i=1;
while($row = mysqli_fetch_array($result1)) 
{
?>
                <td>attendance_status[<?php echo $i; ?>]</td>
               <td><input name="roll_no[]" value="<?php echo $row["stid"]; ?>" /></td>

                                    <td> <?php echo $row["name"]; ?> </td>
              <td>
                    <label for="present0">
                        <input type="radio" id="present0" name="attendance_status[<?php echo $row["stid"]; ?>]" value="Present" > Present
                    </label>
                    <label for="absent0">
                        <input type="radio"  checked id="absent0" name="attendance_status[<?php echo $row["stid"]; ?>]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            ++$i;
            <?php
}
?>
    </table>
     
    <br/>
    <input type="submit" name="submit" value="Mark Attendance" />
</form