<?php require '../config/database.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    header('Allow: POST');
    exit('Método não permitido');
}

$id = (int)($_GET['id'] ?? 0);
if ($id) {
    $q = $pdo->prepare('DELETE FROM tarefas WHERE id=?');
    $q->execute([$id]);
}



header('Location: index.php');
exit;
    