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

                if(!empty($results[0])){
                    $dbPassword = $results[0]['password'];
                    
                    if(password_verify($Password, $dbPassword)){
                        //Wachtwoord klopt
                        return true; 
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