<DOCTYPE! html>


	<head>

		<title>

			Login Form

		</title>


	</head>

	<body>

		<form id="loginForm" method="post" action="<?php echo
		htmlspecialchars($_SERVER["PHP_SELF"];?>">


			<input type="email" name="email" placeholder="Email">
			<br>
			<input type="password" name="password" placeholder="Password">

		</form>


	</body>








</html>
