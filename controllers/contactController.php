<?php
require("../service/contactService.php");

if(isset($_POST['submit']))
{
    create($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['description']);
    header("Location: http://localhost:8080/Portfolio/index.php");
} 


?>


