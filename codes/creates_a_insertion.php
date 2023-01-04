<?php 

include "config.php"; 

if (!empty($_POST['songID']) and !empty($_POST['artistID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $song_id = $_POST['songID']; 
    $artist_id = $_POST['artistID'];
    
    
    $sql_statement = "INSERT INTO creates_a(songID, artistID) VALUES ('$song_id','$artist_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['songID'])){
        echo "You did not enter ID of the song";
    }
    elseif(empty($_POST['artistID'])){
        echo "You did not enter ID of the artist.";
    }
    
   
}

?>
