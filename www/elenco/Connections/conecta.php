<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conecta = "localhost";
$database_conecta = "galati48_elenco";
$username_conecta = "galati48_ceo";
$password_conecta = "#ErikRezende";
$conecta = mysqli_connect($hostname_conecta, $username_conecta, $password_conecta, $database_conecta) or trigger_error(mysql_error(),E_USER_ERROR);
$admin="erik_info";
?>