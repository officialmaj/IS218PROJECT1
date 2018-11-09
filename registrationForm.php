<DOCTYPE! html>

	<head> 

		<title>

			Registration Form

		</title>

	<head>

	<body>

		<form id="registrationForm" method="post" action="<?php echo $_PHP_SELF ?>">
	
				<label name="fname"> First Name </label>
				<input type="text" id="fname" name="fname"
				placeholder="Enter your first name">		
				
				<?php 
				
					$fname = $_POST['fname'];
					
					if($fname == "")
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
						echo ($fname);


					}

					?>
				<br>

				<label name="lname"> Last Name </label>
				<input type="text" id="lname" name="lname"
				placeholder="Enter your last name">

			
				<?php 
				
					$lname = $_POST['lname'];
					
					if($lname == "")
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
						echo ($lname);


					}

					?>

				<br>

				<label name="birthday"> Birthday </label>
				<input type"date" id="birthday" name="birthday"
				placeholder="Enter your birthday">

				<?php 
				
					$birthday = $_POST['birthday'];
					
					if($birthday == "")
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
						echo ($birthday);


					}

					?>

				<br>
				<label name="email"> Email </label>
				<input type="email" id="email" name="email"
				placeholder="Enter your email address">

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

				<br>

				<label name="password"> Password </label>
				<input type="text" id="password" name="password"
				placeholder="Enter your password">
				
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
