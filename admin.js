//Посылает данные на контроллер админки через ajax
function loadTest(id) {
	var dataSend = {'id': id};
	
	$.get('./models/adminAjax.php', dataSend, function(data) {
		
		console.log('data: ', data);
		var data = JSON && JSON.parse(data) || $.parseJSON(data);
		
		//подготавливает data для mustache.js
		/* var dataNew = {sums: []};		
		for (var i=0; i < Object.keys(data).length; i++) {
				dataNew.sums[i] = data[i];
		} */
		// data = dataNew;

		testData = {
			tasks: []
		}
		for (var property in data.tasks) {
			if (data.tasks.hasOwnProperty(property)) {
					console.log('property log: ', property);
					console.log('property log: ', data.tasks[property]);
					testData.tasks[property] = data.tasks[property];
			}
		}
		
		console.log('dataNew: ', data);
		console.log('testData : ', testData);
		data = testData;
		
		/* {{#tasks}}
    {{id}}
    {{text}}
    {{/tasks}} */
		
		//загружает главную страницу админки
		$.get('./tmpl/admin-list.mst?132', function(template) {
			var rendered = Mustache.render(template, data);
			$('#admin-section').html(rendered);
			
			$('.delete-sum').click(function() {
				var id = $(this).attr('id');
				deleteSum(id);
			});
		});

	});
	
}

//создаёт задачу
function createSum() {
	var formData = $('#new-sum').serialize();
	$.ajax({
		type: 'POST',
		url: 'models/adminAjax.php',
		data: formData,
		success: function(data) {
			$('.response').html(data);
		},
		error:  function(xhr, str){
					alert('Возникла ошибка: ' + xhr.responseCode);
			}
	});
}

//удаляет задачу
function deleteSum(id) {
	id = id.substring(3);
	var deleteData = 'delete=true&id=' + id;
	$.ajax({
		type: 'POST',
		url: 'models/adminAjax.php',
		data: deleteData,
		success: function(data) {
			$('.response').html(data);
			location.reload();
		},
		error:  function(xhr, str){
					alert('Возникла ошибка: ' + xhr.responseCode);
			}
	});
}


$(function() {
	loadTest(0, 0);
	
	$('#new-test').click(function() {
		window.location = "http://kirillsite.esy.es"
	});

})










