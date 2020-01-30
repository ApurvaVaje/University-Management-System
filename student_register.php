<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student_Page</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	
	<div class="register">
		<form method="post" id="register" action="">
			<h2>Register Here (Student)</h2>
			<label> First Name : </label><br>
			<input type="text" name="Fname" id="name" placeholder="Enter your First Name"><br><br>
			<label> Last Name : </label><br>
			<input type="text" name="lname" id="name" placeholder="Enter your Last Name"><br><br>
			<label> Mobile Number : </label><br>
			<select id="ph">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
				<option>+94</option>
				<option>+95</option>
			</select>
			<input type="number" name="MNum" id="num" placeholder="Enter your Mobile Number"><br><br>
			<label> Email : </label><br>
			<input type="text" name="email" id="name" placeholder="Enter your Email"><br><br>
			<label> Date of birth : </label><br>
			<input type="date" name="dob"><br><br>
			<label> Residential Address : </label><br>
			<input type="text" name="address" id="name" placeholder="Enter your Address"><br><br>
			
			<label> Enter your Degree Details
			<input type="radio" name="btech" id="degree"><span id="male">&nbsp; B.Tech</span>&nbsp;&nbsp;
			<input type="radio" name="mtech" id="degree"><span id="male">&nbsp; M.Tech</span>&nbsp;&nbsp; <br><br>
			<label> Btech Year : </label><br>
			<select id="year">
				<option>First</option>
				<option>Second</option>
				<option>Third</option>
				<option>Fourth</option>
			</select><br><br>
			<label> B.Tech Branches : </label><br>
			<select id="branch">
				<option>Computer</option>
				<option>Information Technology</option>
				<option>Mechanical</option>
				<option>Electrical</option>
				<option>Civil</option>
				<option>Electronics</option>
				<option>Extc</option>
				<option>Production</option>
				<option>Textile</option>

			</select><br><br>
			<label> Mtech Year : </label><br>
			<select id="year">
				<option>First</option>
				<option>Second</option>
				
			</select><br><br>
			<label> M.Tech Branches : </label><br>
			<select id="branch">
				<option>Computer</option>
				<option>Information Technology</option>
				<option>Mechanical</option>
				<option>Electrical</option>
				<option>Civil</option>
				<option>Electronics</option>
				<option>Extc</option>
				<option>Production</option>
				<option>Textile</option>

			</select><br><br>


			<input type="radio" name="male" id="male"><span id="male">&nbsp; Male</span>&nbsp;&nbsp;
			<input type="radio" name="female" id="male"><span id="male">&nbsp; Female</span>&nbsp;&nbsp;
			<input type="radio" name="other" id="male"><span id="male">&nbsp; Other</span>&nbsp;&nbsp; 
			<input type="submit" value="Submit" id="sub">
		</form>
	</div>
			
	
</body>
</html>