<?php
include 'db.php';

$sql1="SELECT * FROM filename where id=(select max(id) from filename)";
$record1=mysqli_query($conn,$sql1);
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['fn']."";
		}
?>