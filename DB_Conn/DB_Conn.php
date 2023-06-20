<?php
//连接字符串
$server = 'GLAVE-WS\GLAVE_DQL_DB';
$database = 'Glave_DB';
$UID = 'Sa';
$PWD = 'OEdb2017';
//连接数据库
$connection = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;", $UID, $PWD);
//检测是否连接成功
if ($connection) {
    echo "连接成功";
}
?>
