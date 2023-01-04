<?php 

include "config.php"; 

if (!empty($_POST['episodeID']) and !empty($_POST['programID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $episode_id = $_POST['episodeID']; 
    $program_id = $_POST['programID'];
    
    
    $sql_statement = "INSERT INTO is_in_program(episodeID, programID) VALUES ('$episode_id','$program_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['episodeID'])){
        echo "You did not enter ID of the episode";
    }
    elseif(empty($_POST['programID'])){
        echo "You did not enter ID of the program.";
    }
    
   
}

?>
