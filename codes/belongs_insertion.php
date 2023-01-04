<?php 

include "config.php"; 

if (!empty($_POST['songID']) and !empty($_POST['genreID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $song_id = $_POST['songID']; 
    $genre_id = $_POST['genreID'];
    
    
    $sql_statement = "INSERT INTO belongs(songID, genreID) VALUES ('$song_id','$genre_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['songID'])){
        echo "You did not enter ID of the song";
    }
    elseif(empty($_POST['genreID'])){
        echo "You did not enter ID of the genre.";
    }
    
   
}

?>
