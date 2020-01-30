<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Document</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic'rel='stylesheet'>
	<link href="http://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="bgimage">
		<div class="menu">
			<div class="leftmenu">
				<h1> V.J.T.I - Mumbai</h1>

				
			</div>
			<div class="rightmenu">
				<ul>
					<li id='firstlist'><a href="/PHP files/bg.php"> HOME </a></li>
					<li><a href="/PHP files/academics.php"> Academics </a></li>
					<li><a href="/PHP files/about_us.php"> About Us </a></li>
					<li><a href="/PHP files/departments.php"> Departments </a></li>
					<li><a href="/PHP files/contact.php"> Contact Us </a></li>
				</ul>
				
			</div>
		</div>
		<div class="text">
			<h4> IDEATE ... INNOVATE ... IMPLEMENT ... </h4>
			<h1> WELCOME TO V.J.T.I. </h1>
			<h3> Kindly login here...!!! </h3> 
			<button id="buttonone"> Student login </button>
			<button id="buttontwo"> Teacher login </button>
			<button id="buttonthree"> Staff login </button>

			
		</div>
	</div>
	<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="loginBox">
    <span class="close">&times;</span>
    <!--/<p>Some text in the Modal..</p>
    <div class="loginBox"-->
		<img src="student.jpg" class="user">
		<h2>Log in here (STUDENT)</h2>
		<form>
			<div class="textbox">
				<i class="fa fa-user icon"></i>
				<input type="text" name="value" placeholder="Username">
		   </div>
		   <div class="textbox">
				<i class="fa fa-key icon"></i>
				<input type="password" name="" placeholder="Password" value="">
			</div>
			<div class="submit">
			<input type="submit" name="" onClick="parent.open('student page.php')" value="Sign In">
			</div>
			<a href="#">Forget password?</a><br><br>
            <p>login with your facebook or twitter accounts</p>
			<a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
		</form> 
	<!--</div>-->
  </div>
</div>
  <div id="myModal2" class="modal">

  	<div class="loginBox">
  		<span class="close">&times;</span>
		<img src="teacher.jpg" class="user">
		<h2>Log in here (TEACHER)</h2>
		<form>
			<div class="textbox">
				<i class="fa fa-user icon"></i>
				<input type="text" name="value" placeholder="Username">
		   </div>
		   <div class="textbox">
				<i class="fa fa-key icon"></i>
				<input type="password" name="" placeholder="Password" value="">
			</div>
			<div class="submit">
			<input type="submit" name="" onClick="parent.open('teacher page.php')" value="Sign In">
			</div>
			<a href="#">Forget password?</a><br><br>
            <p>login with your facebook or twitter accounts</p>
			<a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
		</form> 
	</div>
  </div>
  <div id="myModal3" class="modal">
  <div class="loginBox">
  	<span class="close">&times;</span>
		<img src="staff.jpg" class="user">
		<h2>Log in here (STAFF)</h2>
		<form>
			<div class="textbox">
				<i class="fa fa-user icon"></i>
				<input type="text" name="value" placeholder="Username">
		   </div>
		   <div class="textbox">
				<i class="fa fa-key icon"></i>
				<input type="password" name="" placeholder="Password" value="">
			</div>
			<div class="submit">
			<input type="submit" name="" onClick="parent.open('staff page.php')" value="Sign In">
			</div>
			<a href="#">Forget password?</a><br><br>
            <p>login with your facebook or twitter accounts</p>
			<a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
		</form> 
	</div>
	</div>
  
  


<script>
// Get the modal
var modal1 = document.getElementById('myModal1');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
// Get the button that opens the modal
var btn1 = document.getElementById("buttonone");
var btn2 = document.getElementById("buttontwo");
var btn3 = document.getElementById("buttonthree");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];
// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}
btn2.onclick = function() {
    modal2.style.display = "block";
}
btn3.onclick = function() {
    modal3.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}
span2.onclick = function() {
   modal2.style.display = "none";
}
span3.onclick = function() {
   modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}

</script>
</body>
</html>
