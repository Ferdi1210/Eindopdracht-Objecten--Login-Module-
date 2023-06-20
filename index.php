<?php
    require_once('config.php');
    require_once("account.class.php");
    require("db.class.php");
    
    session_start();
    
    if(!defined('ROOTURL'))
    {
        define('ROOTURL' , 'http://schoolwerk.nl/GIT-HUB/Eindopdracht-PHP-LoginModule/Eindopdracht-LoginModule/'); 
    }
    // if(!isset($_GET['module']))
    // {
    //     $_GET['module'] = 'login';
    // }

$sHtml = '';
$sNavibar = include('navibar.php');
$accountObj = new account();
$accountObj->userLogin();
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
    $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'account' . DIRECTORY_SEPARATOR . 'index.php';
    $sHtml .= include($sPath);
}
    // echo 'hello world';
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