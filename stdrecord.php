<?php
include 'db.php';
      // username and password sent from form 
/*if(isset($_POST['stdId'])){
	$stdrecords=$_POST['std_records'];
	$stdID=$_POST['stdId'];*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $stdID1 = mysqli_real_escape_string($conn,$_POST['stdID1']);
		$stdrecords=$_POST['std_records'];
$sql = "UPDATE student_data SET std_records = '$stdrecords' WHERE stdId='$stdID1' ";
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "<br>Message has been entered successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
	<!DOCTYPE html>
	<html>
	<body>
	<form action="stdId.php">
	<button type=submit value=submit>Back</button>
	</form>
	</body>
	</html>