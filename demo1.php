<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="username"name="username" id="username">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email"name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="passwrod"name="password" id="password">
        </div>

            <label for="confirm-password">Confirm Password</label>
            <input type="password"name="confirm-password" id="confirm=password">

        <div>   
            <input type="submit"value="Resgister" name="register">
        </div>
    </form>
</body>
</html>