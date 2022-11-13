<?php
require("../service/loginService.php");

if(isset($_POST['loginSubmit']))
{
    $admin=$_POST['admin'];
    $password=$_POST['adminPassword'];

    login($_POST['admin'],$_POST['adminPassword']);
     
    session_start();
   $_SESSION["adminlogged"]=true;
    
     header("Location: http://localhost:8080/Portfolio/views/adminPanel.php");
    
} 


?>
