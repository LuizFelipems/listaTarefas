<?php
function carrega_pagina() {
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if (file_exists($pagina.'.php')) {
        require_once($pagina.'.php');
    } else {
        require_once('inserir-tarefa.php');
    }
}

$acao = isset($_GET['acao']) ? $_GET['acao'] : null;

if ($acao == "inserirTarefa") {
    $nTarefa = isset($_GET['nTarefa']) ? $_GET['nTarefa'] : null;
    $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
    $status = isset($_GET['status']) ? $_GET['status'] : null;
    $prioridade = isset($_GET['prioridade']) ? $_GET['prioridade'] : null;
    $observacao = isset($_GET['observacao']) ? $_GET['observacao'] : null;

    inserir_tarefa($nTarefa, $categoria, $status, $prioridade, $observacao);

} elseif ($acao == "listarTarefas") {
    listar_tarefas();

}
// function abre_banco() {
//     $pdo = new PDO("mysql:host=localhost;dbname=dbtarefas", "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }

function inserir_tarefa($nTarefa, $categoria, $status, $prioridade, $observacao) {
    try {
        $sql = 'INSERT INTO tarefa 
                            (nTarefa, categoria, status, prioridade, observacao)
                    VALUES (:nTarefa, :categoria, :status, :prioridade, :observacao)';
        
        $pdo = new PDO("mysql:host=localhost;dbname=dbtarefas", "root", ""); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
            ':nTarefa' => $nTarefa,
            ':categoria' => $categoria,
            ':status' => $status,
            ':prioridade' => $prioridade,
            ':observacao' => $observacao
        ));
        echo $stmt->rowCount();
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function listar_tarefas() {
    try {
        $sql = 'SELECT * FROM tarefa';

        $pdo = new PDO("mysql:host=localhost;dbname=dbtarefas;**charset=utf8**", "root", ""); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare($sql);

        $stmt->execute();
        //echo $stmt->rowCount(); // quantidade de linhas
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // foreach ($result as $row) {
        //     var_dump($row);
        // }
        //var_dump($result);
        print_r(json_encode($result));
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}