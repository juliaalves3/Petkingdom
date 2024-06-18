<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petkingdom";

// Verifica se os dados foram enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação dos dados de entrada
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha']; // Não criptografada
    
    // Cria a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Verifica se o e-mail já está registrado
    $sql_verifica = "SELECT * FROM cliente WHERE EMAIL = ?";
    $stmt_verifica = $conn->prepare($sql_verifica);
    $stmt_verifica->bind_param("s", $email);
    $stmt_verifica->execute();
    $stmt_verifica->store_result();

    if ($stmt_verifica->num_rows > 0) {
        echo "<script>
                alert('Usuário já cadastrado.');
                window.location.href = 'index.php';
              </script>";
        $stmt_verifica->close();
        $conn->close();
        exit();
    } else {
        // Prepara a consulta SQL
        $sql = "INSERT INTO cliente (NOME_CLIENTE, TELEFONE, EMAIL, SENHA) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Liga os parâmetros
            $stmt->bind_param("ssss", $nome, $telefone, $email, $senha);

            // Executa a consulta
            if ($stmt->execute()) {
                // Mensagem de sucesso e redirecionamento
                echo "<script>
                        alert('Cadastro realizado com sucesso! Agora inicie sua sessão');
                        window.location.href = 'login.php';
                      </script>";
                exit();
            } else {
                // Mensagem de erro específica
                echo "<script>
                        alert('Erro ao cadastrar: " . $stmt->error . "');
                      </script>";
                exit();
            }

            // Fecha a declaração
            $stmt->close();
        } else {
            // Tratamento de erro na preparação da declaração
            echo "<script>
                    alert('Erro na preparação da declaração: " . $conn->error . "');
                  </script>";
            exit();
        }

        // Fecha a conexão
        $conn->close();
    }
} else {
    // Mensagem de erro se os dados não forem enviados por POST
    echo "<script>
            alert('Método de envio inválido');
          </script>";
    exit();
}
?>
