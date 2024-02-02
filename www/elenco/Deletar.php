<?php require_once('Connections/conecta.php'); ?>
<?php
if ((isset($_GET['Nome'])) && ($_GET['Nome'] != "")) {
  $deleteSQL = "DELETE FROM players WHERE Nome='{$_GET['Nome']}'";
  $Result1 = mysqli_query($conecta, $deleteSQL);
  header('Location: https://www.galaticospro.com.br/elenco/');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deletar</title>
</head>

<body>
</body>
</html>