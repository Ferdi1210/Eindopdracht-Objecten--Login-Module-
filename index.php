<?php

  if(!defined('ROOTURL'))
  {
      define('ROOTURL' , 'http://schoolwerk.nl/FCRodeRaketten/'); //Met deze URL maak je het vast op de ROOTURL
  }
  if(!isset($_GET['module']))
  {
      $_GET['module'] = 'home';
  }

$sHtml = '';
//echo include($sPath);
//var_dump($_GET);

//Met deze regel ga ik kijken of er een module is ingesteld
if(!empty($_GET['module']))
{
  $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] . DIRECTORY_SEPARATOR . 'index.php';

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

  $sNavibar = include('navibar.php');

?>
<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="navifooter.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
  <?php echo $sNavibar; ?>
  
  <div class="inhoud">
    <div><?php echo $sHtml; ?></div>
  </div>

  <div class="footer">
      <p>Footer</p>
      <a href="<?= ROOTURL; ?>?module=home">Home</a> 
      <a href="<?= ROOTURL; ?>?module=contact">Contact</a>
      <a href="<?= ROOTURL; ?>?module=teams">Teams</a>
  </div>

  </body>
</html>