<?php
include 'db.php';

	

$day1=$_POST['day1'];
$day2=$_POST['day2'];
$day3=$_POST['day3'];
$time11=$_POST['time11'];
$ampm1=$_POST['ampm1'];
$time12=$_POST['time12'];
$ampm2=$_POST['ampm2'];

$time13=$_POST['time13'];
$ampm3=$_POST['ampm3'];

$time21=$_POST['time21'];
$pmam1=$_POST['pmam1'];

$time22=$_POST['time22'];
$pmam2=$_POST['pmam2'];

$time23=$_POST['time23'];
$pmam3=$_POST['pmam3'];


$sql = "INSERT INTO  coun_2 (day_1,day_2,day_3,time_11,ampm1,time_12,ampm2,time_13,ampm3,time_21,pmam1,time_22,pmam2,time_23,pmam3)
VALUES ('$day1', '$day2', '$day3','$time11','$ampm1', '$time12','$ampm2', '$time13','$ampm3', '$time21','$pmam1', '$time22','$pmam2', '$time23','$pmam3')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Timeslot has been entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<html>

<form action="display2.php">
<button type=submit value=submit>Back</button>
</form>
</html>