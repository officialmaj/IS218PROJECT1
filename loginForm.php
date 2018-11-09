<DOCTYPE! html>
	<head>
		<title>
			Login Form
		</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<form id="loginForm" method="post" action="<?php $_PHP_SELF ?>">
			<label name="email"> Email </label>
			<input id="email" type="email" name="email" placeholder="Enter your email address">
			<?php 
					$email = $_POST['email'];
					if($email == "")
					{
						echo "<p style =
						\"display:inline\">" . " * required" . "</p>";
						echo "<style>" . 
							"p 
							{
								color: red;
							}"
						    . "</style>";
					}
					else 
					{
						echo ($email);
					}
			?>
			<br> </br>
			<label name="password"> Password </label>
			<input id="password" type="password" name="password" placeholder="Enter your password">
					<?php
					$password = $_POST['password'];
					if($password == "")
					{
						echo "<p style = \"display: inline\">" . " * required" . "</p>";
						echo "<style>" .
							"p{
								color:red;
							}"
							. "</style>";
					}
					elseif(8 > strlen($password))
					{
						echo("<p>" . "password must be 8 characters or longer" . "</p>");
						echo "<style>" . 
							"p {
								color: red;
								display: inline;
							}"
							. "</style>";
					}
					else
					{
						echo ($password);
					}
					?>
			<br> <br>
			<input id="submit" type="submit" name="submit">
		</form>	
	</body>
</html>
