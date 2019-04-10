<?php
session_start();
include'data.php';
$dt= new database;
if(isset($_GET['idg'])){
    $idg=$_GET['idg'];
    $dt->command("DELETE FROM groupnews WHERE idGroup='$idg'");
    header("location:groupadd.php");
}
?>