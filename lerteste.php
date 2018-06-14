<?php
require_once('funcoes.php');

try {
    $sql = "SELECT * FROM tarefa";

    $pdo = new PDO("mysql:host=localhost;dbname=dbtarefas", "root", ""); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    //echo $stmt->rowCount();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($result as $row) {
    //     var_dump($row);
    // }
    var_dump(json_encode($result));
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}