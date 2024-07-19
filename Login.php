<?php


// Connect to database
$conn = new mysqli("localhost", "root", "", "webproject");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get email and password from login form
if($_SERVER['REQUEST_METHOD']=="POST"){
$email=$_POST['email'];
$pass=$_POST['password'];

// Query the database
$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
$result = $conn->query($sql);

// Authenticate user
if ($result->num_rows > 0) {
    // User is authenticated
	echo "<script type='text/javascript'>alert('sucess')</script>";

    header("location:home.php");
} else {
    // User is not authenticated
    echo "<script type='text/javascript'>alert('Invalid email or password')</script>"; 
}
}
// Close database connection
$conn->close();




?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <!-- <link rel="stylesheet" href="C:/Users/Reem/Downloads/semester4/webDev1/Hotel website/Hotel website/style2.css"> -->
</head>
<body>
	<style>
	
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
:root {
	--grey: #F4F2FF;
	--dark-grey: #B7B7B7;

	--green: #23AE00;
	--light-green: #BDFFAC;

	--red: #FE2727;
	--light-red: #FFD2D2;

	--blue: #48cae4;
	--light-blue: #B6C6FF;
	--dark-blue: #1368E3;

	--bs: #AECFFF;
	--text: #9B9B9B;
}

a {
	color: var(--blue);
	transition: all .5s ease;
	text-decoration: underline;
}

a:hover {
	color: var(--dark-blue);
}
#fp{
    padding-left: 300px;
    font-size: 15px;
}
#p{
    padding-left: 80px;
}
body {
	
	background: url('images/im9.jpg');
	
	
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	padding: 0 16px;
}
.container {
	max-width: 500px;
	width: 100%;
	position: relative;
}
form {
	width: 100%;
	padding: 28px;
	border-radius: 12px;
	background: #fff;
	position: absolute;
	top: 50%;
	transform: translateY(-50%) scale(.8);
	opacity: 0;
	z-index: 100;
	transition: all .3s ease;
	transition-delay: 0s;
    box-shadow: 10px 10px 10px  #d2e6ea ;
   
}
form.active {
	transform: translateY(-50%);
	opacity: 1;
	z-index: 200;
	transition-delay: .3s;
}
.title {
	font-size: 24px;
	font-weight: 600;
	margin-bottom: 20px;
    color: var(--blue);
    text-transform: uppercase;
}
.form-group {
	margin-bottom: 14px;
}

.form-group label {
	display: inline-block;
	margin-bottom: 4px;
    padding-left: 10px;
}

.input-group {
	width: 100%;
	position: relative;
}
.input-group input {
	padding: 5px 40px 12px 20px;
	outline: none;
	border-radius: 6px;
	border: 1px solid var(--dark-grey);
	width: 100%;
	transition: all .3s ease;
}

/* Validation */
.input-group input:focus,
.input-group input:not(:placeholder-shown) {
	border-color: var(--blue);
	background: var(--grey);
}
.input-group input:focus + i,
.input-group input:not(:placeholder-shown) + i {
	color: var(--blue);
}
.input-group input:focus:valid {
	box-shadow: 0 0 0 4px var(--light-green);
}
.input-group input:valid:not(:placeholder-shown) {
	border-color: var(--green);
}
.input-group input:valid:not(:placeholder-shown) + i {
	color: var(--green);
}
.input-group input:invalid:not(:placeholder-shown) {
	border-color: var(--red);
}
.input-group input:invalid:not(:placeholder-shown) + i {
	color: var(--red);
}
.input-group input:focus:invalid {
	box-shadow: 0 0 0 4px var(--light-red);
}
.input-group input:focus,
.input-group input:focus:placeholder-shown {
	box-shadow: 0 0 0 4px var(--bs);
}
/* Validation */

.input-group i {
	/*position: absolute;
	top: 50%;*/
    padding-left: 150px;
    
	transform: translateY(-50%);
	right: 20px;
	color: var(--blue);
	pointer-events: none;
	transition: all .3s ease;
    width: 50px;
    height: 50px;
}
.form-group .help-text {
	font-size: 12px;
	color: var(--text);
}
.btn-submit {
	padding: 12px 0;
	display: block;
	width: 100%;
	color: #fff;
	border-radius: 6px;
	cursor: pointer;
	transition: all .3s ease;
	border: none;
	font-weight: 500;
	background: var(--blue);
	margin-bottom: 20px;
}
.btn-submit:hover {
	background: var(--dark-blue);
}


.form-group small {
	color: #e74c3c;
	position: absolute;
	bottom: 0;
	left: 0;
	visibility: hidden;
}

.form-group.error small {
	visibility: visible;
}
.form-group input:focus {
	outline: 0;
	border-color: #777;
}

.form-group.success input {
	border-color: #2ecc71;
}

.form-group.error input {
	border-color: #e74c3c;
}


	</style>
    <div class="container">
		<form id="form" action="login.php" method="post" class="login active" id="signin" novalidate>
			<h2 class="title">Login with your account</h2>
			<div class="form-group">
                <div class="icon"><i class="fas fa-user"></i></div>
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" name="email" placeholder="email" required >	
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" name="password" placeholder="Your password"  required>
					<small>Error message</small>
				</div>
				<span class="help-text">At least 8 characters</span>
                <a href="#" id="fp">Forgot password?</a>
			</div>

			<button type="submit" name="sub" class="btn-submit" onclick="submitForm()" >Login</button>
			<p id="p">I don't have an account. <a href="register.php">Register</a></p>
		</form>
    </div>
    
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script/script.js"></script> 
</body>
</html>