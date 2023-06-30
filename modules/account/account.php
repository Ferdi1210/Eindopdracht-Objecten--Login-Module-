<?php

    if(account::isUserLoggedIn())
    {
        $aUser = account::getUser();
        var_dump($aUser);
    }
    else
    {
    
        return '
    <h1>Ga naar de login pagina</h1>      
    <a href="' . ROOTURL . '?module=login">Login Page</a>
';
    }

?>