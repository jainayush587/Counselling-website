<?php
include 'db.php';


$coun1msg11=$_POST['coun1msg11'];
$coun1msg12=$_POST['coun1msg12'];

$coun1msg13=$_POST['coun1msg13'];

$coun1msg14=$_POST['coun1msg14'];

$coun1msg15=$_POST['coun1msg15'];

$coun1msg2=$_POST['coun1msg2'];

$sql = "INSERT INTO  coun1_msg (coun1msg11,coun1msg12,coun1msg13,coun1msg14,coun1msg15,coun1msg2)
VALUES ('$coun1msg11','$coun1msg12','$coun1msg13','$coun1msg14','$coun1msg15','$coun1msg2')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Message has been entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<html>

<form action="display1.php">
<button type=submit value=submit>Back</button>
</form>
<form action="homepage.php">

<button type="submit" value="submit" class="buttonfloat">Homepage</button>

</form>
</html>