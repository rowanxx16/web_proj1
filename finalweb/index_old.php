<?php

session_start();

if (isset($_SESSION["user_id"])){
    $mysqli = require __DIR__."/config.php";
    $sql = "SELECT * FROM signup 
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
    <h1>home</h1>
    <?php if (isset($user)):?>
        <p> Hello <?= htmlspecialchars($user["name"])?> </P>
        <p><a href="logout.php">Log Out</a></p>
    <?php else: ?>
        <p> <a href="signup.php"> login </a> or <a href="signup.html">signup </a> </p>
    
    <?php endif; ?>

</body>
</html>
