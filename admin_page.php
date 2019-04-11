<?php 

    session_start(); 

    if (!$_SESSION['userid']) {
        header("location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>You are Administrator</h1>
    <p><strong>Hi</strong>, <?php echo $_SESSION['user']; ?></p>
    <br>
    <p><a href="logout.php">Logout</a></p>

</body>
</html>

<?php } ?>