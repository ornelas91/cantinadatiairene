<?php
include_once 'connect.php';
include_once 'mysqlexecuta.php';


    // conecta ao banco de dados
    strcon = mysql_pconnect($server, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR);
    mysqli_set_charset($strcon,"utf8");


?>