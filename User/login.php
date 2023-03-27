<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
	<h2>Login</h2>
	<form method="post" action="process_login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
	</form>
	
</body>
</html>
