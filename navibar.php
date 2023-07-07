<?php

    $navibar = '
    <div class="navibar"> 
        <a href="' . ROOTURL . '?module=home">Home</a> 
        <a href="' . ROOTURL . '?module=contact">Contact</a>
        <a href="' . ROOTURL . '?module=teams">Teams</a>';

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
        <img src="' . ROOTURL . 'FcLogoName.PNG" class="logo1">
    </div>';

    return $navibar;

?>