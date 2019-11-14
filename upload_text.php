<?php
// Attributes of Text
$content = $_POST['demo-text'];
$name = $_POST['demo-name'];
$Xaxis = $_POST['demo-x'];
$Yaxis = $_POST['demo-y'];
$Zaxis = $_POST['demo-z'];
echo $Xaxis;
echo $text;

//If images exists
if ($content == !NULL)
{      
    if($name != null && $Xaxis != null && $Yaxis != null && $Zaxis != null){

        // Route of upload text files
        $text = 'intranet/uploads/temp.txt';
        $open = fopen($text,'r+');
        $content = ftruncate($open,filesize($text));
        fclose($open);
        $content = $_POST['demo-text'];
        $characters = strlen($content);
    
        // Guardar Archivo
        $open = fopen($text,'w');
        $r = fwrite($open,$content);
        fclose($open);
    
        //$dimensions = getimagesize($directory.$name_img);
        $db = new SQLite3('Database_Files.db');

        $db->exec("CREATE TABLE IF NOT EXISTS Publish(id INTEGER PRIMARY KEY, name TEXT NOT NULL, location TEXT NOT NULL, Format_File TEXT NOT NULL, Width INT, Height INT, Xaxis TEXT, Yaxis TEXT, Zaxis TEXT, Status TEXT)");
        $db->exec("INSERT INTO Publish(name, location, Format_File, Width, Height, Xaxis, Yaxis, Zaxis, Status) VALUES ('$name','$text','text','$characters','1','$Xaxis','$Yaxis','$Zaxis','PUBLISHING')");
        
        header("Location: ../html5up-dimension/SaveProjectText.php");
    }
    else{
        header("Location: ../html5up-dimension/Alert-Data.php");
    }
}
else
{
   header("Location: ../html5up-dimension/Alert-Text.php");
}

?>