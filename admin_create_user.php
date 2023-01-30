<?php include('form.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin create new user</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<form method="post" action="register.php">

    <?php echo display_error(); ?>
    <div class="login_reg_system">
    <h2>Create New User</h2>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Create</button>
    </div>
</div>
</form>
</body>
</html>
