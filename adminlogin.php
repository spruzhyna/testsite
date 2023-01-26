<?php include('adminform.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login system </title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<form method="post" action="login.php">

    <?php echo display_error(); ?>
   <div class="login_reg_system">
   <h2>Login</h2>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_btn">Login</button>
    </div>
    <p>
        Not yet a member? <a href="adminregister.php">Sign up</a>
    </p>
    </div>
</form>
<script>
    Window.localStorage
</script>
</body>
</html>
