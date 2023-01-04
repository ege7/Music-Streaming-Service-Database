<?php 

include "config.php"; 

if (!empty($_POST['genre_name']) and !empty($_POST['genreID'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $genre_name = $_POST['genre_name']; 
    $genreID = $_POST['genreID']; 
    
    
    $sql_statement = "INSERT INTO genres(genre_name, genreID) VALUES ('$genre_name','$genreID')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['genre_name'])){
        echo "You did not enter name of genre.";
    }
    elseif(empty($_POST['genreID'])){
        echo "You did not enter ID of the genre.";
    }
    
   
}

?>
