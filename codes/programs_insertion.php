<?php 

include "config.php"; 

if (!empty($_POST['episode_count']) and !empty($_POST['programID']) and !empty($_POST['program_name'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $episode_count = $_POST['episode_count']; 
    $program_id = $_POST['programID']; 
    $program_name = $_POST['program_name'];
    
    
    $sql_statement = "INSERT INTO programs(episode_count, programID, program_name) VALUES ('$episode_count','$program_id', '$program_name')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['episode_count'])){
        echo "You did not enter the episode count of the program";
    }
    elseif(empty($_POST['programID'])){
        echo "You did not enter ID of the program.";
    }
    elseif(empty($_POST['program_name'])){
        echo "You did not enter name of the program.";
    }
   
}

?>
