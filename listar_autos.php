<!DOCTYPE html>

<html> <head>
<meta charset="utf-8" />

<title>Teste de Cadastros</title>
</head> 
<body>
<h1> Informações do carro! </h1>

<?php

$host = 'localhost';
$user = 'aluno'; 
$passw = 'aluno'; 
$dbname = 'atv_prt_043_bd';

try {

 $conx = new PDO("mysql:host=$host;dbname=$dbname", $user, $passw);

 $query = "SELECT auto_id, fabricante, ano_fabricacao, quilometragem FROM autos ORDER BY fabricante ASC";

$consulta = $conx->query($query);

while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {

$table[] = $row;
}

?>
<table>
<tr>
<td><strong></strong></td>
<td width="10">&nbsp;</td>
<td><strong>Fabricante</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Ano de Fabricação</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Quilometragem</strong></td>
<td width="10">&nbsp;</td>

</tr>
<?php
if ($table) { 
foreach($table as $d_row) {

?>

<tr>
<td><?php echo($d_row["auto_id"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["fabricante"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["ano_fabricacao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["quilometragem"]); ?></td>
<td width="10">&nbsp;</td>
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