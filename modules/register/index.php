<?php
return '
    <html>
    <head>
        <title>Register Page</title>
    </head>
        <body>

        <h1>Register here</h1>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="home" class="button" value="Home">
            <input type="submit" name="register" class="button" value="Register">
        </form> 

        </body>
    </html>';

?>

