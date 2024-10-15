<?php

    // error handler function
    // error numner is provided by errorNo and errStr defines the error

    function customError($errorNo, $errStr){
        echo "<b>Error:</b> [$errorNo] $errStr";
    }

    // set error handler
    set_error_handler("customError");

    // trigger error
    echo($test);

?>