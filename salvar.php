<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "seunomeusuario";
$password = "suasenha";
$dbname = "nomedobancodedados";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar dados: " . $conn->error;
}

// Fechar conexão com o banco de dados
$conn->close();
?>
