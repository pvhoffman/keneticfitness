<?php
$json = "hello, world";
do{
    if(!isset($_GET["email"])){
        $json = json_encode(array("errors" => "Invalid email address."));
        break;
    }

    if(!isset($_GET["password"])){
        $json = json_encode(array("errors" => "Invalid password."));
        break;
    }
    // password and email are set, validate against the db
    $json = json_encode(array("userid" => 222));

} while(false);
echo $json
?>
