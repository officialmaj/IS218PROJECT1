<DOCTYPE! html>

	<head> 

		<title>

			Registration Form

		</title>

	<head>

	<body>

		<form id="registrationForm" method="post" action"<?php echo _PHP_SELF?>">
	
			<div class="form-field">
				<label for="fname"> First Name </label>
				<input type="text" id="fname"
				placeholder="Enter your first name">		
				
				
				<?php 
				
					$fname = $_POST['fname'];
					
					if($fname == "")
					{

						echo "<p style =
						\"display:inline\">" . " * required" . "<p>";
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



			</div>

			<div class="form-field">
				<label for="lname"> Last Name </label>
				<input type="text" id="lname"
				placeholder="Enter your last name">

			
				<?php 
				
					$lname = $_POST['lname'];
					
					if($lname == "")
					{

						echo "<p style =
						\"display:inline\">" . " * required" . "<p>";
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



			</div>
			<div class="form-field">
				<label for="birthday"> Birthday </label>
				<input type"date" id="birthday"
				placeholder="Enter your birthday">
			</div>
			<div class="form-field">
				<label for"email"> Email </label>
				<input type="email" id="email"
				placeholder="Enter your email address">

			
				<?php 
				
					$email = $_POST['email'];
					
					if($email == "")
					{

						echo "<p style =
						\"display:inline\">" . " * required" . "<p>";
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

			</div>

			<div class="form-field">
				<label for="password"> Password </label>
				<input type="text" id="password"
				placeholder="Enter your password">
			</div>

			
			<input id="submit" type="submit" name="submit">





		</form>

	</body>

</html>
