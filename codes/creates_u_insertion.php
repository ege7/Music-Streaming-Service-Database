<?php 

include "config.php"; 

if (!empty($_POST['username']) and !empty($_POST['pl_ID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $username = $_POST['username']; 
    $pl_id = $_POST['pl_ID'];
    
    
    $sql_statement = "INSERT INTO creates_u(username, pl_ID) VALUES ('$username','$pl_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['username'])){
        echo "You did not enter the username";
    }
    elseif(empty($_POST['pl_ID'])){
        echo "You did not enter ID of the playlist.";
    }
    
   
}

?>
