<?php

    class account
    {
        private $userId = null;
        public $result = null;

        public function __construct()
        {
            // $this->accountDbObj = new db();
        }
    
        public function userLogin($Username, $Password)
        {
            if(!empty($Username) && !empty($Password))
            {
                $sql = "SELECT * FROM register WHERE username = '$Username';";
                $results = db::execute($sql);
                var_dump($results);

                if(!empty($results[0])){
                    var_dump($results[0]);
                    $dbPassword = $results[0]['password'];
                    var_dump($dbPassword);
                    
                    if(password_verify($Password, $dbPassword)){
                        //Wachtwoord klopt
                        var_dump(true); 
                    }
                    else{
                        //Wachtwoord incorrect
                        var_dump(false);
                    }
                }
            }    
            
            return false;
        }    
     
        public function isUserLoggedIn()
        {

        }
    
        public function registerUser()
        {

        }
    
        public function logoutUser()
        {

        }
    }

?>