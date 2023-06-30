<?php
$navibar = '
    <div class="navibar"> ';

    if(account::isUserLoggedIn()){
        $navibar .= '
        <a href="' . ROOTURL . '?module=account&view=logout">Logout</a>';
    }
    else{
        $navibar .= '
        <a href="' . ROOTURL . '?module=account&view=login">Login</a>';
    }

    $navibar .= '
        <a href="' . ROOTURL . '?module=account&view=register">Register</a>  
        <a href="' . ROOTURL . '?module=account&view=account">Account</a>  
    </div>';


    return $navibar;
?>