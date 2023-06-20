<?php
$server = 'GLAVE-WS\GLAVE_DQL_DB';
$database = 'Glave_DB';
$UID = 'Sa';
$PWD = 'OEdb2017';
$connection = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;", $UID, $PWD);
if ($connection) {
    echo "连接成功";
}
