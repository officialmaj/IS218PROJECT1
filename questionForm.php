<html>
	<head>
		<title> Question Form  </title> 
	</head>

	<body>
		<form id="questionForm" method="post" action="<?php echo $_PHP_SELF?>">	
		
		<label name=="questionName"> Question Name </label>
		<input id="questionName" type="text" name="questionName" placeholder="Enter question name">
	     	<?php
			$questionName = $_POST['questionName'];
			if(questionName == "")
			
			{
				echo "<p style = \"display: inline\">" . " * required" . "</p>";
				echo "<style>" .
					"p{
						color:red;
					}"
					. "</style>";
			}
			elseif(3 > strlen($questionName))
			{
				echo("<p>" . "Question must contain at least 3 characters" . "</p>");
				echo "<style>" . 
					"p {
						color: red;
						display: inline;
					}"
					. "</style>";
			}
			else
			{
				echo ($questionName);
			}


		?>

		<br><br>
		<label name="questionBody"> Question Body </label>
		<input id="questionBody" type="text" name="questionBody" placeholder="Enter the question">	
		<br><br>
		<label name="questionSkills"> Question Skills </label>
		<input id="questionSkills" type="text" name="questionSkills" placeholder="Enter question skill">
		<br> <br>
		
		<input type="submit" text="Submit">
		</form>
	</body>
</html>


