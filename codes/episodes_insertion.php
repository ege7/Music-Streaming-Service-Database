<?php 

include "config.php"; 

if (!empty($_POST['duration_e']) and !empty($_POST['episodeID']) and !empty($_POST['episode_name'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $duration_e = $_POST['duration_e']; 
    $episode_id = $_POST['episodeID']; 
    $episode_name = $_POST['episode_name'];
    
    
    $sql_statement = "INSERT INTO episodes(duration_e, episodeID, episode_name) VALUES ('$duration_e','$episode_id', '$episode_name')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['duration_e'])){
        echo "You did not enter the duration of the episode";
    }
    elseif(empty($_POST['episodeID'])){
        echo "You did not enter ID of the episode.";
    }
    elseif(empty($_POST['episode_name'])){
        echo "You did not enter name of the episode.";
    }
   
}

?>
