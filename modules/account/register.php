<?php

if(isset($_GET['page'])) {
    if($_GET['page'] == 'send'){
      otherQuery("INSERT INTO `register`(`username`, `password`, `firstname`, `lastname`, `mail`) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['firstname']."','".$_POST['password']."','".$_POST['mail']."');");
      
      $sMessage = '<div>Formulier is succesvol verzonden</div>';
    }
  }
return '
        <h1>Register here</h1>
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