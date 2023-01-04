<?php 

include "config.php"; 

if (!empty($_POST['song_count']) and !empty($_POST['pl_ID']) and !empty($_POST['pl_name'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $song_count = $_POST['song_count']; 
    $pl_id = $_POST['pl_ID']; 
    $pl_name = $_POST['pl_name'];
    
    
    $sql_statement = "INSERT INTO playlists(song_count, pl_ID, pl_name) VALUES ('$song_count','$pl_id', '$pl_name')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['song_count'])){
        echo "You did not enter the song count of the playlist";
    }
    elseif(empty($_POST['pl_ID'])){
        echo "You did not enter ID of the playlist.";
    }
    elseif(empty($_POST['pl_name'])){
        echo "You did not enter name of the playlist.";
    }
   
}

?>
