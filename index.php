<?php
include 'content.php'; // Inclui content.php
$dadosPergunta1 = selecionarPerguntaAleatoria1(); // Obtém os dados da pergunta 1
$dadosPergunta2 = selecionarPerguntaAleatoria2(); // Obtém os dados da pergunta 2
$dadosPergunta3 = selecionarPerguntaAleatoria3(); // Obtém os dados da pergunta 3
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Questões</title>
    <!-- Removemos a referência ao jQuery para simplificar -->
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
<div id="cursor-circle"></div>

<?php include 'header.php' ?>

<div class="container-perguntas">


    <?php if ($dadosPergunta): ?>
        
        <form action="salvar_resposta.php" method="post">
        <div>
            <label for="nome_aluno">Nome:</label>
            <input type="text" id="nome_aluno" name="nome_aluno" required>
        </div>

        <!-- Campo para a turma -->
        <div>
            <label for="turma">Turma:</label>
            <input type="text" id="turma" name="turma" required>
        </div>
            <p>Pergunta: <?= $dadosPergunta['pergunta'] ?></p>
            <input type="hidden" name="id_q1" value="<?= $dadosPergunta['id_q1'] ?>">

            <!-- Alternativas como botões de rádio -->
            <div>
                <input type="radio" id="alternativaA" name="alternativa_q1" value="A">
                <label for="alternativaA"><?= $dadosPergunta['alternativaA'] ?></label>
            </div>
            <div>
                <input type="radio" id="alternativaB" name="alternativa_q1" value="B">
                <label for="alternativaB"><?= $dadosPergunta['alternativaB'] ?></label>
            </div>
            <div>
                <input type="radio" id="alternativaC" name="alternativa_q1" value="C">
                <label for="alternativaC"><?= $dadosPergunta['alternativaC'] ?></label>
            </div>

            <!-- Botão de envio -->
    
        
    <?php else: ?>
        <p>Nenhuma pergunta disponível no momento.</p>
    <?php endif; ?>

    <?php if ($dadosPergunta2): ?>
        <p>Pergunta: <?= $dadosPergunta2['pergunta'] ?></p>
        
            <input type="hidden" name="id_q2" value="<?= $dadosPergunta2['id_q2'] ?>">

            <!-- Alternativas como botões de rádio -->
            <div>
                <input type="radio" id="alternativaA" name="alternativa_q2" value="A">
                <label for="alternativaA"><?= $dadosPergunta['alternativaA'] ?></label>
            </div>
            <div>
                <input type="radio" id="alternativaB" name="alternativa_q2" value="B">
                <label for="alternativaB"><?= $dadosPergunta['alternativaB'] ?></label>
            </div>
            <div>
                <input type="radio" id="alternativaC" name="alternativa_q2" value="C">
                <label for="alternativaC"><?= $dadosPergunta['alternativaC'] ?></label>
            </div>

            <!-- Botão de envio -->
            
        
    <?php else: ?>
        <p>Nenhuma pergunta disponível no momento.</p>
    <?php endif; ?>

    <?php if ($dadosPergunta3): ?>
        <p>Pergunta: <?= $dadosPergunta['pergunta'] ?></p>
        
            <input type="hidden" name="id_q3" value="<?= $dadosPergunta3['id_q3'] ?>">

            <!-- Alternativas como botões de rádio -->
            <div>
                <input type="radio" id="alternativaA" name="alternativa_q3" value="A">
                <label for="alternativaA"><?= $dadosPergunta['alternativaA'] ?></label>
            </div>
            <div>
                <input type="radio" id="alternativaB" name="alternativa_q3" value="B">
                <label for="alternativaB"><?= $dadosPergunta['alternativaB'] ?></label>
            </div>
            <div>
                <input type="radio" id="alternativaC" name="alternativa_q3" value="C">
                <label for="alternativaC"><?= $dadosPergunta['alternativaC'] ?></label>
            </div>

            <!-- Botão de envio -->
            <button type="submit">Enviar Resposta</button>
        </form>
    <?php else: ?>
        <p>Nenhuma pergunta disponível no momento.</p>
    <?php endif; ?>

</div>

<?php include 'footer.php' ?>
<script>

document.addEventListener('mousemove', function(e) {
    const circle = document.getElementById('cursor-circle');
    circle.style.left = e.pageX + 'px';
    circle.style.top = e.pageY + 'px';
});


document.addEventListener('mousemove', function(e) {
    let trail = document.createElement('div');
    trail.className = 'trail';
    document.body.appendChild(trail);
    trail.style.left = e.pageX + 'px';
    trail.style.top = e.pageY + 'px';
    setTimeout(function() {
        document.body.removeChild(trail);
    }, 500); // Tempo que o ponto permanece na tela antes de desaparecer
});


</script>
</html>
