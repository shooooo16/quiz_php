$(function(){
	'use strict';
	$('.answer').on('click',function(){
		var $selected= $(this);
		var answer = $selected.text();
		
		$.post('/_answer.php',{
			
		}).done(function(res){
			if(answer === res.correct_answer){
				//正解処理
			}else{
				//不正解処理
			}
		})
	})
});