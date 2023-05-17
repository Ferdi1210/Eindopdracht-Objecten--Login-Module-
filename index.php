<?php
    include("config.php");
    session_start();
    
    if(!defined('ROOTURL'))
    {
        define('ROOTURL' , 'http://schoolwerk.nl/GIT-HUB/Eindopdracht-PHP-LoginModule/Eindopdracht-LoginModule/'); //Met deze URL maak je het vast op de ROOTURL
    }
    if(!isset($_GET['module']))
    {
        $_GET['module'] = 'login';
    }

$sHtml = '';

//Met deze regel ga ik kijken of er een module is ingesteld
if(!empty($_GET['module']))
{
  $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] . DIRECTORY_SEPARATOR . 'index.php';
  
  $sNavibar = include('navibar.php');

    //Module inladen
    if(file_exists($sPath))
    {

        // $sHtml .= 'file exists!';
        $sHtml .= include($sPath);

    }
    else
    {
        $sHtml .= 'error, no module found!';
    }

    //print_r($sPath);
}

else
{
    $sHtml .='error, no module found!';
}

echo $sHtml;

?>

<!DOCTYPE html>
<html>
    <body>
        <?php echo $sNavibar; ?>
  
        <div class="inhoud"></div>
    </body>
</html>