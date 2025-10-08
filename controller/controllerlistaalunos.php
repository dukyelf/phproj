<?php

require "../config/poo.php";

$selecionaAlunos = "SELECT * FROM aluno";

$result = $pdo->query($selecionaAlunos);

$resultListaAlunos = $result->fetchAll(PDO::FETCH_ASSOC);

include_once('../views/viewlistaaluno.php');