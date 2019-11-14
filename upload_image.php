<?php
// Attributes of Image
$name_img = $_FILES['image1']['name'];
$type = $_FILES['image1']['type'];
$size = $_FILES['image1']['size'];
$name = $_POST['demo-name'];
$Xaxis = $_POST['demo-x'];
$Yaxis = $_POST['demo-y'];
$Zaxis = $_POST['demo-z'];

//If images exists
if ($name_img == !NULL)
{       
   //Valid formats
   if (($_FILES["image1"]["type"] == "image/jpeg") || ($_FILES["image1"]["type"] == "image/png"))
   {
       if($name != null && $Xaxis != null && $Yaxis != null && $Zaxis != null){
            // Route of upload images
            $directory = 'intranet/uploads/';
            // Move the image since the temporal directory to the assigned route
            move_uploaded_file($_FILES['image1']['tmp_name'],$directory.$name_img);
        
            $dimensions = getimagesize($directory.$name_img);
            $db = new SQLite3('Database_Files.db');

            $db->exec("CREATE TABLE IF NOT EXISTS Publish(id INTEGER PRIMARY KEY, name TEXT NOT NULL, location TEXT NOT NULL, Format_File TEXT NOT NULL, Width INT, Height INT, Xaxis TEXT, Yaxis TEXT, Zaxis TEXT, Status TEXT)");
            $db->exec("INSERT INTO Publish(name, location, Format_File, Width, Height, Xaxis, Yaxis, Zaxis, Status) VALUES ('$name','$directory$name_img','$type','$dimensions[0]','$dimensions[1]','$Xaxis','$Yaxis','$Zaxis','PUBLISHING')");
            
            header("Location: ../html5up-dimension/SaveProject.php");
       }
       else{
            header("Location: ../html5up-dimension/Alert-Data.php");
       }
    }
    else{
        header("Location: ../html5up-dimension/Alert-Format.php");
    }
}
else
{
   header("Location: ../html5up-dimension/Alert-Image.php");
}

?>