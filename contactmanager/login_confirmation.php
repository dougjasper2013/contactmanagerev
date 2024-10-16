<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Manager - Login Confirmation</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <?php include("header.php"); ?>
        <main>
            <h1>Login Confirmation</h1>
            <p> Thank you, <?php echo $_SESSION["userName"]; ?>, you are successfully
                logged in and may proceed to the Contact List by clicking on the link below.                
            </p>

            <p><a href="index.php">Contact List</a></p>
        </main>
        <?php include("footer.php"); ?>
    </body> 
</html>