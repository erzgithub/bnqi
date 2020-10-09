<?php
session_start();
include '../connection/db.php';
if (empty($_SESSION['userSession'])) {
    //header("Location : ../index.php");
    //die();
}
$session = $con->query("SELECT * from users where id ='".$_SESSION['userSession']."' ");
$srow = $session->fetch_array();
echo $srow['firstname'];
die();
?>