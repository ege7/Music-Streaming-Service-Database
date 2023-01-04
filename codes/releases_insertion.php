<?php 

include "config.php"; 

if (!empty($_POST['artistID']) and !empty($_POST['albumID']) and !empty($_POST['release_date'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $artist_id = $_POST['artistID']; 
    $album_id = $_POST['albumID'];
    $release_date = $_POST['release_date'];
    
    $sql_statement = "INSERT INTO releases(artistID, albumID, release_date) VALUES ('$artist_id','$album_id','$release_date')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 


else 
{
    if(empty($_POST['artistID'])){
        echo "You did not enter ID of the artist";
    }
    elseif(empty($_POST['albumID'])){
        echo "You did not enter ID of the album.";
    }
    elseif(empty($_POST['release_date'])){
        echo "You did not enter the release date";
    }
    
   
}

?>
