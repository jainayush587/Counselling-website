<?php
include 'db.php';

	//echo "<br>Connected successfully<br>";

	$sql="SELECT * FROM student_data";
	$record=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>DBIT-Counselling </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>

		.buttonfloat{
			float:right;
		}

		hr{
			border: 0.1px solid steelblue;
		}

		img {
    			 float: right;
   			 margin: 0 0 10px 10px;
			}
		.imgalign{
			float: left;
   			 margin: 10px 10px 10px 10px;
		
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
		/*fieldset{
				margin-left: 0%;
				margin-right:5%;
				display: block;
				width: 100%;
				box-shadow: 2px solid grey;

			}*/
			
			.f1{
				
				margin-left: 10%;
				margin-right:10%;
				display: block;
				width: 100%;
				box-shadow: 2px solid grey;
			}
			
			
		.allign{

				margin-left: 10%;
				margin-right:10%;
				display: block;
				width: 100%;
				box-shadow: 2px solid grey;

			}
			.container{
				margin-left: 0%;
				margin-right:10%;
				display: block;
				width: 100%;
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
        		border-right:1px solid #161F41;
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
    				border-right: none;}

      		body {
			width:100%;
        		background-color:white;
        		background-repeat: no-repeat;
     			}


		/*body{

			background-color: steelblue;
			}*/
		fieldset{
			background-color: white;
			}

			.radhika{
				border: 1px solid black;

			}
	
</style>
</head>
<body>
<fieldset>
<header>
	<table align="center">
		<tr>
			<td><img src="dbitlogo.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></td>
			<td><font size="6" color="white">DON BOSCO INSTITUTE OF TECHNOLOGY</font><br>
			    <center><font size="6" color="white">COUNSELLING DEPARTMENT</font></center>
			</td>
		</tr>
	</table>
</header><br><br>
<hr><br>

<form action="logout.php">

<button type="submit" value="submit" class="buttonfloat">Logout</button>

</form>

</fieldset>
<fieldset class="f1">
<form name="time-slot" method="post" action="d1.php">

<h3>Enter the time-slot when you are available :</h3><br>
<table align="center" cellspacing="20" width=100%>

<tr>
<th>
<b>Day</b></th>
<td>:</td>
<td><select name="day1" id="day1">
							<option value="1" selected>-------Select Day--------</option>
							<option value="MON">Monday</option>
							<option value="TUES">Tuesday</option>
							<option value="WED">Wednesday</option>
							<option value="THURS">Thursday</option>
							<option value="FRI">Friday</option>
						</select><br></td>

<th>
<b>Day</b></th>
<td>:</td>
<td><select name="day2" id="day2">
							<option value="1" selected>-------Select Day--------</option>
							<option value="MON">Monday</option>
							<option value="TUES">Tuesday</option>
							<option value="WED">Wednesday</option>
							<option value="THURS">Thursday</option>
							<option value="FRI">Friday</option>
						</select><br></td>


<th>
<b>Day</b></th>
<td>:</td>
<td><select name="day3" id="day3">
							<option value="1" selected>-------Select Day--------</option>
							<option value="MON">Monday</option>

							<option value="TUES">Tuesday</option>
							<option value="WED">Wednesday</option>
							<option value="THURS">Thursday</option>
							<option value="FRI">Friday</option>
						</select><br></td>





</tr>

<tr>
<th>
<b>From </b></th>

<td>:</td>
<td><input type="text" name="time11" id="time11" data-uk-timepicker><br>
<select name="ampm1" id="ampm1">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select><br></td>

<th>
<b>From </b></th>
<td>:</td>
<td><input type="text" name="time12" id="time12" data-uk-timepicker><br><select name="ampm2" id="ampm2">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select><br></td>

<th>
<b>From </b></th>
<td>:</td>
<td><input type="text" name="time13" id="time13" data-uk-timepicker><br>
<select name="ampm3" id="ampm3">
							<option value="AM">AM</option>

							<option value="PM">PM</option>
						</select><br></td>
</tr>

<tr>
<th>
<b>To</b></th>
<td>:</td>
<td><input type="text" name="time21" id="time21" data-uk-timepicker><br>
<select name="pmam1" id="pmam1">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select><br></td>
<th>
<b>To</b></th>
<td>:</td>
<td><input type="text" name="time22" id="time22" data-uk-timepicker><br>
<select name="pmam2" id="pmam2">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select><br></td>

<th>
<b>To</b></th>
<td>:</td>
<td><input type="text" name="time23" id="time23" data-uk-timepicker><br>
<select name="pmam3" id="pmam3">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select><br></td>
</tr>



</table><br>
<center><button type=submit value=Submit >Click to upload Time</button></center><br><br>
</form>
<br>

<form method = "post" action="r1.php">

<h3>Select the Department and Class of Student :</h3><br>


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

						</select></td>

						</tr>

</table><br>

<button type=submit value=Submit >OK</button><br><br>

</form>
</fieldset>


<form method = "post" action="stdId.php"><br><br>
<table>
<tr>
	<th>Enter Student Id</th>
	<td>:</td>
		<td>
		<input type='text' name="stdID" id="stdID">	</input>
		</td>
</tr>


</table><br>
<button type="submit">Click to find out particular student history</button>
</form>
</fieldset>
<br>
<table align=center>
<tr><td><img src="rad.png" height="155 px" width="605px"></img></td></tr>
</table>

<?php
$sql1="SELECT * FROM coun1_msg where id=(select max(id) from coun1_msg)";
$record1=mysqli_query($conn,$sql1);
?>
<br><br>
<form name="message" method="post" action="a1.php">
<table align=center>

<tr>
<td>Enter message to be displayed to normal students:</td><td>:</td><td>
<textarea name="coun1msg11" id="coun1msg11">			
<?php
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['coun1msg11']."";
		}
