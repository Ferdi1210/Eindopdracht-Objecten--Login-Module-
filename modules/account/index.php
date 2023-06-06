<?php
$accountContent = '';

if(!empty($_GET['view']))
{
    $sPath = __DIR__ . DIRECTORY_SEPARATOR . $_GET['view'] . '.php';

    if(file_exists($sPath))
    {
        $accountContent .= include($sPath);
    }
    else
    {
        $accountContent .= '</br>error, no module found!';
    }
}
else
{
    $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'login.php';
    $accountContent .= include($sPath);
}

return($accountContent);
?>