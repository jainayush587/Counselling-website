<?php
include 'db.php';

$coun3msg11=$_POST['coun3msg11'];
$coun3msg12=$_POST['coun3msg12'];

$coun3msg13=$_POST['coun3msg13'];

$coun3msg14=$_POST['coun3msg14'];

$coun3msg15=$_POST['coun3msg15'];

$coun3msg2=$_POST['coun3msg2'];

$sql = "INSERT INTO  coun3_msg (coun3msg11,coun3msg12,coun3msg13,coun3msg14,coun3msg15,coun3msg2)
VALUES ('$coun3msg11',,'$coun3msg12','$coun3msg13','$coun3msg14','$coun3msg15','$coun3msg2')";


if ($conn->query($sql) === TRUE) {
    echo "<br>Message has been entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<html>

<form action="display2.php">
<button type=submit value=submit>Back</button>
</form>
</html>