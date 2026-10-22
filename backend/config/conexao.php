<?php
$host = "banco013.vpshost12372.mysql.dbaas.com.br";
$usuario = "banco013";
$senha = "Uninass@u192";
$bd = "banco013";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$bd;charset=utf8mb4", $usuario, $senha);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados. Por favor, tente novamente mais tarde.");
    
    die("Erro: " . $e->getMessage());
}
?>