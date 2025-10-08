<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_viewalunos.css">
    <title>Document</title>
</head>
<body>
    <section class="principal">
        <a href="../" class="botaovoltar">Voltar</a>
        <table class="principaltabela">
            <thead>
                <th>ID Aluno</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Ação</th>
                <tbody>
                    <?php
                    foreach($resultListaAlunos as $aluno){ ?>
                    <tr>
                        <td><?= htmlspecialchars($aluno['id_aluno']) ?></td>
                        <td><?= htmlspecialchars($aluno['nome']) ?></td>
                        <td><?= htmlspecialchars($aluno['data_nasc']) ?></td>
                        <td>
                            <button>Editar</button>
                            <button>Apagar</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </thead>
        </table>
    </section>
    
</body>
</html>