<html>
<head>
<title>DBIT-Counselling </title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
	<style type="text/css">


		hr{
			border:0.1px solid steelblue;
		}


		header{
				background:steelblue;
			}
      .mySlides {display:none;}

		blockquote{
				margin-left:20%;
				margin-right:20%;
		    	padding: 5px;
			    background-color:steelblue;
		    	border-left: 10px solid black;
			}
		input[type=submit] {
				background-color: steelblue;
				color: white;
				padding: 5px 8px;
				margin: 4px 0;
				border: none;
				border-radius: 3px;
				cursor: pointer;
			}

			input[type=submit]:hover {
				background-color:dark blue;
			}
			fieldset{
				margin-left: 25%;
				margin-right:25%;
				display: block;
				width: 50%;
				box-shadow: 2px solid grey;

			}
			h2 , h3{
				font-family: serif;
			}
			a{
				text-decoration: none;
				color:black;
			}

      ul{
				list-style-type: none;
				margin: 2;
				padding: 2;
				overflow: hidden;
				background-color:steelblue;
				/*background:#e67e22;*/
			}


			li{
        float: left;
        border-right:0px solid #161F41;
			}
			li a{
				display: block ;
				color: white;
				text-align: right;
				padding: 10px;
				text-decoration:none;

			}
			li a:hover:not(.active){
				background-color:#161F41;
				text-decoration:none;
			}
      .active {
    background-color:#161F41 ;
      }

      li:last-child {
    border-right: none;
      }


      body {
        background-color: white ;
        background-repeat: no-repeat;
     }

     div.gallery {
    border: 1px solid #ccc;
    float: left;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
   
}

div.desc {
    padding: 15px;
    text-align: center;
}


	</style>
</head>
<body background-color="white">
	<header>
	<table align="center" width=100%>
		<tr>
			<td ><center><img src="dbitlogo.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></center></td>
			<td><font size="6" color="white"><b><center>Don Bosco Institute Of Technology</center></b></font>
			    <center><font size="5" color="white"><b>COUNSELLING DEPARTMENT</b></font></center>
			</td>
		</tr>
	</table>
	</header>
  <br>

  <ul id="gp" align="center">
          <li><a href="homepage.php">Home</a></li>
	  <li><a href="#">About Us</a></li>
          <li><a href="counselfinal.html">Take a test !</a></li>
          <li><a href="info.html">Food for thought ! </a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li style="float:right"><a href="rad1.php">Admin</a></li>
        </ul>
	<br>
<center>
<?php
include 'db.php';
echo "<br>Thanks for taking the test!<br>";
$FirstName = $stdId = $testdate = $Class = $Dept = $Email = $Phone = $Rollno = $rad1 = $rad2 = $rad3 = $rad4 = $rad5 = $rad6 = $rad7 = $rad8 = $rad9 = $rad10 = $rad11 = $rad12 = $rad13 = $rad14 = $rad15 = $rad16 = $rad17 = $rad18 = $rad19 = $rad20 = $rad21 = "" ;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
$Mentor=$_POST['mname'];
$FirstName=$_POST['fname'];
$stdId=$_POST['stdId'];
$testdate=test_input($_POST['testdate']);
$Class=test_input($_POST['class']);
$Dept=test_input($_POST['dept']);
$Email=test_input($_POST['email']);
$Phone=test_input($_POST['phone']);
$Rollno=test_input($_POST['rollno']);
$rad1=test_input($_POST["one"]);
$rad2=test_input($_POST['two']);
$rad3=test_input($_POST['three']);
$rad4=test_input($_POST['four']);
$rad5=test_input($_POST['five']);
$rad6=test_input($_POST['six']);
$rad7=test_input($_POST['seven']);
$rad8=test_input($_POST['eight']);
$rad9=test_input($_POST['nine']);
$rad10=test_input($_POST['ten']);
$rad11=test_input($_POST['eleven']);
$rad12=test_input($_POST['twelve']);
$rad13=test_input($_POST['thirteen']);
$rad14=test_input($_POST['fourteen']);
$rad15=test_input($_POST['fifteen']);
$rad16=test_input($_POST['sixteen']);
$rad17=test_input($_POST['seventeen']);
$rad18=test_input($_POST['eighteen']);
$rad19=test_input($_POST['nineteen']);
$rad20=test_input($_POST['twenty']);
$rad21=test_input($_POST['twentyone']);



$s_total = $rad1 + $rad6 + $rad8 + $rad11 + $rad12 + $rad14 + $rad18;
$a_total = $rad2 + $rad4 + $rad7 + $rad9 + $rad15 + $rad19 + $rad20;
$d_total = $rad3 + $rad5 + $rad10 + $rad13 + $rad16 + $rad17 + $rad21;

$total = $s_total + $a_total + $d_total;

