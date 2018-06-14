<style>
.alert{
    display: none;
}
</style>

<div class="container">
<h3 class="text-center">Inserir Tarefa</h3>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form id="formIncluir" action="" method="">
            <div class="form-group">
                <div>
                    <label for="nTarefa">Nome da tarefa:</label>
                    <input type="text" name="nTarefa" class="form-control" id="nTarefa">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select name="categoria" class="form-control" id="categoria">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" class="form-control" id="status">
                        <option value="1">Andamento</option>
                        <option value="2">Concluida</option>
                        <option value="3">Cancelada</option>
                        <option value="4">Não Concluida</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prioridade">Prioridade:</label>
                    <select name="prioridade" class="form-control" id="prioridade">
                        <option value="1">Baixa</option>
                        <option value="2">Normal</option>
                        <option value="3">Alta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="observacao">Observação:</label>
                    <textarea name="observacao" class="form-control" rows="2" id="observacao"></textarea>
                </div> 
                <input type="hidden" name="acao" value="inserirTarefa">
                <!-- <button type="submit" class="btn btn-primary text-center" data-toggle="modal" data-target="#myModal">+</button> -->
                <button type="button" id="btnIncluirTarefa" class="btn btn-primary text-center" >+</button>
        </form>
        
    </div>
    <div class="col-md-3"></div>

    <!-- Modal -->
    <div class="modal fade" id="modalInserir" role="dialog">
        <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="closeModal">&times;</button>
                <h4 class="modal-title">Inserir Tarefa</h4>
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