<?php
$base='http://localhost/BOLOS__DA_VOVO';
$db_host = 'SG-jspizzariadb-10026-mysql-master.servers.mongodirector.com';
$db_port = 3306;
$db_name = 'boulosdavovo';
$db_user = 'sgroot';
$db_pwd = 'U0KstDkRdWA@ZAL1';

$pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pwd);