<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Authentication</title>
</head>
<body>
    <div id='card'>
        <div id='card-content'>
            <div id='card-title'>
            <h2>Login User</h2>
            <div class="underline-title"></div>
            </div>
        </div>
    
    <form action="sistem.php?op=in" method="post" class="form">
        <input type="text" class="form-content" name="usr" placeholder="Username">
    <div class="form-border"></div><br>
        <input type="password" class="form-content" name="psw" placeholder="Password">
    <div class="form=border"></div><br>
        <input id="simpan-btn" type="submit" value="Login">
    </form>
    </div>
</body>
</html>