<?php

include "config.php";

 
 if (isset($_POST['episodeID'])){

    $episode_id = $_POST['episodeID'];
    $program_id = $_POST['programID'];

    $sql_statement = "INSERT INTO is_in_program(episodeID, programID) 
                        VALUES ('$episode_id', '$program_id')";
    $result = mysqli_query($db, $sql_statement);

    header("Location: index.php");

 }

 else{
    echo "The form is not set.";
 }

?>