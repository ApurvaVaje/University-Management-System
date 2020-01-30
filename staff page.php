<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>staff</title>
	<link rel="stylesheet" type="text/css" href="studentstyle.css">
	
</head>
<body>
	<div id="sideNavigation" class="sidenav">
		<div class="user-data">
 	<img class="user-dp" src="staff.jpg">
 	<span class="user-name">Staff</span>
 </div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/PHP files/staff_register.php">Staff Register</a>
  <a href="#">Add Staff</a>
  <a href="#">Add Teachers</a>
  <a href="/PHP files/bg.php">Log-out</a>
</div>

<nav class="topnav">
  <a href="#" onclick="openNav()">

    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  </a>
</nav>
 
<div id="main">

</div>

<script>
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>
</body>
</html>