?>
</textarea></td>
</tr>

<tr>
<td>Enter message to be displayed to students with mild depression: </td><td>:</td><td>
<textarea name="coun1msg12" id="coun1msg12">
<?php
$sql1="SELECT * FROM coun1_msg where id=(select max(id) from coun1_msg)";
$record1=mysqli_query($conn,$sql1);
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['coun1msg12']."";
		}
?>
</textarea></td>
</tr>

<tr>
<td>Enter message to be displayed to students with moderate depression: </td><td>:</td><td><textarea name="coun1msg13" id="coun1msg13">
<?php
$sql1="SELECT * FROM coun1_msg where id=(select max(id) from coun1_msg)";
$record1=mysqli_query($conn,$sql1);
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['coun1msg13']."";
		}
?>
</textarea></td>
</tr>

<tr>
<td>Enter message to be displayed to students with severe depression: </td><td>:</td><td><textarea name="coun1msg14" id="coun1msg14">
<?php
$sql1="SELECT * FROM coun1_msg where id=(select max(id) from coun1_msg)";
$record1=mysqli_query($conn,$sql1);
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['coun1msg14']."";
		}
?>
</textarea></td>
</tr>

<tr>
<td>Enter message to be displayed to students with extremely severe depression: </td><td>:</td><td><textarea name="coun1msg15" id="coun1msg15">
<?php
$sql1="SELECT * FROM coun1_msg where id=(select max(id) from coun1_msg)";
$record1=mysqli_query($conn,$sql1);
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['coun1msg15']."";
		}
?>
</textarea></td>
</tr>


<tr>
<td>Enter message for students on special occassions </td><td>:</td><td><textarea name="coun1msg2" id="coun1msg2">
<?php
$sql1="SELECT * FROM coun1_msg where id=(select max(id) from coun1_msg)";
$record1=mysqli_query($conn,$sql1);
while($student=mysqli_fetch_assoc($record1))
		{
			echo "".$student['coun1msg2']."";
		}
?>
</textarea></td>
</tr>
</table>
<BR>
<center><button type=submit value=Submit >Click to upload message</button></center>

</form><br><br>

<center>
<form action="upload.php" method="post" enctype="multipart/form-data">


    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Upload File" name="submit">
</form>
</center>


  <br>		<center>
		<blockquote align="center">
						<h3><span><strong><span">Test Results</span></strong></span></h3>
					</blockquote><br>
					

	<form action="delete.php" name="multipledeletion" method="post">
<div class="container">
        <!-- Deletion Button -->
        <table id="table" class="radhika" rules="all">
	<tr >
           <td colspan="4">  <input type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></td> 
        </tr>
 <tr>
	<th>
<!-- For Selecting All -->
     <li><input type="checkbox" id="select_all" /> Select all</li></th>
		<th class="radhika">Mentor's Name</th>
		<th class="radhika">Name</th>
		<th class="radhika">Class</th>
		<th class="radhika">Department</th>
		<th class="radhika">Email</th>
		<th class="radhika">Contact</th>
		<th class="radhika">Q1</th>
		<th class="radhika">Q2</th>
		<th class="radhika">Q3</th>
		<th class="radhika">Q4</th>
		<th class="radhika">Q5</th>
		<th class="radhika">Q6</th>
		<th class="radhika">Q7</th>
		<th class="radhika">Q8</th>
		<th class="radhika">Q9</th>
		<th class="radhika">Q10</th>
		<th class="radhika">Q11</th>
		<th class="radhika">Q12</th>
		<th class="radhika">Q13</th>
		<th class="radhika">Q14</th>
		<th class="radhika">Q15</th>
		<th class="radhika">Q16</th>
		<th class="radhika">Q17</th>
		<th class="radhika">Q18</th>
		<th class="radhika">Q19</th>
		<th class="radhika">Q20</th>
		<th class="radhika">Q21</th>
		<th class="radhika">S</th>
		<th class="radhika">A</th>
		<th class="radhika">D</th>
		<th class="radhika">T</th>
	</tr>

