<?php



function create($name,$lastName,$email,$description){
    require("../db/dbconnection.php");
      
    $query="INSERT INTO contacts(name,lastname,email,description) VALUES ('$name','$lastName','$email','$description')";
	$conn->exec($query);
       
    
}



?>