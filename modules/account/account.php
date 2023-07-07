<?php

    if(account::isUserLoggedIn())
    {
        $aUser = account::getUser();
        // var_dump($aUser);
        // var_dump($aUser['username']);

        return '
    <h1>Account Gegevens</h1>
    <form method="post" action="' . ROOTURL . '?module=account&view=account">
        <input type="username" name="Username" placeholder="Username" value="' . $aUser['username'] . '" required><br>
        <input type="username" name="Username" placeholder="Username" value="' . $aUser['firstname'] . '" required><br>
        <input type="username" name="Username" placeholder="Username" value="' . $aUser['lastname'] . '" required><br>
        <input type="username" name="Username" placeholder="Username" value="' . $aUser['mail'] . '" required><br>
    </form> 

    ';

    }
    else
    {
    
        return '
    <h1>Ga naar de login pagina</h1>      
    <a href="' . ROOTURL . '?module=account&view=login">Login Page</a>
';
    }

?>