<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/style_cadastro.css">
    <title>Teste</title>
</head>
<body>
    <form action="controller/controllercadastroaluno.php" method="post">
        <div class="formulario">
        <div class="formularionome">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        </div>
        <div class="formulariodatanasc">
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" name="data_nasc" id="data_nasc" required>
        </div>
        <div class="formulariobotao">
        <input type="submit" value="Enviar" class="formulariobotaoenviar">
    <?php 

    if(isset($_GET['sucesso'])){
        if($_GET['sucesso'] == 1){
            echo "<p class='msg-retorno-sucesso'>Cadastro realizado com sucesso</p>";
        }else{
            echo "<p class='msg-retorno-erro'>O cadastro falhou</p>";
        }
    }
    ?>
        <a href="controller/controllerlistaalunos.php" class="linklistaalunos">Lista de Alunos</a>
    </div></div>
    </form>
</body>
</html>