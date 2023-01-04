<?php 

include "config.php"; 

if (!empty($_POST['producer_name']) and !empty($_POST['producerID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $producer_name = $_POST['producer_name']; 
    $producerID = $_POST['producerID']; 
    
    
    $sql_statement = "INSERT INTO producers(producer_name, producerID) VALUES ('$producer_name','$producerID')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['producer_name'])){
        echo "You did not enter name of producer.";
    }
    elseif(empty($_POST['producerID'])){
        echo "You did not enter ID of the producer.";
    }
    
   
}

?>
