<?php
ob_start();
session_start();

date_default_timezone_set("Etc/GMT-4");

try {
    // $con = new PDO("mysql:dbname=id20145934_portucomprausa;host=localhost", "id20145934_root", "$8zKZaRN>8gz#W3]");
    $con = new PDO("mysql:dbname=portucomprausadb;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//allows error reporting from db connection
} catch (PDOException $error) {
    exit("Connection failed: ". $error->getMessage() );
}

?>