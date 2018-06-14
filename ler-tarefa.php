<div class="container">
    <h3 class="text-center">Ler Tarefa</h3>
    <form id="formListar" action="" method="">
        <!-- <input type="hidden" name="acao" value="listarTarefas"> -->
        <button type="button" id="btnListar" class="btn btn-primary text-center" >Listar todas</button>
    </form>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome da Tarefa</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Prioridade</th>
                            <th>Observação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="montaLista">
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="modalListar" role="dialog">
            <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="closeModal">&times;</button>
                    <h4 class="modal-title">Listar Tarefa</h4>
                </div>
                <div class="modal-body" id="msgModal">
                    <!-- Mensagem aqui -->                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="closeModal">Close</button>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
      
</body>

</html>