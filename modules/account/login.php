<?php
$sMessage = '';
if(isset($_POST['login'])){
    
    $result = $account->userLogin($_POST['Username'], $_POST['Password']);

    if($result)
    {
        $sMessage = '<div>Succesvol ingelogd</div>';
    }
    else
    {
        $sMessage = '<div>Gegevens komen niet overeen.</div>';
    }
}




// $sql = "SELECT username, password FROM register AND password = '$password'";
// $query = mysqli_query($connect, $sql); 

return '
    <h1>Login here</h1>
    ' . $sMessage . '
    <form method="post" action="' . ROOTURL . '?module=account&view=login">
        <input type="username" name="Username" placeholder="Username" required><br>
        <input type="password" name="Password" placeholder="Password" required><br><br>
        <input type="submit" name="login" class="button" value="Login">
    </form> 

    ';
?>