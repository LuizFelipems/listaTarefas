$(document).ready(function () {
    //var listaTarefas = {};
    
    $("#btnListar").on("click", function(){
        $.getJSON("http://localhost:8080/listaTarefas/funcoes.php/?acao=listarTarefas", 
        function(result) {
            $.each(result, function(key, value) {
                $("#montaLista").append(
                                "<tr>"+
                                    "<td>"+value.nTarefa+"</td>"+
                                    "<td>"+value.categoria+"</td>"+
                                    "<td>"+value.status+"</td>"+
                                    "<td>"+value.prioridade+"</td>"+
                                    "<td>"+value.observacao+"</td>"+
                                    "<td>"+
                                        "<button type="+"'submit'"+ "class="+"'btn btn-info text-center'"+ "data-toggle="+"'modal'"+ "data-target="+"'#myModal'"+"value="+ this.idTarefa +">e</button>"+
                                        "<button type="+"'submit'"+ "class="+"'btn btn-info text-center'"+ "data-toggle="+"'modal'"+ "data-target="+"'#myModal'"+"value="+ this.idTarefa +">-</button>"+
                                    "</td>"+
                                "</tr>"
                );
            })
            console.log("Teste:  " + result);
        });
        //$('#msgModal').empty(); // Limpa o form
    });

    $(".modal").on("click", function(){ // depois que o modal é fechado!
        //$('#nTarefa').focus(); // Foco em nome da tarefa
        //$('#tblOne ')
        

        
        
    });
});
