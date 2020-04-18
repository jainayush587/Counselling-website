
<!DOCTYPE html>
<html>
<head>
	<title>DBIT-Counselling </title>
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="jquery-latest.pack.js" type="text/javascript"></script>
<script src="jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 4,
		auto:500,
		speed:1000
	});
});
</script>

  <style type="text/css">


		hr{
			border:0.1px solid steelblue;
		}


		header{
				background:steelblue;
			}
      .mySlides {

      	display:none;
      	width: 700px;
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
				background-color:steelblue;
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
    max-width: 600px;
    margin: 0;
}
nav {
    float: left;
    width:150px;
    height:1000px
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

.blueimage {   background-image:"steelblue.png"; }

#d1{

	text-align:center;
	width:80%;	/* viewport size = 1366*655, (455.333333333/1366)*100  --> 33.33 */
	float:left;

}

#a{
	margin:center;
	margin-right:10%;

}

#d2{
	
	text-align:center;
	width:20%;	/* viewport size = 1366*655, (455.333333333/1366)*100  --> 33.33 */
	float:right;
	padding-left:40%;

}

.btn.btn-light.btn1{
	background-color:#ffffff;
	border:1px solid #8398b3;
	border-top-left-radius:40px;
	border-bottom-left-radius:40px;
	width:100px;
	color:#8398b3;
}

.btn.btn-light.btn1:hover {
	background-color: #b8cde0;
  color: white;
  box-shadow: 0 1px 4px 0 rgba(0,0,0,0.24), 0 10px 20px 0 rgba(0,0,0,0.19);
}

.btn.btn-light.btn2{
	background-color:#ffffff;
	width:100px;
	border:1px solid #8398b3;
	color:#8398b3;
	}
.btn.btn-light.btn2:hover {
	background-color: #b8cde0;
	color: white;
	box-shadow: 0 1px 4px 0 rgba(0,0,0,0.24), 0 10px 20px 0 rgba(0,0,0,0.19);
}
.btn.btn-light.btn3{
	background-color:#ffffff;
	border:1px solid #8398b3;
	width:100px;
	color:#8398b3;
	}
.btn.btn-light.btn3:hover {
	background-color: #b8cde0;
	color: white;
	box-shadow: 0 1px 4px 0 rgba(0,0,0,0.24), 0 10px 20px 0 rgba(0,0,0,0.19);
}
.btn.btn-light.btn4{
	background-color:#ffffff;
	border:1px solid #8398b3;
	border-top-right-radius:40px;
	border-bottom-right-radius:40px;
	width:100px;
	color:#8398b3;
}
.btn.btn-light.btn4:hover {
	background-color: #b8cde0;
	color: white;
	box-shadow: 0 1px 4px 0 rgba(0,0,0,0.24), 0 10px 20px 0 rgba(0,0,0,0.19);
}

#newsticker-demo { 
width:250px; 
height: 190px;
background:#EAF4F5; 
 
font-family:Arial;
font-size:12px;
margin: 20px auto;
}

#newsticker-demo .title {
text-align:center;
font-size:12px;
font-weight:bold;
padding:5px;
}

.newsticker-jcarousellite { width:250px; }
.newsticker-jcarousellite ul li{ list-style:none; display:block; padding-bottom:1px; margin-bottom:5px; margin-left:50px;}
.newsticker-jcarousellite .info { text-align:center; float:left; width:190px; height:35px;}
.newsticker-jcarousellite .info span.cat { display: block; font-size:10px; color:#808080; }

.clear { clear: both; }

#d3{
	margin-left:14%;
	text-align:center;
	width:700px;	/* viewport size = 1366*655, (455.333333333/1366)*100  --> 33.33 */
	float:center;

}
#d4{
	
	text-align:center;
	width:20%;	/* viewport size = 1366*655, (455.333333333/1366)*100  --> 33.33 */
	float:center;
	padding-left:40%;
	white-space:nowrap;
	
}

.animate {
   
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    float:left;
}
.btn.btn-outine-dark.btn-rounded.btn5{
		border:2px solid #b8cde0;
		background-color:#b8cde0;
		width:300px;
		border-radius:40px;
		color:#547fa2;
	}
.btn.btn-outine-dark.btn-rounded.btn5:hover {
	box-shadow: 0 1px 4px 0 rgba(0,0,0,0.24), 0 10px 20px 0 rgba(0,0,0,0.19);
}

@keyframes example {
    0%   {opacity:0.6;}
    25%  {opacity:0.7;}
    50%  {opacity:0.8;}
    75%  {opacity:0.9;}
    100% {opacity:1;}
}



</style>
</head>
<body background-color="white">
	<header>
		<table align="center" width=100% >
			<tr>
				<td><center><img src="index.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></center></td>
				<td><center><font size="6" color="white"><b>Don Bosco Institute Of Technology</b></font></center>
					<center><font size="5" color="white"><b>COUNSELLING DEPARTMENT</b></font></center>
				</td>
			</tr>
		</table>
	</header>
  
  <br>

  <ul id="gp" align="center">
          <li style="float:left"><a href="#" class="active">Home</a></li>
		  <li style="float:left"><a href="about_us.html">About Us</a></li>
          <li style="float:left"><a href="counselfinal.html">Take a test !</a></li>
          <li style="float:left"><a href="info.html">Food for thought ! </a></li>
          <li style="float:left"><a href="contactus.php">Contact Us</a></li>
		  <li style="float:left"><a href="becomementor.php">Become a mentor</a></li>
          <li style="float:right"><a href="rad1.php">Admin</a></li>
        </ul>
	
	
		<!--<div class="animate"><img src="whatsnew.jpg" width="200px" height="200px"></img></div>-->
	<?php
