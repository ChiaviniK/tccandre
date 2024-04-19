<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';

// Função para selecionar uma pergunta aleatória do banco de dados
function selecionarPerguntaAleatoria1() {
    $conexao = conectarBanco(); // Assume que esta função estabelece a conexão com o banco de dados.

    $query1 = "SELECT id_q1, pergunta, alternativaA, alternativaB, alternativaC FROM questionario1 ORDER BY RAND() LIMIT 1";
    $resultado1 = $conexao->query($query1);

    if ($resultado1->num_rows > 0) {
        return $resultado1->fetch_assoc(); // Retorna os dados como um array associativo.
    } else {
        return false; // Retorna false se não houver resultados.
    }
}

// Chamar a função para selecionar uma pergunta aleatória
$dadosPergunta = selecionarPerguntaAleatoria1();


// Função para selecionar uma pergunta aleatória do banco de dados
function selecionarPerguntaAleatoria2() {
    $conexao = conectarBanco(); // Assume que esta função estabelece a conexão com o banco de dados.

    $query2 = "SELECT id_q2, pergunta, alternativaA, alternativaB, alternativaC FROM questionario2 ORDER BY RAND() LIMIT 1";
    $resultado2 = $conexao->query($query2);

    if ($resultado2->num_rows > 0) {
        return $resultado2->fetch_assoc(); // Retorna os dados como um array associativo.
    } else {
        return false; // Retorna false se não houver resultados.
    }
}

// Chamar a função para selecionar uma pergunta aleatória
$dadosPergunta2 = selecionarPerguntaAleatoria2();


// Função para selecionar uma pergunta aleatória do banco de dados
function selecionarPerguntaAleatoria3() {
    $conexao = conectarBanco(); // Assume que esta função estabelece a conexão com o banco de dados.

    $query3 = "SELECT id_q3, pergunta, alternativaA, alternativaB, alternativaC FROM questionario3 ORDER BY RAND() LIMIT 1";
    $resultado3 = $conexao->query($query3);

    if ($resultado3->num_rows > 0) {
        return $resultado3->fetch_assoc(); // Retorna os dados como um array associativo.
    } else {
        return false; // Retorna false se não houver resultados.
    }
}

// Chamar a função para selecionar uma pergunta aleatória
$dadosPergunta3 = selecionarPerguntaAleatoria3();

