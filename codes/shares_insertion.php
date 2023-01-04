<?php 

include "config.php"; 

if (!empty($_POST['episodeID']) and !empty($_POST['username']) and !empty($_POST['share_date'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $episode_id = $_POST['episodeID']; 
    $username = $_POST['username'];
    $share_date = $_POST['share_date'];
    
    
    $sql_statement = "INSERT INTO shares(episodeID, username, share_date) VALUES ('$episode_id','$username','$share_date')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['episodeID'])){
        echo "You did not enter ID of the episode";
    }
    elseif(empty($_POST['username'])){
        echo "You did not enter the username.";
    }
    elseif(empty($_POST['share_date'])){
        echo "You did not enter the share date";
    }
    
   
}

?>
