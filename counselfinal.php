<!DOCTYPE html>
<html>
<head>
	<title>DBIT-Counselling </title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!--<script src="myvalidate1.js"></script>-->
  
	<style type="text/css">
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
        background-color: white ;
        background-repeat: no-repeat;
     }


	</style>
	
</head>
<body background-color="#e67e22">
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
	<br>

	<ul id="gp" align="center">
          <li><a href="homepage.html">Home</a></li>
	  <li><a href="#">About Us</a></li>
          <li><a href="#" class="active">Take a test !</a></li>
          <li><a href="info.html">Food for thought ! </a></li>
          <li><a href="http://www.dbit.in/index.php/contact-us">Contact Us</a></li>
		  <li style="float:right"><a href="http://www.dbit.in/">Exit</a></li>
		  <li style="float:right"><a href="rad1.php">Admin</a></li>
	</ul>
<form name="counselfinal" method="post" novalidate="novalidate" action="connect.php">
	<fieldset>
	<blockquote>
		<h2 align="center">Enter Your Details</h2>
	</blockquote>

			<table align="center">
						<tr>
						<th>Name</td>
						<td>:</td>
						<td><input type="text" name="fname" id="fname" required> </td>
						<td><p name="myP2" id="myP"></p></td>
						</tr>

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

						<tr>
						<th>Email</th>
						<td>:</td>
						<td><input type="email" name="email" id="email"></td>
						</tr>

						<tr>
						<th>Contact</th>
						<td>:</td>
						<td><input type="tel" name="phone" id="phone"></td>
						</tr>
					</table>

			<table align="center">
				<tr>
					<td>Please read each statement and select a number <strong>0, 1, 2</strong> or <strong>3</strong> which indicates how much the statement applied to you over the past week.There are no right or wrong answers. Do not spend too much time on any statement.</td>
				</tr>
			</table>

						<ul>
							<li><h3>The rating scale is as follow:</h3></li>
						</ul>
						<ul id="ll">
							<li>0 - Did not apply to me at all - <strong>NEVER</strong><br></li>
							<li>1 - Applied to me to some degree, or some of the time - <strong>SOMETIMES</strong><br></li>
							<li>2 - Applied to me to a considerable degree, or a good part of time - <strong>OFTEN</strong><br></li>
							<li>3 - Applied to me very much, or most of the time - <strong>ALMOST ALWAYS</strong><br></li>
						</ul>

			</fieldset>
	<br>
	<fieldset>
			<legend align="center">QUESTIONS</legend>

			<br>
				<table   align="center">

						<tr>

						<td>	&nbsp;&nbsp;1. I find it hard to relax/ calm down.</td>
						</tr>
					</table>
					<table  ="" align="center">
						<tr>
							<td>&nbsp;<input type="radio" name="one" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="one" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="one" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="one" value="3">3</input><br></td>
						</tr></table>

						<br>
						<br>
						<br>
					<hr>

					<table   align="center">
						<tr>
							<td>&nbsp;&nbsp;2. My mouth feels dry most of the times.<br></td>
						</tr>
				        </table>


					<table   align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="two" value="0">0</input></td>
						<td>&nbsp;<input type="radio" name="two" value="1" >1</inut></td>
						<td>&nbsp;<input type="radio" name="two" value="2">2</input></td>
						<td>&nbsp;<input type="radio" name="two" value="3">3</input><br></ value="0"td>
						</tr>

					</table>

						<br>


						<br>
						<br>


					<hr>
					<table   align="center">
						<tr>
							<td>&nbsp;&nbsp;3. I don't experience any positive feeling at all.<br></td>
						</tr>
					</table>
					<table   align="center">
					<tr>
						<td>&nbsp;&nbsp;<input type="radio" name="three" value="0">0</input></td>
						<td>&nbsp;<input type="radio" name="three" value="1">1</input></td>
						<td>&nbsp;<input type="radio" name="three" value="2">2</input></td>
						<td>&nbsp;<input type="radio" name="three" value="3">3</input><br></td>
					</tr>

					</table>
						<br>
						<br>
						<br>

					<hr>
					<table   align="center">
						<tr>

							<td>&nbsp;&nbsp;4.I experience difficulty in breathing (e.g., excessively rapid breathing,breathlessness in the absence of physical exertion).<br></td>
						</tr>
					</table>

					<table   align="center">
					<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="four" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="four" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="four" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="four" value="3">3</input><br></td>
					</tr>
					</table>

							<br><br><br>

					<hr>

					<table   align="center">
						<tr>
							<td>&nbsp;&nbsp;5. I find it difficult to take initiative to do anything.<br></td>
						</tr>
					</table>

					<table   align="center">
					<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="five" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="five" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="five" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="five" value="3">3</input><br></td>
					</tr>
					</table>

						<br>  <br><br>

					<hr>
					<table   align="center">
						<tr>
							<td>&nbsp;&nbsp;6. I tend to over-react to situations.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="six" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="six" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="six" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="six" value="3">3</input><br></td>
						</tr>
					</table>
							<br>  <br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;7. I experience trembling/ shaking (e.g. in the hands).<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="seven" value="0">0</input></td>
						<td>&nbsp;<input type="radio" name="seven" value="1">1</input></td>
						<td>&nbsp;<input type="radio" name="seven" value="2">2</input></td>
						<td>&nbsp;<input type="radio" name="seven" value="3">3</input><br></td>
						</tr>
					</table>
						<br> 		<br><br>

					<hr>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;8. I feel (at times) I am nervous and restless.<br></td>
			                        </tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="eight" value="0">0</input></td>
						<td>&nbsp;<input type="radio" name="eight" value="1">1</input></td>
						<td>&nbsp;<input type="radio" name="eight" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="eight" value="3"value="3">3</input><br></td>
						</tr>

					</table>
						<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;9. I worry in situations where I might panic and make a fool of myself.<br></td>
						</tr>
					</table>
					<table    align="center">
					<tr>
						<td>&nbsp;&nbsp;<input type="radio" name="nine" value="0">0</input></td>
						<td>&nbsp;<input type="radio" name="nine" value="1">1</input></td>
						<td>&nbsp;<input type="radio" name="nine" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="nine" value="3">3</input><br></td>
					</tr>
					</table>
							<br><br><br>

					<hr>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;10. I feel I have no hope to get a better future.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="ten" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="ten" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="ten" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="ten" value="3">3</input><br></td>
						</tr>
					</table>
							<br><br><br>

					<hr>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;11. At times I get disturbed (upset).<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="eleven" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="eleven" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="eleven" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="eleven" value="3">3</input><br></td>
						</tr>
					</table>
						<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;12. I frequently catch a cold.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="twelve" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="twelve" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="twelve" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="twelve" value="3">3</input><br></td>
						</tr>
					</table>
						<br><br><br>

					<hr>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;13. I feel down-hearted and sad.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="thirteen" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="thirteen" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="thirteen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="thirteen" value="3">3</input><br></td>
						</tr>
					</table>
							<br><br><br>

					<hr>
					<table    align="center">
						<tr>

							<td>&nbsp;&nbsp;14. I am intolerant of anything that prevents me from getting on with what I am doing.<br></td>
						<tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="fourteen" value="0">0</input><td>
							<td>&nbsp;<input type="radio" name="fourteen" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="fourteen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="fourteen" value="3">3</input><br></td>
						</tr>
					</table>

					<br><br><br>
					<hr>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;15. I feel I am close to panic.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="fifteen" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="fifteen" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="fifteen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="fifteen" value="3">3</input><br></td>
						</tr>
					</table>
						<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;16. I am unable to be enthusiastic about anything.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="sixteen" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="sixteen" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="sixteen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="sixteen" value="3">3</input><br></td>
						</tr>
					</table>
							<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;17. I feel I am not much worth as a person.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="seventeen" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="seventeen" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="seventeen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="seventeen" value="3">3</input><br></td>
						</tr>
					</table>
						<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;18. I feel I am rather oversensitive.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="eighteen" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="eighteen" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="eighteen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="eighteen" value="3">3</input><br></td>
						</tr>
					</table>
								<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;19. I am able to hear my heart beats in the absence of physical exertion (e.g. sense of heart rate increase) .<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="nineteen" value="0">0</input></td>
						<td>&nbsp;<input type="radio" name="nineteen" value="1">1</input></td>
						<td>&nbsp;<input type="radio" name="nineteen" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="nineteen" value="3">3</input><br></td>
						</tr>
					</table>
						<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;20. I feel scared for no good reason whatsoever.<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="twenty" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="twenty" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="twenty" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="twenty" value="3">3</input><br></td>
						</tr>
					</table>
							<br><br><br>
					<hr>

					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;21. I feel I cannot find a way out of this situation .<br></td>
						</tr>
					</table>
					<table    align="center">
						<tr>
							<td>&nbsp;&nbsp;<input type="radio" name="twentyone" value="0">0</input></td>
							<td>&nbsp;<input type="radio" name="twentyone" value="1">1</input></td>
							<td>&nbsp;<input type="radio" name="twentyone" value="2">2</input></td>
							<td>&nbsp;<input type="radio" name="twentyone" value="3">3</input><br></td>
						</tr>
					</table>
					<br>
					<br>

		</fieldset>
		<center>
			<br>
			<input type="submit" value="Submit" name="submit">
			</center>
			<br>
</form>
</body>
</html>

