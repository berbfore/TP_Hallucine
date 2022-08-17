<?php
    try {
        $database = connect ("localhost", "hallucine", "root", "root");
    } catch (Exception $error) {
        echo "Erreur de connexion à la BDD.<br>";
        die("ERROR:".$error->getMessage());
    }
    //mysql:host=localhost;dbname=hallucine", "root", "root"
    $sql = "SELECT * FROM `movies`;";
    $results = $database->query($sql);
    //var_dump($results->fetch(PDO::FETCH_NUM)); une alternative
    //while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
     //   echo $row["title"] . " " . $row["release_date"] . "<br>";
   // }
    
   //fetchAll
   $rows = $results->fetchAll(PDO::FETCH_ASSOC);
   foreach ($rows as $key => $value) {
    echo $value["title"] . " " . $row["release_date"] . "<br>";
   }

    function connect($host, $dbname, $login, $password){
        return new PDO("mysql:host=".$host.";dbname=".$dbname, $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
?>