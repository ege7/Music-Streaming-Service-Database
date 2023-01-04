<?php 

include "config.php"; 

if (!empty($_POST['duration']) and !empty($_POST['albumID']) and !empty($_POST['album_name'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $duration = $_POST['duration']; 
    $albumID = $_POST['albumID']; 
    $album_name = $_POST['album_name'];
    
    
    $sql_statement = "INSERT INTO albums (duration, albumID, album_name) VALUES ('$duration','$albumID', '$album_name')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['duration'])){
        echo "You did not enter the duration of the album";
    }
    elseif(empty($_POST['albumID'])){
        echo "You did not enter ID of the album.";
    }
    elseif(empty($_POST['album_name'])){
        echo "You did not enter name of the album.";
    }
   
}

?>
