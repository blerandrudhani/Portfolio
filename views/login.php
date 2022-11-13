<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>LogIn</title>
</head>
<body>
    <div class="login-div">
        <div class="login-div-inside">
    <form action="../controllers/loginController.php" method="post">
        <h1 id="login-title">Log In</h1>
        <input readonly="readonly" name="admin" id="admin" value="admin" class="login-input"></br>
        <input type="password" name="adminPassword" id="adminPassword" placeholder="Password" required=true class="login-input"></br>
        <button type="submit" name="loginSubmit" class="login-btn">LogIn</button>
    </form>
        </div>

    </div>
</body>
</html>