<?php require_once('Connections/conecta.php'); ?>
<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
    
    $insertSQL = "INSERT INTO players (Nome, TAG, Numero, POS, Cidade, Estado, Imagem) VALUES ('{$_POST['Nome']}', '{$_POST['TAG']}', {$_POST['Numero']} , '{$_POST['POS']}', '{$_POST['Cidade']}', '{$_POST['Estado']}', '{$_POST['Imagem']}')";
    mysqli_query($conecta, $insertSQL);
    mysqli_close($conecta);
    header('Location: https://www.galaticospro.com.br/elenco/');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elenco</title>
</head>

<body background="../image/fundo2.jpg">
<p align="center"><?php echo $insertSQL ?>
    
<h1 align="center">Player Galaticos PRO
</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="496" align="center" cellspacing="0">
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Nome:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Nome" value="" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">TAG:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="TAG" value="" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Numero:</td>
      <td bgcolor="#CCCCCC"><input type="int" name="Numero" value="" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">POS:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="POS" value="" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Cidade:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Cidade" value="" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Estado:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Estado" value="" size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">Imagem:</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Imagem" value="" size="30" /> </td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC"><input type="submit" value="Gravar" /></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="MM_insert" value="form1" />
  </p>
</form>
</body>
</html>