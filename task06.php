<?php
function validateDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

$date1 = '08-08-2024'; 
$date2 = '08/08/2024'; 

if (validateDate($date1, 'd-m-Y')) {
    echo "Date 1 is valid.\n";
} else {
    echo "Date 1 is invalid.\n";
}

if (validateDate($date2, 'd/m/Y')) {
    echo "Date 2 is valid.\n";
} else {
    echo "Date 2 is invalid.\n";
}
?>
