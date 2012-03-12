$(function() {
	$("#form").submit(function() {	
		var question = $("#question").val();
		var answer = $("#answer").val();
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
		var url = "http://" + window.location.host + "/hunt/?question="+encodeURIComponent(question)+"&checksum="+encodeURIComponent(hash)+"&points="+encodeURIComponent(points);

        if($("#answer").attr("addToUrl") == "yes") {
            url += "&answer=" + answer;
        }		

        $("#url").html("<a target='_blank' href='"+url+"'>"+url+"</a>");
		
		return false;
	});
});

function makeHash(question,answer,points) {
    return MD5(question+answer.toLowerCase()+points);
}
