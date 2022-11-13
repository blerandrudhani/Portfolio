<?php

function fetchData(){
    require("../db/dbconnection.php");

   $stmt = $conn->prepare("SELECT * FROM contacts ORDER BY `contacts`.`id` DESC" );
    $stmt->execute();
     
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $contacts ;
}



?>