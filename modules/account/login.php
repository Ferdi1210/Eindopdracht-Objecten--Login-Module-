<?php

if(isset($_POST['login'])){
    var_dump($_POST);
    
    $account->userLogin($_POST['Username'], $_POST['Password']);
   
}




// $sql = "SELECT username, password FROM register AND password = '$password'";
// $query = mysqli_query($connect, $sql); 

return '
    <h1>Login here</h1>

    <form method="post" action="' . ROOTURL . '?module=account">
        <input type="username" name="Username" placeholder="Username" required><br>
        <input type="password" name="Password" placeholder="Password" required><br><br>
        <input type="submit" name="login" class="button" value="Login">
    </form> 

    ';
?>