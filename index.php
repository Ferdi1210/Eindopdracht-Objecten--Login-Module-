<?php
    require("config.php");
    require("functions.php");

    session_start();
    
    if(!defined('ROOTURL'))
    {
        define('ROOTURL' , 'http://schoolwerk.nl/GIT-HUB/Eindopdracht-PHP-LoginModule/Eindopdracht-LoginModule/'); 
    }
    if(!isset($_GET['module']))
    {
        $_GET['module'] = 'login';
    }

$sHtml = '';
$sNavibar = include('navibar.php');

if(!empty($_GET['module']))
{
    $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] . DIRECTORY_SEPARATOR . 'index.php';

    if(file_exists($sPath))
    {
        $sHtml .= include($sPath);
    }
    else
    {
        $sHtml .= 'error, no module found!';
    }
}
else
{
    $sHtml .='error, no module found!';
}
    
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php echo $sNavibar; ?>
  
        <div class="inhoud"><?php echo $sHtml; ?></div>
    </body>
</html>