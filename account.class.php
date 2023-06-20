<?php

    class account
    {
        public $accountDbObj = null;
        private $userId = null;
        public $result = null;

        public function __construct()
        {
            $this->accountDbObj = new db();

        }
    
        public function userLogin()
        {
            if(!empty($_POST)){
                if(isset($_POST['Username']) && isset($_POST['Password'])){
                    $this->result = $this->accountDbObj->execute("SELECT * FROM `register` WHERE username = '" . $_POST['Username'] . "' AND password = PASSWORD('" . $_POST['Password'] . "');");
                    if(!empty($this->result)){
                        // return
                    }
                } else {
                    // echo 'test';
                }
            }
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