<!DOCTYPE html>
<html>

<head>
    <title>Form Example</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error'];?></p>
        <?php }?>
        <label for="uname">User name</label>
        <input type="text" name="uname" placeholder="User name" /><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" /><br>
        <button type="submit">Submit</button>
    </form>
    <?php     
    ?>
</body>

</html>