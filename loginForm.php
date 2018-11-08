<DOCTYPE! html>


	<head>

		<title>

			Login Form

		</title>
	
		
		<link rel="stylesheet" type="text/css" href="login.css">
	

	</head>

	<body>
		
		<form id="loginForm" method="post" action="<?php $_PHP_SELF ?>">


			<input id="email" type="email" name="email"
			placeholder="Email">

				
				<?php 
				
					$email = $_POST['email'];
					
					if($email == "")
					{

						echo "<p style =
						\"display:inline\">" . " required" . "<p>";
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
				
			<br>
			<input id="password" type="password" name="password" placeholder="Password" value="<?php $_PHP_SELF ?>">
					
					<?php
					$password = $_POST['password'];

					if($password == "")
					{

						echo "<p>" . " required" . "</p>";
						echo "<style>" .

							"p 
							{
								color:red;
								display: inline;
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
			<input id="submit" type="submit" name="submit"

							

	</body>








</html>
