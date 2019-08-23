<!DOCTYPE html>
<html>
<head>
<title>Formulário de Feedback</title>
</head>
<body>
<form action="view_feedback_pdo.php" method="post">
<table>
<tr>
<td colspan="2"><h2>Por favor, dê o seu feedback</h2></td>
</tr>
<tr>
<td><p><strong>Nome: </strong></p></td>
<td><input type="text" name="nome" size="30" maxlength="30" /></td>
</tr>
<tr>
<td><p><strong>Escola: </strong></p></td>
<td><input type="text" name="escola" size="30" /></td>
</tr>

<tr>
<td><p><strong>Função: </strong></p></td>
<td><input type="text" name="funcao" size="40"/></td>
</tr>
<tr>
<td><p><strong>Número da equipe: </strong></p></td>
<td><textarea name="numero_equipe" rows="7" cols="48"/></textarea></td>
</tr>
<tr>
<td><p><strong>E-mail: </strong></p></td>
<td><input type="text" name="email" size="40"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Enviar" /></td>
</tr>
</table>
</form>
</body>
</html>