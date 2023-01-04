<?php 

include "config.php"; 

if (!empty($_POST['username']) and !empty($_POST['programID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $username = $_POST['username']; 
    $program_id = $_POST['programID'];
    
    
    $sql_statement = "INSERT INTO publishes(username, programID) VALUES ('$username','$program_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['username'])){
        echo "You did not enter the username";
    }
    elseif(empty($_POST['programID'])){
        echo "You did not enter ID of the program.";
    }
    
   
}

?>
