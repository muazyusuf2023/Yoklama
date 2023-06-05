<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)){
    $servername= "localhost";
    $username = "root";
    $password = "";
    $dbname = "administrator";

    $connection = new mysqli($servername, $username,$password, $dbname);
    if ($connection->connect_error){
        die("connection failed:" .$connection->connect_error);
    }
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql_query = "INSERT INTO users(username, password) values ('username','password')";
    if ($connection->query($sql_query)=== true){
        echo "New user successfully enrolled";
    }
    else{
        echo "Error:" .$sql_query . $connection->error;
    }
}

?>
