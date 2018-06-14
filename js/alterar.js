$(document).ready(function () {
    //var listaTarefas = {};
    $("#btnListar").on("click", function(e){
        //e.preventDefault();
        // $("#formListar").ajaxSubmit({
        //                         url: 'ler-tarefa.php', 
        //                         type: 'get',
        //                         resetForm: true,
        //                         dataType: 'json',
        //                         success: function(resp) {
        //                             $('#modalListar').modal('show');
        //                             $('#msgModal').append("<p>Tarefa listada com <strong>sucesso!</strong><p>");
        //                             //listaTarefas = resp;
        //                             console.log(resp);
        //                             JSON.parse(resp);
        //                             $("#montaLista > tbody  > tr").each(function(resp) {
        //                                 "<tr>"+
        //                                     "<td>"+resp.nTarefa+"</td>"+
        //                                     "<td>"+resp.categoria+"</td>"+
        //                                     "<td>"+resp.status+"</td>"+
        //                                     "<td>"+resp.prioridade+"</td>"+
        //                                     "<td>"+resp.observacao+"</td>"+
        //                                     "<td>"+
        //                                         "<button type="+"'submit'"+ "class="+"'btn btn-info text-center'"+ "data-toggle="+"'modal'"+ "data-target="+"'#myModal'"+">e</button>"+
        //                                         "<button type="+"'submit'"+ "class="+"'btn btn-info text-center'"+ "data-toggle="+"'modal'"+ "data-target="+"'#myModal'"+">-</button>"+
        //                                     "</td>"+
        //                                 "</tr>"
        //                             });
        //                         },
        //                         error: function(resp) {
        //                             $('#modalListar').modal('show');
        //                             $('#msgModal').append("<p><strong>Erro: "+resp+"</strong> ao Listar tarefa!</p>");
        //                             console.log(resp);
        //                         }
                                
        //                 });

        $.getJSON("ler-tarefa.php", 
            function(result) {
                $.each(result, function() {
                    $("#montaLista > tbody").append(
                                    "<tr>"+
                                         "<td>"+this.nTarefa+"</td>"+
                                         "<td>"+this.categoria+"</td>"+
                                         "<td>"+this.status+"</td>"+
                                         "<td>"+this.prioridade+"</td>"+
                                         "<td>"+this.observacao+"</td>"+
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
