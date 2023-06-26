<?php
include "C:/xampp/htdocs/regProj/ConfigPageLinks/Pagination.php";
include "C:/xampp/htdocs/regProj/ConnectToDb/Database.php";

$database = new \dbProject\ConnectToDb\Database("localhost", "endliar", "0611", "example");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $database->query("DELETE FROM Client WHERE id = '$id'");
}

header("location: /regProj/frontend/index.php");
exit;
?>