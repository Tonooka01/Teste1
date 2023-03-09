<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nomedobanco";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
  echo "Dados salvos com sucesso!";
} else {
  echo "Erro ao salvar os dados: " . $conn->error;
}

$conn->close();
?>
