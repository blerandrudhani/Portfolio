<?php


require("../service/adminPanelService.php");
require("../controllers/loginController.php");

session_start();
if( !$_SESSION["adminlogged"])
{
    header("Location: http://localhost:8080/Portfolio/views/login.php");  

}

$data=fetchData();   

if(isset($_POST['logout']) && $_SESSION['adminlogged']=true){
    session_destroy();
    header("Location: http://localhost:8080/Portfolio/views/login.php");
}




?>