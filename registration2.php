<!doctype html>
<html>
	<head>
		<title>Registration page</title>
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
		<table>
			<caption>Registration</caption>
			<tr>
				<th>
					Username
				</th>
				<td>
					<input type="text" name="username" placeholder="Enter Username" value="username">
				</td>
			</tr>
			<tr>
				<th>
						Password
				</th>
				<td>
					<input type="password" name="password" placeholder="Enter password">
				</td>
			</tr>
			<tr>
				<th>
						Retype Password
				</th>
				<td>
					<input type="password" name="password2" placeholder="Enter password again">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit">Submit</button>
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>
