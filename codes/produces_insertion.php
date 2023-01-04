<?php 

include "config.php"; 

if (!empty($_POST['producerID']) and !empty($_POST['albumID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $producer_id = $_POST['producerID']; 
    $album_id = $_POST['albumID'];
    
    
    $sql_statement = "INSERT INTO produces(producerID, albumID) VALUES ('$producer_id','$album_id')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['producerID'])){
        echo "You did not enter ID of the producer";
    }
    elseif(empty($_POST['albumID'])){
        echo "You did not enter ID of the album.";
    }
    
   
}

?>
