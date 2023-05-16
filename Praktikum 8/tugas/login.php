<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login_validasi.php" method="post">
     	<h3>Registrasi Peserta Didik</h3><br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username"><br>

     	<label>Password</label>
     	<input type="password" name="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>