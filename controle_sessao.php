<?php
session_start(); // Inicia uma nova sessão ou resume a sessão existente

// Verifica se o formulário de login foi enviado
if(isset($_POST['email']) && isset($_POST['senha'])) {
    // Captura e limpa os dados de entrada
    $login = trim($_POST['email']);
    $senha = $_POST['senha'];

    // Dados de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petkingdom";

    // Conecta ao banco de dados usando MySQLi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara a consulta para evitar SQL injection
    $stmt = $conn->prepare("SELECT idCLIENTE, SENHA FROM cliente WHERE EMAIL = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->store_result();

    // Verifica se encontrou algum resultado
    if ($stmt->num_rows > 0) {
        // Bind das colunas retornadas na consulta
        $stmt->bind_result($idCliente, $senhaHash);

        // Obtém os resultados
        $stmt->fetch();

        // Verifica se a senha digitada corresponde à senha hash no banco de dados
        if (password_verify($senha, $senhaHash)) {
            // Senha correta, inicia a sessão
            $_SESSION['idCliente'] = $idCliente;
            $_SESSION['email'] = $login;
            $response = [
                'status' => 'success',
                'message' => 'Login realizado com sucesso.'
            ];
        } else {
            // Senha incorreta
            $response = [
                'status' => 'error',
                'message' => 'Senha incorreta. Por favor, tente novamente.'
            ];
        }
    } else {
        // E-mail não encontrado
        $response = [
            'status' => 'error',
            'message' => 'E-mail não encontrado. Verifique o e-mail digitado.'
        ];
    }

    // Fecha a consulta e a conexão com o banco de dados
    $stmt->close();
    $conn->close();

    // Retorna a resposta em JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Caso não seja uma requisição POST válida, redireciona para a página de login
    header('Location: login.html');
    exit();
}
?>
