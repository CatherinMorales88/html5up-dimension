<?php 
    $IDfile = $_POST['ID'];
    $db = new SQLite3('Database_Files.db');    
    $db->exec("UPDATE Publish SET Status = 'PUBLISHED' WHERE id = '$IDfile'");

    $results = $db->query("SELECT id,name,location,Format_File,Width,Height,Xaxis,Yaxis,Zaxis,Status FROM Publish WHERE Status = 'PUBLISHED'");
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        $jsonArray[] = $row;
    }
    //echo json_encode($jsonArray);
    $json_string = json_encode($jsonArray);
    $file = 'projects.json';
    file_put_contents($file, $json_string);

    header("Location: ../html5up-dimension/#");
?>