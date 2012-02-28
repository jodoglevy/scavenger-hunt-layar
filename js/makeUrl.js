$(function() {
	$("#form").submit(function() {	
		var question = $("#question").val();
		var answer = $("#answer").val().toLowerCase();
		var points = parseInt($("#points").val());
		
		if(question.length == 0) {
			alert('Please enter a question');
			return false;
		}
		
		if(answer.length == 0) {
			alert('Please enter an answer');
			return false;
		}
		
		if(isNaN(points)) {
			alert('Please enter a numeric point value');
			return false;
		}
		
		var url = window.location.host + "/hunt/?q="+encodeURIComponent(question)+"&answer="+encodeURIComponent(MD5(answer))+"&points="+encodeURIComponent(points);
		$("#url").html("<a href='"+url+"'>"+url+"</a>");
		
		return false;
	});
});