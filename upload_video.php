<?php
// Attributes of Image
$name_video = $_FILES['video']['name'];
$type = $_FILES['video']['type'];
$size = $_FILES['video']['size'];
$name = $_POST['demo-name'];
$Xaxis = $_POST['demo-x'];
$Yaxis = $_POST['demo-y'];
$Zaxis = $_POST['demo-z'];

//If images exists
if ($name_video == !NULL)
{       
   //Valid formats
   if (($_FILES["video"]["type"] == "video/mp4") || ($_FILES["video"]["type"] == "video/webm"))
   {
       if($name != null && $Xaxis != null && $Yaxis != null && $Zaxis != null){
            // Route of upload images
            $directory = 'intranet/uploads/';
            // Move the image since the temporal directory to the assigned route
            move_uploaded_file($_FILES['video']['tmp_name'],$directory.$name_video);
        
            //$dimensions = siz($directory.$name_video);
            require_once('getID3-1.9.18/getid3/getid3.php');
            $getID3 = new getID3();
            $fileinfo = $getID3->analyze($directory.$name_video);
            $width=$fileinfo['video']['resolution_x'];
            $height=$fileinfo['video']['resolution_y'];

            $db = new SQLite3('Database_Files.db');

            $db->exec("CREATE TABLE IF NOT EXISTS Publish(id INTEGER PRIMARY KEY, name TEXT NOT NULL, location TEXT NOT NULL, Format_File TEXT NOT NULL, Width INT, Height INT, Xaxis TEXT, Yaxis TEXT, Zaxis TEXT, Status TEXT)");
            $db->exec("INSERT INTO Publish(name, location, Format_File, Width, Height, Xaxis, Yaxis, Zaxis, Status) VALUES ('$name','$directory$name_video','$type','$width','$height','$Xaxis','$Yaxis','$Zaxis','PUBLISHING')");
            
            header("Location: ../html5up-dimension/SaveProjectVideo.php");
       }
       else{
            header("Location: ../html5up-dimension/Alert-DataV.php");
       }
    }
    else{
        header("Location: ../html5up-dimension/Alert-FormatV.php");
    }
}
else
{
   header("Location: ../html5up-dimension/Alert-Video.php");
}

?>