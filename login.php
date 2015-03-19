<?php
$json = "";
do{
    if(!isset($_GET["email"])){
        $json = json_encode(array("errors" => "Email address not specified."));
        break;
    }

    if(!isset($_GET["password"])){
        $json = json_encode(array("errors" => "Password not specified."));
        break;
    }
    try {
        $conn = new PDO ("sqlsrv:server = tcp:lxi9spfs47.database.windows.net,1433; Database = keneticfitness-database", "keneticfitness-database", "{J>a3B0;mp}");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        $stmt = $conn->prepare("select client_id from client_t where client_email = :email and client_password = :password ");
        $stmt->bindParam(":email", $_GET["email"]);
        $stmt->bindParam(":password", $_GET["password"]);
        $stmt->execute();
        $recs = $stmt->fetchAll();
        if(!$recs){
            $json = json_encode(array("errors" => "Invalid user name or password."));
            break;
        }
        $conn = null;
    } catch ( PDOException $e ) {
        $json = json_encode(array("errors" => "Error connecting to SQL Server: " . $e->getMessage()));
    }

} while(false);
echo $json
?>


