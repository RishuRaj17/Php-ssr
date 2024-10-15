<?php

    function customError($errorNo, $errStr){
        echo "<b>Error:</b> [$errorNo] $errStr <br>";
        echo "Ending Script";
        die();
    }

    set_error_handler("customError",E_USER_WARNING);

    // trigger error

    $test=2;
    if($test>=1){
        trigger_error("Value must be 1 or below", E_USER_WARNING);
    }

?>