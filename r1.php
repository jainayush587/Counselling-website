<html>
<head>
</head>
<body>
<br><br><br>
<form action="display1.php">
<button type=submit value=submit>Back</button>
</form>

<form method = "post" action="s1.php"><br><br>
<table>
<tr>
						<th>Class</th>
						<td>:</td>
						<td><select name="class" id="class">
							<option value="select-class" selected>--Select Class--</option>
							<option value="FE" >FE</option>
							<option value="SE" >SE</option>
							<option value="TE" >TE</option>
							<option value="BE" >BE</option>
							<option value="others" >OTHERS</option>
						</select></td>
						</tr>

						<tr>
						<th>Department</th>
						<td>:</td>
						<td><select name="dept" id="dept">
							<option value="I" selected>--Select Dept--</option>
							<option value="IT">Information Technology</option>
							<option value="CO">Computer Science</option>
							<option value="EX">Electronics And Telecommunication</option>
							<option value="ME">Mechanical</option>
							<option value="others" >OTHERS</option>
						</select>
						</tr>
<tr>
<td>
<!--<button type="submit" value="submit">Click to find out students with severe problems</button>-->
</td>
</tr>
</table>
<table align=center>
<tr><td><img src="rad.png" height="155 px" width="605px"></img></td></tr>
<br>
<!--<form action="s1.php" method="post">-->
<button type="submit" value="submit">Click to find out students with severe problems</button>
</table>
</form>
</body>
</html>
<?php
include 'db.php';


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $class = mysqli_real_escape_string($conn,$_POST['class']);
      $dept = mysqli_real_escape_string($conn,$_POST['dept']); 
      $sql = "SELECT * FROM student_data WHERE class = '$class' AND dept = '$dept' ";//group by rollnoand dept = '$dept'
      $result = mysqli_query($conn,$sql);      

      
      $count = mysqli_num_rows($result);


      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count >= 1) 
      {
      	echo"<table rules=all border=solid>";
        echo"<tr >";
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
