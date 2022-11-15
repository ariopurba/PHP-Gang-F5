<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <form action="loginrespon.php" method="post">
        <table class="center">
            <tr>
                <td></td>
                <td><h2>Login</h2></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Masuk"></td>
            </tr>
        </table>
    </form>
</body>
</html>