//Display admin message	
		include 'db.php';
		$sql="SELECT coun1msg2 from coun1_msg where id=(select max(id) from coun1_msg)";
			$record=mysqli_query($conn,$sql);
			
			while($slot=mysqli_fetch_assoc($record))
			{
				echo "<marquee height=30px>";
				echo "<font color=red size=5>";
				echo "<td>".$slot['coun1msg2']."</td>";
				echo"</font>";
				echo "</marquee>";
			}
	$sqlq = "SELECT fn from filename where id=(select max(id) from fn)";
	$result = mysqli_query($conn,$sqlq);
	//$row = $result->fetch_assoc();
?>
	
<div id="a">
<table align="center" width=100%>
	<tr>
	<td>
	
		<nav >
		    <div id="d2" >
			<td style="text-align:center">
			<div class="btn-group" role="group"  aria-label="Basic example">
			<a href="aimnvision.html" type="button"  class="btn btn-light btn1">Aim</a>
			<a href="aimnvision.html" type="button"  class="btn btn-light btn2">Vision</a>
			<a href="obj.html" type="button"  class="btn btn-light btn3">Objective</a>
			<a href="miss.html" type="button"  class="btn btn-light btn4">Mission</a>
			  </div>
			  </td>
			</div>
		</nav>
		
	</td>
	</tr>
	<tr>
	<td>
	<div id="newsticker-demo">    
    <div class="title">News & Events</div>
    <div class="newsticker-jcarousellite" text-align:center>
		<ul>
            <li>
				<div class="info">
					<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 1,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>"><?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 1,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?></a>
				</div>
				<div class="clear"></div>
			</li>
			
            <li>
				<div class="info">
					<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 2,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>"><?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 2,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?></a>
				</div>
				<div class="clear"></div>
			</li>
            <li>

				<div class="info">
					<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 3,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>"><?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 3,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?></a>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				<div class="info">
					<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 4,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>"><?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 4,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?></a>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				<div class="info">
					<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 5,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>"><?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 5,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?></a>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				<div class="info">
					<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 6,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>"><?php include 'db.php'; $sql1="SELECT * FROM filename order by id DESC LIMIT 6,1;"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?></a>
				</div>
				<div class="clear"></div>
			</li>
        </ul>
    </div>
    
</div>
	<th>
	<br>
	<div id="d3" class="carousel slide" align="center" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="d3" data-slide-to="0" class="active"></li>
    <li data-target="d3" data-slide-to="1"></li>
    <li data-target="d3" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox" style=" width:100%; height: 300px !important;">
    <div class="carousel-item active">
      <img src="p3.png" class="d-block w-100" alt="m">
    </div>
    <div class="carousel-item">
      <img src="p4.png" class="d-block w-100" alt="m">
    </div>
    <div class="carousel-item">
      <img src="p5.jpg" class="d-block w-100" alt="m">
    </div>
  </div>
  <a class="carousel-control-prev" href="#d3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#d3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</th>
</td>
</tr>
<tr>
<td>
<nav>
	<div class="animate" id="d4" >
	<td style="text-align:center">
	<br>
	<a href="uploads/<?php include 'db.php'; $sql1="SELECT * FROM filename where id=(select max(id) from filename)"; $record1=mysqli_query($conn,$sql1); while($student=mysqli_fetch_assoc($record1)){ echo "".$student['fn'].""; } ?>">
	<button type="button5" class="btn btn-outine-dark btn-rounded btn5"><b>WHAT'S NEW?<b></button>
	</a>
	</td>
	</div>
	</nav>
	
	</td>
	</tr>
</table>
</div><br>
<marquee height="40px"><font color="#161F41"><h4>Breathe. It's just a bad day, not a bad life. | You were given this life because you are strong enough to live it! |Beautiful things happen when you distance yourself from the negative. | When you accept yourself, you are freed from the burden of others accepting you. </h4></font></marquee>
<br>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
<br>

<table bgcolor="steelblue" width="100%" height=10px >
<tr>
<td align="center">
<font color="#161F41" size="4"><i>From the Counsellor's Desk:</i></font></td>
</tr>
</table>
<br><br>


<center>

<div >
<img src=index.png height="225px" width="300px" align="center" border="1px" style="border-color:blue"></img><br><br>
<u><b>Mentor_Name</b></u>
<br>
<br>
<p>
<i>Counselling is an integral part of education and it aims at providing opportunities for all students to learn and develop themselves to their fullest potential.</i><br>

Friends, you have the luxury of undergoing a program of higher education. <br>
This is a very complex service and calls for the integration of various factors – personal, social, religious, political, etc. <br>
The happy and successful blending of these various factors can be assisted by timely counselling. <br>
DBIT offers you qualified experts for this service at the Campus Ministry Centre. <br>
You can freely avail of this professional service in the field of educational and psychological counselling. <br>

</p>
</div>




</center>

<br><br><hr>

<center>Contact: counselling.dep@dbit.org</center>
<br>
</body>
</html>