<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <script src="https://kit.fontawesome.com/8ad836cb28.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="login.css">
        <link rel="icon" type="images/x-icon" href="images/Portion Port Logo.png">
    </head>
    <body >
        <form action="mainpage.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name">
           
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"> <br>

            <button type=""submit>Login</button>
        </form>
    </body>
</html>