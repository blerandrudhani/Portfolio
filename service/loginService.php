<?php

// $_SESSION['adminlogged']=false;
function login($adminUsername,$admpassword){
    require('../db/dbconnection.php');



$stmt = $conn->prepare("SELECT * FROM admin WHERE username=?");
    $stmt->execute([$adminUsername]);
    $user = $stmt->fetch();
    $passwordEncrypted=sha1($admpassword.$user['salt']);
   

if($adminUsername==$user['username'] && $passwordEncrypted==$user['password']){
    echo "Logged in";

}
else{
    echo "Invalid password or username"; 
}
}

?>