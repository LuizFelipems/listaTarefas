$(document).ready(function () {
    
    $("#btnIncluir").on("click", function(){
        $("#formIncluir").ajaxSubmit({
                                url: 'inserir-tarefa.php', 
                                type: 'get',
                                resetForm: true,
                                success: function(resp) {
                                    $('#modalInserir').modal('show');
                                    $('#msgModal').append("<p>Tarefa inserida com <strong>sucesso!</strong><p>");
                                    //$('#myModal1').modal('hide');
                                },
                                error: function(resp) {
                                    $('#modalInserir').modal('show');
                                    $('#msgModal').append("<p><strong>Erro</strong> ao inserir tarefa!</p>");
                                }
                                
                        });
        $('#msgModal').empty(); // Limpa o form
    });

    $(".modal").on("click", function(){ // depois que o modal é fechado!
        $('#nTarefa').focus(); // Foco em nome da tarefa
    });
});
