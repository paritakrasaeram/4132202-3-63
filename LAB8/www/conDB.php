<?
$host = "db";
$user = "root";
$pass = "test";
$db = "class_room";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    echo "Connected !!!";

}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error !!!";

}


?>