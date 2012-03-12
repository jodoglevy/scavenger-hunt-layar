<html>
<body>
<div style="color:green">Correct!</div>
<br /><br />	
<form action="" method="post">
	<label for="answer">Team Name:</label>&nbsp;<input type="text" name="team" />
    <br /><br />
    <input type="hidden" name="checksum" value="<?php echo $checksum;?>" />
    <input type="hidden" name="question" value="<?php echo $question;?>" />
    <input type="hidden" name="points" value="<?php echo $points;?>"  />
    <input type="submit" value="Submit" />	
</form>
</body>
</html>
