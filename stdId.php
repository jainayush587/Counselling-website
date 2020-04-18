
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br><br><br>
<form action="display1.php">
<button type=submit value=submit>Back</button>
</form>

<form action="homepage.php">
<button type=submit value=submit>HomePage</button>
</form>

<form name="message" method="post" action="stdrecord.php">
<textarea name="std_records" id="std_records">
</textarea>
<<table>
<tr>
	<th>Enter Student Id</th>
	<td>:</td>
		<td>
		<input type='text' name="stdID1" id="stdID1">	</input>
		</td>
</tr>


</table>
<button type=submit value=Submit >Click to upload record</button>
</form>

<!--<form method = "post" action="stdId.php"><br><br>
<table>
<tr>
	<th>Enter Student Id</th>
	<td>:</td>
		<td>
		<input type='text' name="stdID" id="stdID">	</input>
		</td>
</tr>
<button type="submit">Click to find out particular student history</button>
</table>
</form>-->

<?php
include 'db.php';

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $stdID = mysqli_real_escape_string($conn,$_POST['stdID']);
		
      $sql = "SELECT * FROM student_data WHERE stdId = '$stdID' ";
      $result = mysqli_query($conn,$sql);  
	  
      $count = mysqli_num_rows($result);
	  
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count >= 1) 
      {
      	echo"<table rules=all border=solid>";
        echo"<tr >";
		echo"<th>Test Date</th>";
        echo"<th>Rollno</th>";
		echo"<th>Name</th>";
		echo"<th>Class</th>";
		echo"<th>Department</th>";
		echo"<th>Email</th>";
		echo"<th>Contact</th>";
		
		echo"<th>Q1</th>";
		echo"<th>Q2</th>";
		echo"<th>Q3</th>";
		echo"<th>Q4</th>";
		echo"<th>Q5</th>";
		echo"<th>Q6</th>";
		echo"<th>Q7</th>";
		echo"<th>Q8.</th>";
		echo"<th>Q9</th>";
		echo"<th>Q10</th>";
		echo"<th>Q11</th>";
		echo"<th>Q12</th>";
		echo"<th>Q13</th>";
		echo"<th>Q14</th>";
		echo"<th>Q15</th>";
		echo"<th>Q16</th>";
		echo"<th>Q17</th>";
		echo"<th>Q18</th>";
		echo"<th>Q19</th>";
		echo"<th>Q20</th>";
		echo"<th>Q21</th>";
		echo"<th>S</th>";
		echo"<th>A</th>";
		echo"<th>D</th>";
		echo"<th>T</th>";
		echo"</tr><br>";
		while($student=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td><b>".$student['testdate']."</b></td>";
			echo "<td><b>".$student['rollno']."</b></td>";
			echo "<td>".$student['fname']."</td>";
			echo "<td>".$student['class']."</td>";
			echo "<td>".$student['dept']."</td>";
			echo "<td>".$student['email']."</td>";
			echo "<td>".$student['phone']."</td>";

			echo "<td>".$student['one']."</td>";
			echo "<td>".$student['two']."</td>";
			echo "<td>".$student['three']."</td>";
			echo "<td>".$student['four']."</td>";
			echo "<td>".$student['five']."</td>";
			echo "<td>".$student['six']."</td>";
			echo "<td>".$student['seven']."</td>";
			echo "<td>".$student['eight']."</td>";
			echo "<td>".$student['nine']."</td>";
			echo "<td>".$student['ten']."</td>";
			echo "<td>".$student['eleven']."</td>";
			echo "<td>".$student['twelve']."</td>";
			echo "<td>".$student['thirteen']."</td>";
			echo "<td>".$student['fourteen']."</td>";
			echo "<td>".$student['fifteen']."</td>";
			echo "<td>".$student['sixteen']."</td>";
			echo "<td>".$student['seventeen']."</td>";
			echo "<td>".$student['eighteen']."</td>";
			echo "<td>".$student['nineteen']."</td>";
			echo "<td>".$student['twenty']."</td>";
			echo "<td>".$student['twentyone']."</td>";
			echo "<td>".$student['stotal']."</td>";
			echo "<td>".$student['atotal']."</td>";
			echo "<td>".$student['dtotal']."</td>";
			echo "<td>".$student['total']."</td>";
			echo "</tr><br>";
		}
		echo"</table>";
	exit;
		
      }
      else 
      {
         echo $error="Data not available";
      }
   }

?>

</body>
</html>