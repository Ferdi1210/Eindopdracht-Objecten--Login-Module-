<?php
    class db
    {

        public static $oConnection = null; // self::$oConnection

        public static function connect()
        {
            if(!empty(HOSTNAME) && !empty(USERNAME) && !empty(DATABASE))
            {
                self::$oConnection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
            }
            if(!empty(self::$oConnection->connect_error))
            {
                $sError = 'Databaseconnection unsuccesfull: ' . self::$oConnection->connect_error;
                echo $sError;
                die ('ACCESSING DB WITHOUT ENOUGH INFORMATION');
            }
            if(empty(self::$oConnection))
            {
                die('DATABASE IS NULL');
            }

            return true;
        }
            
        public static function execute($query)
        {
            $result = mysqli_query(self::$oConnection, $query);

            if(!empty(mysqli_error_list(self::$oConnection)))
            {
                var_dump(mysqli_error_list(self::$oConnection));
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