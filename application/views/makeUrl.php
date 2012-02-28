<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="/js/md5_crypt.js"></script>
		<script type="text/javascript" src="/js/makeUrl.js"></script>
	</head>
	<body>
		<h4>
			Create a Question:
		</h4>
		<form id="form">
			<div>
				Question:
				<br />
				<textarea style="width:450px; height:150px" id="question" name="question" type="text">What is 1 + 1?</textarea>
				<br /><br />
			</div>
			<div>
				Answer:
				<br />
				<input id="answer" name="answer" type="text" value="2" />
				<br /><br />
			</div>
			<div>
				Points:
				<br />
				<input id="points" name="points" type="text" value="5" />
				<br /><br />
			</div>
			<div>
				<input type="submit" value="Create Url" />
				<br /><br />
			</div>
			Please use the url:
			<br />
			<div id="url" type="text" />
		</form>
	</body>
<html>
