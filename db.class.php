<?php
    class db
    {

        public $oConnection = null; // $this->oConnection

        public function __construct()
        {
            if(!empty(HOSTNAME) && !empty(USERNAME) && !empty(DATABASE))
            {
                $this->oConnection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
            }
            if(!empty($this->oConnection->connect_error))
            {
                $sError = 'Databaseconnection unsuccesfull: ' . $this->oConnection->connect_error;
                echo $sError;
                die ('ACCESSING DB WITHOUT ENOUGH INFORMATION');
            }
            if(empty($this->oConnection))
            {
                die('DATABASE IS NULL');
            }

            return true;
        }
            
        function execute($query)
        {
            $result = mysqli_query($this->oConnection, $query);

            if(!empty(mysqli_error_list($this->oConnection)))
            {
                var_dump(mysqli_error_list($this->oConnection));
            }

            // Bekijk of in de $query een SELECT bevat.
            if(strpos($query, 'SELECT') !== false)
            {
                $result = $result->fetch_all();
            }

            return $result;
        }  
    }

?>