$sql = "INSERT INTO  student_data (mname,fname,stdId,testdate, class , dept, email, phone, rollno, one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve, thirteen, fourteen, fifteen, sixteen, seventeen, eighteen, nineteen, twenty, twentyone, stotal, atotal, dtotal,total)
VALUES ('$Mentor','$FirstName','$stdId','$testdate', '$Class', '$Dept', '$Email', '$Phone', '$Rollno', '$rad1','$rad2','$rad3','$rad4','$rad5','$rad6','$rad7','$rad8', '$rad9','$rad10','$rad11','$rad12','$rad13','$rad14','$rad15','$rad16','$rad17','$rad18','$rad19','$rad20','$rad21','$s_total', '$a_total', '$d_total','$total')";
// there is possibility of getting error in if condition
}
if ($conn->query($sql) === TRUE) {
    echo "<br>Your score has been recorded succesfully<br>";
    
    // *CODE FOR DISPLAYING DIFFERENT MESSAGES TO DIFFERENT MARKS*


	if($total<=15)
    {
    	$sql="SELECT * from coun1_msg where id=(select max(id) from coun1_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun1msg11']."</td>";
			echo" <br> ";
		}
		$sql1="SELECT * from coun2_msg where id=(select max(id) from coun2_msg)";
		$record1=mysqli_query($conn,$sql1);
		
		while($slot1=mysqli_fetch_assoc($record1))
    	{
			echo "<td>".$slot1['coun2msg11']."</td>";
			echo" <br> ";
		}	
    }


    if($total>15 && $total<=20)
    {
    	$sql="SELECT * from coun1_msg where id=(select max(id) from coun1_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun1msg12']."</td>";
			echo" <br> ";
		}
		$sql1="SELECT * from coun2_msg where id=(select max(id) from coun2_msg)";
		$record1=mysqli_query($conn,$sql1);
		
		while($slot1=mysqli_fetch_assoc($record1))
    	{
			echo "<td>".$slot1['coun2msg12']."</td>";
			echo" <br> ";
		}	
			
    }
    if($total>20&&$total<=29)
    {
    	$sql="SELECT * from coun1_msg where id=(select max(id) from coun1_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun1msg13']."</td>";
			echo" <br> ";
		}
		$sql1="SELECT * from coun2_msg where id=(select max(id) from coun2_msg)";
		$record1=mysqli_query($conn,$sql1);
		
		while($slot1=mysqli_fetch_assoc($record1))
    	{
			echo "<td>".$slot1['coun2msg13']."</td>";
			echo" <br> ";
		}	
			
    }

	if($total>29 && $total<=40)
    {
    	$sql="SELECT * from coun1_msg where id=(select max(id) from coun1_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun1msg14']."</td>";
			echo" <br> ";
			
		}
		echo" <br> ";
		
		$sql="SELECT * from coun2_msg where id=(select max(id) from coun2_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun2msg14']."</td>";
			echo" <br> ";
		}	
			
    }

	 if($total>41)
    {
    	
		$sql="SELECT * from coun1_msg where id=(select max(id) from coun1_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun1msg15']."</td>";
			echo" <br> ";
			
		}
		
		
		/*
		$sql="SELECT * from coun2_msg where id=(select max(id) from coun2_msg)";
		$record=mysqli_query($conn,$sql);
		
		while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<td>".$slot['coun2msg15']."</td>";
			echo" <br> ";
		}	
		*/
    }

    //echo "Please meet your counsellor ---- on ------ at ------";
    //if($Dept=="IT" or $Dept=="CO" )
    {
    	echo "<br>Please meet your counsellor <br><b> Mentor_Name on:</b><br><br>";
    	$sql="SELECT * FROM coun_1 where id=(select max(id) from coun_1)";
    	$record=mysqli_query($conn,$sql);



    	while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<tr>";
			echo "<td>".$slot['day_1']."</td>";
			echo":     ";
			echo"from: ";
			echo "<td>".$slot['time_11']."</td>";
			echo "<td>".$slot['ampm1']."</td>";
			echo"  to:   ";
			echo "<td>".$slot['time_21']."</td>";
			echo "<td>".$slot['pmam1']."</td><br>";
			
			

			echo "<td>".$slot['day_2']."</td>";
			echo":     ";
			echo"from: ";
			echo "<td>".$slot['time_12']."</td>";
			echo "<td>".$slot['ampm2']."</td>";
			echo"  to:   ";
			echo "<td>".$slot['time_22']."</td>";
			echo "<td>".$slot['pmam2']."</td><br>";


			echo "<td>".$slot['day_3']."</td>";
			echo":     ";
			echo"from: ";
			echo "<td>".$slot['time_13']."</td>";
			echo "<td>".$slot['ampm3']."</td>";
			echo"  to:   ";
			echo "<td>".$slot['time_23']."</td>";
			echo "<td>".$slot['pmam3']."</td><br>";
			echo "</tr>";
		}
			
    }
    echo "Take prior appointment via phone or email.<br>Phone number:1234567<br>email: email_id ";
   
   // else
   {
		echo "<br><br>OR<br>";
    	echo "<br><b>Mentor's name on </b><br><br>";
    	$sql="SELECT * FROM coun_2 where id=(select max(id) from coun_2)";
    	$record=mysqli_query($conn,$sql);
    	while($slot=mysqli_fetch_assoc($record))
    	{
			echo "<tr>";
			echo "<td>".$slot['day_1']."</td>";
			echo":     ";
			echo"from: ";
			echo "<td>".$slot['time_11']."</td>";
			echo "<td>".$slot['ampm1']."</td>";
			echo"  to:   ";
			echo "<td>".$slot['time_21']."</td>";
			echo "<td>".$slot['pmam1']."</td><br>";
			
			

			echo "<td>".$slot['day_2']."</td>";
			echo":     ";
			echo"from: ";
			echo "<td>".$slot['time_12']."</td>";
			echo "<td>".$slot['ampm2']."</td>";
			echo"  to:   ";
			echo "<td>".$slot['time_22']."</td>";
			echo "<td>".$slot['pmam2']."</td><br>";


			echo "<td>".$slot['day_3']."</td>";
			echo":     ";
			echo"from: ";
			echo "<td>".$slot['time_13']."</td>";
			echo "<td>".$slot['ampm3']."</td>";
			echo"  to:   ";
			echo "<td>".$slot['time_23']."</td>";
			echo "<td>".$slot['pmam3']."</td><br>";
			echo "</tr>";
		}
		echo "Take prior appointment via phone or email.<br>Phone number:1234567<br>email:email_id";	
    }

    
} 
else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}

$conn->close();


echo"</table>";
?>
</center>
</body>
</html>
