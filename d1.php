
<html>
<html>
<head>
<title>DBIT-Counselling </title>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">

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
			margin:0 0 0 0;
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
		
		.allign{

				margin-left: 10%;
				margin-right:10%;
				display: block;
				width: 80%;
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
    				border-right: none;
      			}


      		body {
        		background-color:steelblue ;
        		background-repeat: no-repeat;
     			}

		fieldset{
			background-color: white;
			display:block;
			}

.anchorstyle{
    float:right;
}


.container {
    overflow: hidden;
    background-color: steelblue;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown2{

	float: right;
        overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color:#161F41 ;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}


td{
			text-align:center;
		  }

img {
			opacity: 1.0;
			filter:alpha(opacity=100);
    		width: 222px;
    		height: 227px;
   			border:1px solid grey;}	


img:hover {
   			 opacity: 0.95;
    		 filter: alpha(opacity=95);
    		 border: 1px solid black;
				}
	
</style>
</head>
<body background-color="steelblue">



<!--Head icon and name of college-->
<fieldset>
<br>
<header>
	<table align="center">
		<tr>
			<td><img src="dbitlogo.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></td>
			<td><font size="6" color="white">DON BOSCO INSTITUTE OF TECHNOLOGY</font><br>
			    <center><font size="6" color="white">COUNSELLING DEPARTMENT</font></center>
			</td>
		</tr>
	</table>
</header>


<hr>

<!--Navigation Bar-->
<div class="container">
  <a href="homepage.html">Home</a>
  <a href="about_us.html">About Us</a>
  <a href="counselfinal.html">Take a test !</a>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Food For Thought!</button>
    <div class="dropdown-content" id="myDropdown">
      <a href="info.html">Food For Thought!</a>
      <a href="a1.html">Academic problems</a>
      <a href="a2.html">Addictions</a>
      <a href="a3.html">Emotional issues</a>
      <a href="a4.html">Aggression</a>
      <a href="a5.html">Psychosis</a>
      <a href="a6.html">LGBT</a>
      <a href="a7.html">Personal issues</a>
      <a href="a8.html">Adjustment issues</a>
      <a href="a9.html">Low self esteem</a>
      <a href="a10.html">Sexual behaviour</a>
      <a href="a11.html">Pressure-related issues</a>
    </div>
  </div>
  <a href="http://www.dbit.in/index.php/contact-us">Contact Us</a>
<div class="dropdown2">

<a href="rad1.php">Admin Login</a>
<a href="http://www.dbit.in/">Exit</a> 
</div>
</div>
<br>


<!--Code for dropdown-->
<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>

</fieldset>

<br><br>
<center>
<?php
include 'db.php';

$day1=$_POST['day1'];
$day2=$_POST['day2'];
$day3=$_POST['day3'];

$time11=$_POST['time11'];
$ampm1=$_POST['ampm1'];

$time12=$_POST['time12'];
$ampm2=$_POST['ampm2'];

$time13=$_POST['time13'];
$ampm3=$_POST['ampm3'];

$time21=$_POST['time21'];
$pmam1=$_POST['pmam1'];

$time22=$_POST['time22'];
$pmam2=$_POST['pmam2'];

$time23=$_POST['time23'];
$pmam3=$_POST['pmam3'];


$sql = "INSERT INTO  coun_1 (day_1,day_2,day_3,time_11,ampm1,time_12,ampm2,time_13,ampm3,time_21,pmam1,time_22,pmam2,time_23,pmam3)
VALUES ('$day1', '$day2', '$day3','$time11','$ampm1', '$time12','$ampm2', '$time13','$ampm3', '$time21','$pmam1', '$time22','$pmam2', '$time23','$pmam3')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Time slot has been entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!--Text starts...-->
<br><br><br>
<form action="display1.php">
<button type=submit value=submit>Back</button>
</center>
</form>
</html>