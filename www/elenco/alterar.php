<?php require_once('Connections/conecta.php'); ?>
<?php

$colname_alterar = "-1";
if (isset($_GET['Nome'])) {
  $colname_alterar = $_GET['Nome'];
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = "UPDATE players SET Nome='{$_POST['Nome']}', TAG='{$_POST['TAG']}', Numero={$_POST['Numero']}, POS='{$_POST['POS']}', Cidade='{$_POST['Cidade']}', Estado='{$_POST['Estado']}', Imagem='{$_POST['Imagem']}' WHERE Nome='{$colname_alterar}'";
  mysqli_query($conecta, $updateSQL);
  $Result1 = mysqli_query($conecta, $updateSQL);
  header('Location: https://www.galaticospro.com.br/elenco/');
}


$query_alterar = "SELECT * FROM players WHERE Nome = '{$colname_alterar}'";
$alterar = mysqli_query($conecta, $query_alterar);
$row_alterar = mysqli_fetch_assoc($alterar);
$totalRows_alterar = mysqli_num_rows($alterar);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar</title>
</head>

<body background="../image/fundo2.jpg">
    <p></p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="539" align="center">
    <tr valign="baseline">
      <td width="71" align="right" nowrap="nowrap" bgcolor="#CCCCCC">Nome:</td>
      <td bgcolor="#CCCCCC"><?php echo $row_alterar['Nome'];?></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">TAG:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="TAG" value="<?php echo htmlentities($row_alterar['TAG'], ENT_COMPAT, 'utf-8'); ?>" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Numero:</td>
      <td bgcolor="#CCCCCC"><input type="int" name="Numero" value="<?php echo htmlentities($row_alterar['Numero'], ENT_COMPAT, 'utf-8'); ?>" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">POS:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="POS" value="<?php echo htmlentities($row_alterar['POS'], ENT_COMPAT, 'utf-8'); ?>" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Cidade:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Cidade" value="<?php echo htmlentities($row_alterar['Cidade'], ENT_COMPAT, 'utf-8'); ?>" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Estado:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Estado" value="<?php echo htmlentities($row_alterar['Estado'], ENT_COMPAT, 'utf-8'); ?>" size="30" /> 
      </td>
    </tr>
    <tr valign="baseline">
      <td align="center" nowrap="nowrap" bgcolor="#CCCCCC">Imagem:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Imagem" value="<?php echo htmlentities($row_alterar['Imagem'], ENT_COMPAT, 'utf-8'); ?>" size="30" /> 
      </td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC"><input type="submit" value="Alterar" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="Nome" value="<?php echo $row_alterar['Nome']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysqli_free_result($alterar);
?>
