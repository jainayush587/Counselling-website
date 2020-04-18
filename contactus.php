<!DOCTYPE html>
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
      .mySlides {

      	display:none;
      	width: 600px;
      	height:400px;


      }

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
.aim{

    float: left;
    max-width: 160px;
    margin: 0;
}
nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}
.center {
    text-align:center;
}

.column {
  float: left;
  width: 50%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

#n1 {
	margin-left:10%;
	width: 40%;
}

#n2 {
	margin-left:10%;
	width: 40%;
	float: right;
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
	  <li><a href="about_us.html">About Us</a></li>
          <li><a href="counselfinal.html">Take a test !</a></li>
          <li><a href="info.html">Food for thought ! </a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li style="float:right"><a href="rad1.php">Admin</a></li>
        </ul>

	

<br>
<center><img src="index.png" height="200px" width="200px"></img></center>
<b><center> Mentor </b><br> Qualifications </center>
<center>
<b>WORKING DAYS & TIMINGS: </b>
<br>
<br>
<?php
include 'db.php';
{
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
}
?>
EMAIL: <b>email_address</b><br>
OFFICE: 
Address

</center>
<br>
<br>

<div class="row">
<div id="n1" class="column">
<img src="index.png" height="200px" width="200px" ></img></center>
<b><p>Mentor</p></b>                                                                           
<b>WORKING DAYS & TIMINGS:</b>
 <p>
<?php
include 'db.php';
{
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
?>
 
Email: <b>email_address</b><br>
OFFICE: 
Address
</p>
</div>

<div id="n2" class="column">
<img src="index.png" height="200px" width="180px"></img>
<b><p>	Mentor </p></b>                                                                          
<b>WORKING DAYS & TIMINGS: </b>
<br>
<br>
<?php
include 'db.php';
{
	$sql="SELECT * FROM coun_3 where id=(select max(id) from coun_3)";
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
?>
Email: <b>email_address</b><br>
OFFICE: 
Address
</div>
</div>
<hr>

<br><br>
</html>
