<?php

    account::logoutUser();
    header('Location: ' . ROOTURL . '?module=account&view=login');
    exit;
?>