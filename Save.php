<?php 
    $db = new SQLite3('Database_Files.db');
    $res = $db->query('SELECT * FROM Publish');
    $NewID = 0;
    $Location = "";
    while ($row = $res->fetchArray()) {											
        if ($row['id']>$NewID){
            $NewID = $row['id'];
            $Location = $row['location'];
        }
        else{
            $Location = $Location;
        }
    }				
    echo $NewID;
    
    $db->exec("UPDATE Publish SET Status = 'STOPPED' WHERE id = '$NewID'");
    header("Location: ../html5up-dimension");
?>