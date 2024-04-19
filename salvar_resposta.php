<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos campos do formulário
    $arquivoCsv = "dados_formulario.csv";

    $nomeAluno = isset($_POST['nome_aluno']) ? $_POST['nome_aluno'] : '';
    $turma = isset($_POST['turma']) ? $_POST['turma'] : '';

    $idPergunta1 = isset($_POST['id_q1']) ? $_POST['id_q1'] : ''; // Captura o ID da pergunta 1
    $respostaPergunta1 = isset($_POST['alternativa_q1']) ? $_POST['alternativa_q1'] : ''; // Supondo que você tenha um campo resposta_q1

    $idPergunta2 = isset($_POST['id_q2']) ? $_POST['id_q2'] : ''; // Captura o ID da pergunta 1
    $respostaPergunta2 = isset($_POST['alternativa_q2']) ? $_POST['alternativa_q2'] : ''; // Supondo que você tenha um campo resposta_q1

    $idPergunta3 = isset($_POST['id_q3']) ? $_POST['id_q3'] : '';
    $respostaPergunta3 = isset($_POST['alternativa_q3']) ? $_POST['alternativa_q3'] : ''; // Supondo que você tenha um campo resposta_q1

    // Verifica se algum dos campos obrigatórios está vazio
       // Caminho do arquivo CSV
        $arquivoCsv = 'dados_formulario.csv';

        // Dados para salvar
        $dados = [
            $idPergunta1, $respostaPergunta1,
            $idPergunta2, $respostaPergunta2,
            $idPergunta3, $respostaPergunta3,
            $nomeAluno, $turma
        ];

        // Abre o arquivo para escrita; cria o arquivo se não existir
        $handle = fopen($arquivoCsv, 'a');

        // Escreve os dados no arquivo CSV
        fputcsv($handle, $dados);

        // Fecha o arquivo
        fclose($handle);

        header('Location: index.php');

    }

?>
