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
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>You are Member</h1>
    <p><strong>Hi</strong>,
        <?php echo $_SESSION['user']; ?>
    </p>
    <p><strong><a href="logout.php">Logout</a></strong></p>


</body>
</html>

<?php } ?>