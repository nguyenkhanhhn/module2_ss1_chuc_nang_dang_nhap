<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .login {
        height: 500px; width: 530px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input {
        padding: 5px; margin: 5px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Chuc nang dang nhap</title>
</head>
<body>
<form method="post" action="Chucnangdangnhap.php">
<div class="login">
    <h2>Login</h2>
    Acount:<input type="text" name="username" placeholder="username"  size="30"><br>
    Password: <input type="password" name="password" placeholder="password" size="30"><br>
    <input type="submit" value="Sing in">
</div>
</form>
</body>
</html>