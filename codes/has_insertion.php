<?php 

include "config.php"; 

if (!empty($_POST['songID']) and !empty($_POST['pl_ID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $song_id = $_POST['songID']; 
    $pl_id = $_POST['pl_ID'];
    
    
    $sql_statement = "INSERT INTO has(songID, pl_ID) VALUES ('$song_id','$pl_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['songID'])){
        echo "You did not enter ID of the song";
    }
    elseif(empty($_POST['pl_ID'])){
        echo "You did not enter ID of the playlist.";
    }
    
   
}

?>
