<?php
session_start(); 

$local = 'localhost';
$user = 'root';
$senha = '';
$banco = 'petkingdom';

$conecta = new mysqli($local, $user, $senha, $banco);

if($conecta->connect_error === true){
    die('Deu ruim');
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente WHERE EMAIL = '$email' AND SENHA = '$senha'";

$result = $conecta->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['$idCliente'] = $row['idCLIENTE'];

    echo "
        <script>
            window.location.href = 'comprar.php';
        </script>
    ";
}else{
    session_unset();
    session_destroy();
    echo "
        <script>
            alert('Email ou senha incorretos!');
            window.location.href = 'login.php';
        </script>
    ";
}