<?php
$sMessage = '';
if(isset($_POST['register']))
{

    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['mail']))
    {
      $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
      
      $result = db::execute(
"INSERT INTO `register`
(`username`, `password`, `firstname`, `lastname`, `mail`) 
VALUES
('".$_POST['username']."','".$hashedPassword."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['mail']."');");
        if($result)
        {
          $sMessage = '<div>Succesvol geregistreerd</div>';
        }
        else
        {
          $sMessage = '<div>Niet succesvolle registratie, de gegevens zijn niet opgeslagen.</div>';
        }
    }
    else
    {        
      $sMessage = '<div>Niet succesvolle registratie, niet alle velden zijn volledig ingevuld.</div>';
    }
}
  
return '
      <h1>Register here</h1>
      ' . $sMessage . '
      <form action="' . ROOTURL . '?module=account&view=register&page=send" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="text" name="firstname" placeholder="Firstname" required><br>
        <input type="text" name="lastname" placeholder="Lastname" required><br>
        <input type="email" name="mail" placeholder="E-Mail" required><br><br>
        <input type="submit" name="register" class="button" value="Register">
      </form>
       
';

?>