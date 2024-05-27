<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./login-process.php" method="POST">

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div>
    <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="Login"></input>


    </form>
</body>
</html>