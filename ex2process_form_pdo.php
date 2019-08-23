<?php
//Obtém os valores do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];


//Conecta com o BD
$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_prt_042_bd';

try {
    //Efetua a conexão com BD
    $conx = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
    //Cria a Query SQL
    $query = "INSERT INTO teste1(nome,idade) VALUES ('$nome', '$idade')";
    //Executa a Query
    $conx->exec($query);
    echo "Registro inserido com sucesso";
    //Fecha a conexão
    $conx = null;

     }catch (PDOException $e) {

        echo 'Conexão falhou:' . $e->getMessage();
    }


    



