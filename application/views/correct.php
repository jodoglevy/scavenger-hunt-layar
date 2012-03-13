<html>
<body>
<span style="color:green">Correct!</span>
<br /><br />	
<form action="team" method="post">
	<label for="answer">Team Name:</label>&nbsp;<input type="text" name="team" />
    <br /><br />
    <input type="hidden" name="answer" value="<?php echo $answer;?>" />
    <input type="hidden" name="id" value="<?php echo $id;?>" />
    <input type="submit" value="Submit" />	
</form>
</body>
</html>
