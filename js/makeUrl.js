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

        var hash = makeHash(question,answer,points);
		var url = window.location.host + "/hunt/?q="+encodeURIComponent(question)+"&checksum="+encodeURIComponent(hash)+"&points="+encodeURIComponent(points);
		$("#url").html("<a href='http://"+url+"'>"+url+"</a>");
		
		return false;
	});
});

function makeHash(question,answer,points) {
    return MD5(question+answer+points);
}
