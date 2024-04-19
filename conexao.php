<?php
function conectarBanco(){
    $host = 'localhost'; // Host do banco de dados
    $usuario = 'root'; // Usuário do banco de dados
    $senha = ''; // Senha do banco de dados
    $banco = 'tcc_andre'; // Nome do banco de dados

    // Conexão com o banco de dados
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    return $conexao;
}
?>
