<?php

return '
    <html>
    <head>
        <title>Login Page</title>
    </head>
        <body>
        <h1>Login here</h1>

        <form method="post" action="' . ROOTURL . '?module=account">
            <input type="username" name="Username" placeholder="Username" required><br>
            <input type="password" name="Password" placeholder="Password" required><br><br>
            <input type="submit" name="login" class="button" value="Login">
        </form> 

        </body>
    </html>';
?>