<?php

$serverName = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'data_app';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>

<?php
function encoder($value)
{
    $char = rand(100000000, 999999999);
    $id = $char . $value . $char;
    return $id;
}
function decoder($value)
{
    $char = substr($value, 9, -9);
    return $char;
}

?>
