<DOCTYPE! html>


	<head>

		<title>

			Login Form

		</title>
	
		
		<link rel="stylesheet" type="text/css" href="login.css">
	

	</head>

	<body>

		<form id="loginForm" method="post" action="<?php $_PHP_SELF ?>">


			<input id="email" type="email" name="email" placeholder="Email" value="<?php echo $email?>">

				<?php 
				
					$email = $_POST['email'];
					echo($email);

				?>

			<br>
			<input id="password" type="password" name="password" placeholder="Password" value="<?php echo $password ?>">

			<input id="submit" type="submit" name="submit"

							

	</body>








</html>
