
<html>
    <head>
        <title>SELECTION</title>
        <style>

body {
        background-image: url('https://t4.ftcdn.net/jpg/02/15/94/83/360_F_215948377_kgIhNUy4X0iYsyUfYd9KKIViSPOxclbC.jpg');
        background-size: cover;
        background-repeat: no-repeat;
}

table {
  border-collapse: collapse;
    margin: 25px 0;
    width: 100%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
thead tr {
    background-color: #7585BB;
    color: #D9D7D3;
    text-align: left;
    border-bottom: 2px solid #2F3A60;
}

td, th {
  border: 2px solid #2F3A60;
  text-align: left;
  padding: 8px;
}

tbody tr:nth-child(even) {
  background-color: #2F3A60;
}

tbody tr:nth-child(odd) {
  background-color: #56876D;
}

tbody tr:hover {
    font-weight: bold;
    background-color: #D9D7D3;
}
</style>
    </head>
    <body>
        <div allign="center">
    <table>

<?php
include "config.php";

if (isset($_POST['foo'])){

$selection_id = $_POST['foo'];
    if ($selection_id=="Songs Longer Than 5 Minutes"){
        ?>
        <tr><th>Song Name</th><th>Duration</th></tr>
        <?php
        $sql_statement = "SELECT * FROM songs WHERE duration > 300";
        $result = mysqli_query($db,$sql_statement);
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $song_name = $row['song_name'];
            $duration = $row['duration'];        
            echo "<tr>" . "<th>" . $song_name . "</th>". "<th>" . $duration . "</th>"."</tr>";
        }

    }
    if ($selection_id=="Blues Songs"){
        ?>
        <tr><th>Song Name</th></tr>
        <?php
        $sql_statement = "SELECT * FROM songs S, belongs B, genres G WHERE G.genre_name = 'blues' and G.genreID = B.genreID and  B.songID = S.songID";
        $result = mysqli_query($db,$sql_statement);
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $song_name = $row['song_name'];           
            echo "<tr>" . "<th>" . $song_name . "</th>"."</tr>";
        }

    }
    if ($selection_id=="Artists from Turkey"){
        ?>
        <tr><th>Artist Name</th></tr>
        <?php
        $sql_statement = "SELECT * FROM Artists WHERE country = 'Turkey'";

        $result = mysqli_query($db,$sql_statement);
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $artist_name = $row['artist_name'];           
            echo "<tr>" . "<th>" . $artist_name . "</th>"."</tr>";
        }
    }
    

}
else{
    echo "The form is not set";
}
?>

</table>
</div>
    </body>
</html>