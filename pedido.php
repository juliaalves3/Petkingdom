<?php

session_start();

     if((!isset($_SESSION['email']) === true) && (!isset($_SESSION['senha']) === true)){
      session_unset();
      session_destroy();
      echo "
        <script>
            alert('Usuário não encontrado');
            window.location.href = 'login.php';
        </script>
      ";
     }

     $emailLogado = $_SESSION['email'];

     $idClienteLogado = 0;

// Configurações do seu banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petkingdom";

// Conexão com o banco de dados usando mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql_dados = "SELECT idCLIENTE FROM cliente WHERE EMAIL = '$emailLogado'";

$result = $conn->query($sql_dados);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $idClienteLogado = $row['idCLIENTE'];
    }
}

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados enviados pelo formulário
    $produto = $_POST['produto'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';
    $valorTotal = $_POST['valorTotal'] ?? '';
    $formaPagamento = $_POST['forma_pagamento'] ?? '';

    // Validação simples dos campos (pode ser mais robusta dependendo da necessidade)
    if (empty($produto) || empty($quantidade) || empty($valorTotal) || empty($formaPagamento)) {
        echo '<script>alert("Por favor, preencha todos os campos."); window.history.back();</script>';
        exit;
    } else {
        // Escapa os dados para prevenir injeção de SQL
        $produto = $conn->real_escape_string($produto);
        $quantidade = intval($quantidade); // converte para inteiro
        $valorTotal = floatval($valorTotal); // converte para float
        $formaPagamento = $conn->real_escape_string($formaPagamento);
        
        // Prepara a instrução SQL para inserção dos dados
        $sql = "INSERT INTO pedido (idCLIENTE, NOME_PRODUTO, QUANTIDADE, VALOR_TOTAL, PAGAMENTO) 
                VALUES ('$idClienteLogado', '$produto', $quantidade, $valorTotal, '$formaPagamento')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Compra finalizada com sucesso!"); window.location.href = "comprar.php";</script>';
            exit;
        } else {
            echo '<script>alert("Erro ao processar a compra: ' . $conn->error . '"); window.history.back();</script>';
            exit;
        }
    }
} else {
    // Se não for uma requisição POST, retorna um erro
    echo '<script>alert("Método de requisição não permitido."); window.history.back();</script>';
    exit;
}

// Fecha a conexão
$conn->close();
?>
