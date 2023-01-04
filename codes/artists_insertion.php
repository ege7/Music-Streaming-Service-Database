<?php 

include "config.php"; 

if (!empty($_POST['artist_name']) and !empty($_POST['artistID']) and !empty($_POST['country']) and !empty($_POST['about'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $artist_name = $_POST['artist_name']; 
    $artist_id = $_POST['artistID']; 
    $country = $_POST['country'];
    $about = $_POST['about'];
    
    
    $sql_statement = "INSERT INTO artists(artist_name, artistID, country, about) VALUES ('$artist_name','$artist_id', '$country', '$about')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['artist_name'])){
        echo "You did not enter the name of the artist";
    }
    elseif(empty($_POST['artistID'])){
        echo "You did not enter ID of the artist.";
    }
    elseif(empty($_POST['country'])){
        echo "You did not enter the country of the artist.";
    }
    elseif(empty($_POST['about'])){
        echo "You did not enter the 'about' information";
    }
   
}

?>
