<?php
    $database = connect ("localhost", "hallucine", "root", "root");
    //mysql:host=localhost;dbname=hallucine", "root", "root"
    $sql = "SELECT * FROM `movies`;";
    $results = $database->query($sql);
    while ($row = $results->fetch()) {
        echo $row["title"] . " " . $row["release_date"] . "<br>";
    }

    function connect($host, $dbname, $login, $password){
        return new PDO("mysql:host=".$host.";dbname=".$dbname, $login, $password);
    }
?>