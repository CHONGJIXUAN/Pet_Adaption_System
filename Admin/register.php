<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<h1>Register</h1>
	<form method="post" action="process_register.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required>
		<br>
		
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
        <label for="confirm_email">Confirm Email</label>
        <input type="email" class="form-control" id="confirm_email" name="confirm_email" required>
        </div>
        
        <input type="submit" value="Register">
	</form>
</body>
</html>
