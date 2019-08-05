$("#formCadastro").on('submit',function(event){
	event.preventDefault();
	var dados=$(this).serialize();

	$.ajax({
		url: 'Controllers/controllerCadastro.php',
		type: 'post',
		dataType: 'html',
		data: dados,
		success:function(dados){
			$('.resultado').show().html(dados);
		}

	})

});