<?php
return '
    <html>
    <head>
        <title>Login Page</title>
    </head>
        <body>
        <h1>Login here</h1>

        <form method="post" action="' . ROOTURL . '?module=account">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="login" class="button" value="Login">
            <input type="submit" name="register" class="button" value="Register" ></a>  
        </form> 

        </body>
    </html>';
?>