<html>
	<head>
		<title> Question Form  </title> 
	</head>

	<body>
		<form id="questionForm" method="post" action="<?php echo $_PHP_SELF?>">	
		
		<label name=="questionName"> Question Name </label>
		<input id="questionName" type="text" name="questionName" placeholder="Enter question name">
		<br>
		<label name="questionBody"> Question Body </label>
		<input id="questionBody" type="text" name="questionBody" placeholder="Enter the question">	
		<br>
		<label name="questionSkills"> Question Skills </label>
		<input id="questionSkills" type="text" name="questionSkills" placeholder="Enter question skill">
		
		</form>

			
	</body>
</html>
