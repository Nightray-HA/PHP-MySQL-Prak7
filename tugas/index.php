<html>
<head>
	<title>Desain Form Login Dengan CSS by www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css"><!--menambah external css-->
</head>
<body>
	<h1>Membuat Desain Form Login Dengan CSS <br/> www.malasngoding.com</h1>
<!--membuat object div untuk membuat form-->
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<!--form login-->
		<form method = "POST" action = "ceklogin.php" >
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
		</form>
	</div>