<?php
while($student = mysqli_fetch_assoc($record)){

if($student['total']>=41 || $student['stotal']>=17 || $student['dtotal']>=14 || $student['atotal']>=10)
{

?>
<tr>
<td><input type="checkbox" class="checkbox" name="ids[]" value="<?php echo($student['data_id']);?>"/></td>
<td><b><?php echo ($student['mname']);?></b></td>
<td><b><?php echo ($student['fname']);?></b></td> 
<td><b><?php echo($student['class']);?></td>
<td><b><?php echo($student['dept']);?></td>
<td><b><?php echo($student['email']);?></td>
<td><b><?php echo($student['phone']);?></td>
<td><b><?php echo($student['one']);?></td>
<td><b><?php echo($student['two']);?></td>
<td><b><?php echo($student['three']);?></td>
<td><b><?php echo($student['four']);?></td>
<td><b><?php echo($student['five']);?></td>
<td><b><?php echo($student['six']);?></td>
<td><b><?php echo($student['seven']);?></td>
<td><b><?php echo($student['eight']);?></td>
<td><b><?php echo($student['nine']);?></td>
<td><b><?php echo($student['ten']);?></td>
<td><b><?php echo($student['eleven']);?></td>
<td><b><?php echo($student['twelve']);?></td>
<td><b><?php echo($student['thirteen']);?></td>
<td><b><?php echo($student['fourteen']);?></td>
<td><b><?php echo($student['fifteen']);?></td>
<td><b><?php echo($student['sixteen']);?></td>
<td><b><?php echo($student['seventeen']);?></td>
<td><b><?php echo($student['eighteen']);?></td>
<td><b><?php echo($student['nineteen']);?></td>
<td><b><?php echo($student['twenty']);?></td>
<td><b><?php echo($student['twentyone']);?></td>
<td><b><?php echo($student['stotal']);?></td>
<td><b><?php echo($student['atotal']);?></td>
<td><b><?php echo($student['dtotal']);?></td>
<td><b><?php echo($student['total']);?></td>

</tr>   
 
<?php
}
else{
	?>
	<tr>
<td><input type="checkbox" class="checkbox" name="ids[]" value="<?php echo($student['data_id']);?>"/></td>
<td><?php echo ($student['mname']);?></td>
<td><?php echo ($student['fname']);?></td> 
<td><?php echo($student['class']);?></td>
<td><?php echo($student['dept']);?></td>
<td><?php echo($student['email']);?></td>
<td><?php echo($student['phone']);?></td>
<td><?php echo($student['one']);?></td>
<td><?php echo($student['two']);?></td>
<td><?php echo($student['three']);?></td>
<td><?php echo($student['four']);?></td>
<td><?php echo($student['five']);?></td>
<td><?php echo($student['six']);?></td>
<td><?php echo($student['seven']);?></td>
<td><?php echo($student['eight']);?></td>
<td><?php echo($student['nine']);?></td>
<td><?php echo($student['ten']);?></td>
<td><?php echo($student['eleven']);?></td>
<td><?php echo($student['twelve']);?></td>
<td><?php echo($student['thirteen']);?></td>
<td><?php echo($student['fourteen']);?></td>
<td><?php echo($student['fifteen']);?></td>
<td><?php echo($student['sixteen']);?></td>
<td><?php echo($student['seventeen']);?></td>
<td><?php echo($student['eighteen']);?></td>
<td><?php echo($student['nineteen']);?></td>
<td><?php echo($student['twenty']);?></td>
<td><?php echo($student['twentyone']);?></td>
<td><?php echo($student['stotal']);?></td>
<td><?php echo($student['atotal']);?></td>
<td><?php echo($student['dtotal']);?></td>
<td><?php echo($student['total']);?></td>

</tr>   
	
<?php 
} } ?>
	</table>
	</div>
	</form>
	
	<!--<?php// include("rad2.php"); exit; ?>-->
	</center>
	<script type="text/javascript">
$(document).ready(function(){
$('#select_all').on('click',function(){
if(this.checked){
$('.checkbox').each(function(){
this.checked = true;
});
}else{
$('.checkbox').each(function(){
this.checked = false;
});
}
});
$('.checkbox').on('click',function(){
if($('.checkbox:checked').length == $('.checkbox').length){
$('#select_all').prop('checked',true);
}else{
$('#select_all').prop('checked',false);
}
});
});
</script>
</body>
</html>
