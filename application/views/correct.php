<html>
<body>
<span style="color:red"><?php echo $error; ?></span><br />
<span style="color:green"><?php echo $message; ?></span>
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
