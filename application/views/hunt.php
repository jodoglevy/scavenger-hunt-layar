<html>
<body>
<div style="color:red"><?php echo $error;?></div>
<br /><br />
<div><?php echo $question;?></div>
<br /><br />	
<form action="" method="post">
	<label for="answer">Answer:</label>&nbsp;<input type="text" name="answer" />
    <br /><br />
    <input type="hidden" name="checksum" value="<?php echo $checksum;?>" />
    <input type="hidden" name="question" value="<?php echo $question;?>" />
    <input type="hidden" name="points" value="<?php echo $points;?>"  />
    <input type="submit" value="Submit Answer" />	
</form>
</body>
</html>
