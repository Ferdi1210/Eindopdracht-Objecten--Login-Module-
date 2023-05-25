<?php

function selectQuery($query){
    global $oConnection;
    $result = mysqli_query($oConnection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function otherQuery($query){
    global $oConnection;
    
    mysqli_query($oConnection, $query);

    if(!empty(mysqli_error_list($oConnection))){
        var_dump(mysqli_error_list($oConnection));
    }
    return '<script>console.log("GELUKT")</script>';
}
?>  