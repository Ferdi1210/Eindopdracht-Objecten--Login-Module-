<?php

$sContent = '';

  if(!empty($_GET['team']))
{
  // $_GET['team']  == A1
  // $_GET['team']  == B2
  // $_GET['team']  == C3
  // $_GET['team']  == D4
  // $_GET['team']  == E5

  // __DIR__ == C:\Wamp64\www\schoolwerk\FCRodeRaketten\modules\teams
  $sPath = __DIR__ . DIRECTORY_SEPARATOR . $_GET['team'] . '.php';   // C:\Wamp64\www\schoolwerk\FCRodeRaketten\modules\teams\B2.php

    //Module inladen
    if(file_exists($sPath))
    {

        // $shtml .= 'file exists!';
        $sContent .= include($sPath);

    }
    else
    {
        $sContent .= 'Ohno, no team found!';
    }

    //print_r($sPath);
}
else
  {
      $sContent .='U heeft nog geen team gekozen!';
  }

  /*
  if ($_GET['team']){
    $_GET['module'] = 'A1';

  }
*/
  $return = '<div class="teams"> 
    <a href="' . ROOTURL . '?module=teams&team=A1">A1</a>
    <a href="' . ROOTURL . '?module=teams&team=B2">B2</a> 
    <a href="' . ROOTURL . '?module=teams&team=C3">C3</a> 
    <a href="' . ROOTURL . '?module=teams&team=D4">D4</a> 
    <a href="' . ROOTURL . '?module=teams&team=E5">E5</a>
  </div>';

  return $return . $sContent;

?>