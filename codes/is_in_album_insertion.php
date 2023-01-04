<?php 

include "config.php"; 

if (!empty($_POST['songID']) and !empty($_POST['albumID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $song_id = $_POST['songID']; 
    $album_id = $_POST['albumID'];
    
    
    $sql_statement = "INSERT INTO is_in_album(songID, albumID) VALUES ('$song_id','$album_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['songID'])){
        echo "You did not enter ID of the song";
    }
    elseif(empty($_POST['albumID'])){
        echo "You did not enter ID of the album.";
    }
    
   
}

?>
