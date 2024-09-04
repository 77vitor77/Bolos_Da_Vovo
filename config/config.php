<?php
// ip:porta, nome do bd, login e senha
$base = "http://localhost/Bolos_da_Vovo";
$db_host = "SG-jspizzariadb-10026-mysql-master.servers.mongodirector.com";
$db_port = 3306;
$db_name = "boulosdavovo";
$db_user = "sgroot";
$db_pwd = "U0KstDkRdWA@ZAL1";
 
$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);