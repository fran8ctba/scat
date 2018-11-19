/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
 $('#delete-modal').on('show.bs.modal', function (event) {
 	
 	var button = $(event.relatedTarget);
 	var id = button.data('id');
 	
 	var modal = $(this);
 	modal.find('.modal-title').text('Excluir? Não vai ter volta!');
 	modal.find('#confirm').attr('href', 'deletar.php?id=' + id);
 });


 function show1(){
 	document.getElementById('motorista').style.display ='none';
 	document.getElementById('auxiliar').style.display = 'block';
 }
 function show2(){
 	document.getElementById('motorista').style.display = 'block';
 	document.getElementById('auxiliar').style.display ='none';
 }