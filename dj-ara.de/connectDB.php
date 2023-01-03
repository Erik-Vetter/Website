<?php
$db_server = 'rdbms.strato.de';
$db_benutzer = 'dbu47878';
$db_passwort = 'zisocijufuyunonu';
$db_name = 'dbs5564339'; # Verbindungsaufbau

$db_link = mysqli_connect($db_server, $db_benutzer, $db_passwort, $db_name);

if(!$db_link)
{
echo 'Connection Error';
}

?>