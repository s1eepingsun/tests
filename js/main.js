
/**
загружает данные вопроса.
sumNumber номер вопроса
answer выбранный вариант ответа
*/
function loadSum(sumNumber, answer) {
	var dataSend = {'sumNumber': sumNumber, 'answer': answer};
	$.get('./models/clientAjax.php', dataSend, function(data) {

		var data = JSON && JSON.parse(data) || $.parseJSON(data);
		
		//если пришли данные с новой задачей (data['answer1']), загрует шаблон задачи
		//иначе загружает шаблон результата теста
		if(typeof data['answer1'] === 'undefined') {
			$.get('./tmpl/result.mst', function(template) {
				var rendered = Mustache.render(template, data);
				$('#sum-main').html(rendered);
			});
		} else {
			$.get('./tmpl/test1.mst', function(template) {
				var rendered = Mustache.render(template, data);
				$('#sum-main').html(rendered);
				
				$('div.answers > div').click(function() {
					var answer = $(this).attr('class');
					answer = answer.substring(6);
					sumNumber = parseInt(data['id']) + 1;
					loadSum(sumNumber, answer);
				});
			});
		}
	});
	
}


$(function() {
	//загружает первый вопрос
	loadSum(1, 0);
	
	$('#new-test').click(function() {
		window.location = "http://kirillsite.esy.es"

	});
})