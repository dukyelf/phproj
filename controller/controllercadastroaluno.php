<?php

require "../config/poo.php";

$nome = $_POST["nome"];
$data_nasc = $_POST["data_nasc"];

$cadaluno = "INSERT INTO aluno(nome, data_nasc) VALUES($nome, $data_nasc);";

$pdo->exec($cadaluno);