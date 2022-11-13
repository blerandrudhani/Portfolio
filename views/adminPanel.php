<?php
require("../controllers/adminPanelController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <div>
            <h1>Admin Panel</h1>
        </div>
        <form action="../controllers/adminPanelController.php" method="post">
        <div class="logout-ap">
            <button type="submit" name="logout" class="logout-btn">LogOut</button>
        </div>
    </form>
    </header>

<table class="table">
    <thead>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Email</th>
        <th>Description</th>

    </thead>

    <tbody>
        <?php 
        for($i=0;$i<count($data);$i++){?>
        <tr>
        <td><?php echo $data[$i]['name']?></td>
        <td><?php echo $data[$i]['lastname']?></td>
        <td><?php echo $data[$i]['email']?></td>
        <td><?php echo $data[$i]['description']?></td>
    </tr>
       <?php }?>
        
    </tbody>
</table>
    
</body>
</html>
