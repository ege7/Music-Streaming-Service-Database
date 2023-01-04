<?php 

include "config.php"; 

if (!empty($_POST['duration']) and !empty($_POST['songID']) and !empty($_POST['song_name'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $duration = $_POST['duration']; 
    $songID = $_POST['songID']; 
    $song_name = $_POST['song_name'];
    
    
    $sql_statement = "INSERT INTO songs(duration, songID, song_name) VALUES ('$duration','$songID', '$song_name')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['duration'])){
        echo "You did not enter the duration of the song";
    }
    elseif(empty($_POST['songID'])){
        echo "You did not enter ID of the song.";
    }
    elseif(empty($_POST['song_name'])){
        echo "You did not enter name of the song.";
    }
   
}

?>
