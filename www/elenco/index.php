<?php require_once('Connections/conecta.php'); ?>
<?php
$query = "SELECT * FROM players ORDER BY Numero";
$result=mysqli_query($conecta, $query);
$row_query = mysqli_fetch_assoc($result);
$totalRows_query = mysqli_num_rows($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elenco Galatico</title>
<style type="text/css">
.arial {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body background="../image/fundo2.jpg">
<table align='center' height="100" width="1400" border="0" cellspacing="0">
  <tr>
    <td align="center" class="arial" bgcolor="#CCCCFF"><font size="+4" color='#000000'>Elenco</font></td>
  </tr>
</table>
<table align='center' width="950" border="0" cellspacing="0">
  <tr>
    <td align="left" width="257">
      
    </td>
    <td width="553"><?php if(isset($_GET['logon'])){?><form id="form3" name="form3" method="post" action="">
      <label for="logon">Senha:</label>
      <input type="password" name="logon" id="logon" />
    <?php if(isset($_POST['logon'])){ if($_POST['logon']!=$admin){ echo "senha inválida";}else{ echo "Bem-vindo Admin"; }}?></form><?php }?></td>
    <td align="right" width="126">
      
    </td>
  </tr>
</table>

<table align='center' width="1400" height="30" border="0">
<tr>
    <td width="200" bgcolor="#CCCCFF" class="arial"><font color="#000000">Nome</font> </td>
    <td width="200" bgcolor="#CCCCFF" class="arial"><font color="#000000">TAG</font> </td>
    <td width="100" bgcolor="#CCCCFF" class="arial"><font color="#000000">Numero</font></td>
    <td width="100" bgcolor="#CCCCFF" class="arial"><font color="#000000">POS</font></td>
    <td width="200" bgcolor="#CCCCFF" class="arial"><font color="#000000">Cidade</font></td>
    <td width="500" bgcolor="#CCCCFF" class="arial"><font color="#000000">Card</font></td>
  <td width="45" bgcolor="#CCCCFF"><a href="Cadastro.php" class="arial"><font color="#000000">novo</font></a></td>
      <td width="45" bgcolor="#CCCCFF" class="arial"><a href="index.php?logon=admin"><font color="#000000">admin</font></a></td>
    </tr>
</table>
</form>

<?php $cont=0; $cor1="#CCCCFF"; $cor2="#FFFFFF"; ?>

<?php do { ?>

<?php $cont=$cont+1;?>


  <table align='center' width="1400" height="30" border="0">
    <tr>
    <?php if(($cont%2)==0) {?>
      <td width="200" bgcolor=<?php echo "$cor1";?> class="arial"><font size="-1" ><?php echo $row_query['Nome']; ?></font></td>
      <td width="200" bgcolor=<?php echo "$cor1";?> class="arial"><font size="-1" ><?php echo $row_query['TAG']; ?></font></td>
      <td width="100" bgcolor=<?php echo "$cor1";?> class="arial"><font size="-1" ><?php echo $row_query['Numero']; ?></font></td>
      <td width="100" bgcolor=<?php echo "$cor1";?> class="arial"><font size="-1" ><?php echo $row_query['POS']; ?></font></td>
      <td width="200" bgcolor=<?php echo "$cor1";?> class="arial"><font size="-1" ><?php echo $row_query['Cidade'].'-'.$row_query['Estado']; ?></font></td>
      <td width="500" bgcolor=<?php echo "$cor1";?> class="arial"><font size="-1" ><?php echo $row_query['Imagem']; ?></font></td>
      <td width="45" bgcolor=<?php echo "$cor1";?> class="arial"><a href="alterar.php?Nome=<?php echo $row_query['Nome'];?>"><font size='-1' color="#000000">editar</font></a></td>
      <td width="45" bgcolor=<?php echo "$cor1";?> class="arial"><a href="Deletar.php?Nome=<?php echo $row_query['Nome'];?>" onclick="return confirm (&quot;Certeza que deseja excluir este registro?&quot;);"><font size='-1' color="#FF0000"><?php if (isset($_POST['logon'])){ if ($_POST['logon']==$admin){echo "deletar";} }?></font></a></td>
       <?php } else {?>
      <td width="200" bgcolor=<?php echo "$cor2";?> class="arial"><font size="-1" ><?php echo $row_query['Nome']; ?></font></td>
      <td width="200" bgcolor=<?php echo "$cor2";?> class="arial"><font size="-1" ><?php echo $row_query['TAG']; ?></font></td>
      <td width="100" bgcolor=<?php echo "$cor2";?> class="arial"><font size="-1" ><?php echo $row_query['Numero']; ?></font></td>
      <td width="100" bgcolor=<?php echo "$cor2";?> class="arial"><font size="-1" ><?php echo $row_query['POS']; ?></font></td>
      <td width="200" bgcolor=<?php echo "$cor2";?> class="arial"><font size="-1" ><?php echo $row_query['Cidade'].'-'.$row_query['Estado']; ?></font></td>
      <td width="500" bgcolor=<?php echo "$cor2";?> class="arial"><font size="-1" ><?php echo $row_query['Imagem']; ?></font></td>
      <td width="45" bgcolor=<?php echo "$cor2";?> class="arial"><a href="alterar.php?Nome=<?php echo $row_query['Nome'];?>"><font size='-1' color="#000000">editar</font></a></td>
      <td width="45" bgcolor=<?php echo "$cor2";?> class="arial"><a href="Deletar.php?Nome=<?php echo $row_query['Nome'];?>" onclick="return confirm (&quot;Certeza que deseja excluir este registro?&quot;);"><font size='-1' color="#FF0000"><?php if (isset($_POST['logon'])){ if ($_POST['logon']==$admin){echo "deletar";} }?></font></a></td>

       <?php }?>
  </tr></table>
  <?php } while ($row_query = mysqli_fetch_assoc($result)); ?>
<p></p>
</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($conecta);
?>
