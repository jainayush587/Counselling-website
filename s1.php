<html>
<head>
</head>
<body>
<br><br><br>
<form action="r1.php">
<button type=submit value=submit>Back</button>
</form>

<br><br>
<table align=center>
<tr><td><img src="rad.png" height="155 px" width="605px"></img></td></tr>
</table>

</body>
</html>
<?php
include 'db.php';


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $class = mysqli_real_escape_string($conn,$_POST['class']);
      $dept = mysqli_real_escape_string($conn,$_POST['dept']); 
      $sql = "SELECT * FROM student_data WHERE class = '$class' AND dept = '$dept' AND total>40";//group by rollnoand dept = '$dept'
      $result = mysqli_query($conn,$sql);      

      
      $count = mysqli_num_rows($result);


      
    //  if($count >=1){
		  // If result matched $myusername and $mypassword, table row must be 1 row
		  if($class == 'FE') 
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
		  else if ($class == 'SE')
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
		  
		  else if ($class == 'TE')
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
		  
		  else if ($class == 'BE')
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
		  else {
			$sql1 = "SELECT * FROM student_data WHERE total>40";//group by rollnoand dept = '$dept'
			$result1 = mysqli_query($conn,$sql1);  
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
			while($student=mysqli_fetch_assoc($result1))
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
	//  }
	 /* else {
			$sql1 = "SELECT * FROM student_data WHERE total>40";//group by rollnoand dept = '$dept'
			$result1 = mysqli_query($conn,$sql1);  
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
			while($student=mysqli_fetch_assoc($result1))
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
	  }*/
   }

?>
