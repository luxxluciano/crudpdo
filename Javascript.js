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

/*confirmar antes de deletar dados*/

$(".deletar").on('click', function(event){
	event.preventDefault();

	var Link=$(this).attr('href');
	alert(Link);

if(confirm("Deseja mesmo apagar esses dados?")){
	window.location.href=Link;
}else{
	return false;
}


});