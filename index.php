    require_once('config.php');
    require_once("db.class.php");
    require_once("functions.php");
    db::connect();
    session_start();
    require_once("account.class.php");
$sHtml = '';
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

$sNavibar = include('navibar.php');

?>

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
  if(!isset($_GET['module']))
  {
      $_GET['module'] = 'home';
  }