
<!doctype html>
<html>
	<head>
		<title>Log in</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>	
	</head>
	<body>
	<div class="menu">
		<ul>
			<li class="selected">
			<a href="login.php">Log in page</a>
			</li>
			<li>
			<a href="registration.php">Registration page</a>
			</li>
			<li>
			<a href="https://accounts.google.com/Login">Google Account</a>
			</li>
		</ul>
	<div style="clear: left;"></div>
	</div>
		<form method="post" action="list.php">
			<input type="hidden" name="time" value="1970-01-01">
		
			<table>
					<caption>Log in</caption>
					
					<tr>
						<th>
							<label for="username-id">
								Username
							</label>	
						</th>
						<td>
							<input type="text" name="username" id="username-id" placeholder="Enter username">
						</td>
					</tr>
					
					<tr>
						<th>
							<label for="password-id">
								Password
							</label>
						</th>
						<td>
							<input type="password" id="password-id" name="password" placeholder="Enter password">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>	
								<input type="checkbox" name="remember_me">Remember Me
							</label>	
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="submit">Log in</button>
						</td>
					</tr>
			</table>
	</body>
</html>