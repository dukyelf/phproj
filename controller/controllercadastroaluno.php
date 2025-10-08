<?php

require "../config/poo.php";


$nome = $_POST["nome"];
$data_nasc = $_POST["data_nasc"];

$cadaluno = "INSERT INTO aluno(nome, data_nasc) VALUES('$nome', '$data_nasc')";

$pdo->exec($cadaluno);

if($pdo->exec($sqlInsert)){
    header("Location: ../index.php?sucesso=1");
}else{
    header("Location: ../index.php?sucesso=0");
}