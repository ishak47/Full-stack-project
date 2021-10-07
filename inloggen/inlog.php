<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="../CSS/inlog.css" rel="stylesheet">
    <title>inloggen</title>
</head>
<body>

<div class="inlog">
    <div id="inside">
        <form name="loginText" action="" id="loginForm" method="post">
            <h3>Email or Username:</h3>
            <input type="text" placeholder="Email or Username" required id="user" name="user">
            <h3>Password:</h3>
            <input type="password" placeholder="Password" required id="pass" name="pass">
            <input id="button" type="submit" value="login"/>
            <h3>nog geen account <a href="registreren.php">registreer</a> hier! </h3>
        </form>
    </div>
</div>
<?php
?>
</body>
</html>