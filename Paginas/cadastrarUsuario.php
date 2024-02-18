<?php
require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];
$aniversario = $_POST['aniversario'];

$sql = "INSERT INTO usuarios (nome, email, senha, genero, aniversario) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nome, $email, $senha, $genero, $aniversario);

if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>