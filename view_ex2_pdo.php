<!DOCTYPE html
>

<html> <head>
<meta charset="utf-8" />

<title>Exibe os feedbacks</title>

</head> <body>
<h1>Feedback do Usuário</h1>

<?php
//Parâmetros de conexão com BD 
$dbhost = 'localhost'; 
$dbuser = 'aluno'; 
$dbpassword = 'aluno'; 
$dbname =  'atv_prt_042_bd';

try {

//Efetua a conexão com BD
$conx = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpassword);

//Cria a Query SQL
$query = "SELECT testID, nome, idade FROM teste1 ORDER BY testID ASC";

//Executa a Query
$consulta = $conx->query($query);



while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {

$table[] = $row;
}
?>

<table>
<tr>

<td><strong>ID</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Idade</strong></td>



<?php

//Verifica se há linhas para exibir
if ($table) {
//Recupera cada elemento da array
foreach($table as $d_row) {

?>

<tr>


<td><?php echo($d_row["testeID"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["idade"]); ?></td>

</tr>


<?php
}
}
?>
</table>
<?php
$number_regs = $consulta->rowCount();
?>
<p>Número de Registros : <?php echo $number_regs; ?></p>

<?php
//Fecha a conexão
$conx = null;
} catch (PDOException $e) {
echo "Conexão falhou: " . $e->getMessage();
}

?>
</body>
</html>