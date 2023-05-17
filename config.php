<?php

    define('ROOT_URL', 'http://schoolwerk.nl/GIT-HUB/Eindopdracht-PHP-LoginModule/Eindopdracht-LoginModule/');
    define('ROOT_PATH','__DIR__');
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'Eindopdracht-LoginModule');

    $oConnection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    global $oConnection;

?>