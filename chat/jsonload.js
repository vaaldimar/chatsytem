$(document).ready(function(){
		$("#messages").load('ajaxLoad.php');
		
		$("#userArea").submit(function() {
			$.post('ajaxPost.php', $('#userArea').serialize(), function(data){
				$("#messages").append('<div>'+data+'</div>');
			});
			return false;
		});
	});