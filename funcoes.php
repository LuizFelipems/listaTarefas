<?php
function carrega_pagina() {
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if (file_exists($pagina.'.php')) {
        require_once($pagina.'.php');
    } else {
        require_once('inserir-tarefa.php');
    }
}

// function abre_banco() {
//     $pdo = new PDO("mysql:host=localhost;dbname=dbtarefas", "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }

function insere_tarefa($nTarefa, $categoria, $status, $prioridade, $observacao) {
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

function lista_tarefas() {
    try {
        $sql = 'SELECT * FROM tarefa';

        $pdo = new PDO("mysql:host=localhost;dbname=dbtarefas;**charset=utf8**", "root", ""); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare($sql);

        $stmt->execute();
        //echo $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // foreach ($result as $row) {
        //     var_dump($row);
        // }
        var_dump($result);
        var_dump(json_encode($result));
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}