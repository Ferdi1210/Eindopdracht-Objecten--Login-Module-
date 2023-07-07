<?php
$navibar = '
    <div class="navibar"> ';

    if(account::isUserLoggedIn()){
        $navibar .= '
        <a href="' . ROOTURL . '?module=account&view=logout">Logout</a>
        <a href="' . ROOTURL . '?module=account&view=account">Account</a>';
    }
    else{
        $navibar .= '
        <a href="' . ROOTURL . '?module=account&view=login">Login</a>
        <a href="' . ROOTURL . '?module=account&view=register">Register</a>';
    }

    $navibar .= '
    </div>';

    return $navibar;
?>