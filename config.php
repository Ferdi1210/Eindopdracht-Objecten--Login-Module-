<?php

    define('ROOT_URL', 'http://schoolwerk.nl/GIT-HUB/Eindopdracht-PHP-LoginModule/Eindopdracht-LoginModule/');
    define('ROOT_PATH','__DIR__');
    define('HOSTNAME', '127.0.0.1');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'eindopdracht-loginmodule');

    $oConnection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    global $oConnection;

?>  