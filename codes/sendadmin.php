<?php 

include "config.php";

if (isset($_POST['foo'])){

$selection_id = $_POST['foo'];
?>

<style type="text/css">
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #0A0B0A;
        background-image: url("https://t4.ftcdn.net/jpg/02/15/94/83/360_F_215948377_kgIhNUy4X0iYsyUfYd9KKIViSPOxclbC.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .form {
        background-color: #7585BB;
        border-radius: 20px;
        box-sizing: border-box;
        height: 400px auto;
        padding: 20px;
        width: 320px;
        position: absolute;
        top: 80;
    }
    input[type=text], input[type=integer]{
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border-radius: 5px;
        width: 100%;
        background: #D9D7D3;
        margin-bottom: 5%;
        border: 1px solid #ccc;
        padding: 3%;
        color: #57534C;
        font: 95% courier, monospace;
        margin-top: 10px;

    }
    input[type=text]:focus, input[type=integer]:focus {
        box-shadow: 0 0 5px #56876D;
        padding: 3%;
        border: 1px solid #56876D;
    }

    button{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        padding: 3%;
        background: #56876D;
        border-top-style: none;
        border-right-style: none;
        border-left-style: none;	
        color: black;;
        border-radius: 5px;
        margin-top: 5px;
        font-weight: bold;
        font: 95% courier, monospace;
    }
    button:hover, button:focus {
        background-color: #D9D7D3;
        color: black;
    }

</style>

<?php
if ($selection_id=="Albums"){
    include "albums.php";?>
    <br><br><br>
    <?php

?>	
<br><br><br>
    <div class=form>
    <form action="albums_insertion.php" method = "POST">
        <input type="text" name="album_name" placeholder="Type album name"> <br>
        <input type="integer" name="albumID" placeholder="Type albumID"> <br>
        <input type="integer" name="duration" placeholder="Type album duration"> <br>
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Artists"){
    include "artists.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>

    <form action="artists_insertion.php" method = "POST">
        <input type="text" name="artist_name" placeholder="Type artist name"> <br>
        <input type="text" name="artistID" placeholder="Type artist ID"> <br>
        <input type="text" name="country" placeholder="Type country of the artist"> <br>
        <input type="text" name="about" placeholder="Briefly describe who the artist is"> <br>

        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Belongs"){
	include "songs.php"; ?>
    <br><br><br>
    <?php
    include "genres.php";?>
    <br><br><br>
    <?php
    include "belongs.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>

    <form action="belongs_insertion.php" method = "POST">
        <input type="text" name="songID" placeholder="Type song ID"> <br>
        <input type="text" name="genreID" placeholder="Type genre ID"> <br>
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Creates Song"){
	include "songs.php"; ?>
    <br><br><br>
    <?php
    include "artists.php";?>
    <br><br><br>
    <?php
    include "creates_a.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>

    <form action="creates_a_insertion.php" method = "POST">
        <input type="text" name="artistID" placeholder="Type artist ID"> <br>
        <input type="text" name="songID" placeholder="Type song ID"> <br>
        
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Creates Playlist"){
	include "users.php"; ?>
    <br><br><br>
    <?php
    include "playlists.php";?>
    <br><br><br>
    <?php
    include "creates_u.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>

    <form action="creates_u_insertion.php" method = "POST">
        <input type="text" name="username" placeholder="Type username"> <br>
        <input type="text" name="pl_ID" placeholder="Type playlist ID"> <br>

        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Podcast Episodes"){
    include "episodes.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="episodes_insertion.php" method = "POST">
        <input type="text" name="episode_name" placeholder="Type episode name"> <br>
        <input type="text" name="episodeID" placeholder="Type episode ID"> <br>
        <input type="text" name="duration_e" placeholder="Type duration of the episode"> <br>
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Genres"){
    include "genres.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="genres_insertion.php" method = "POST">
        <input type="text" name="genre_name" placeholder="Type genre"> <br>
        <input type="text" name="genreID" placeholder="Type genre ID"> <br>
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Has"){
	include "songs.php"; ?>
    <br><br><br>
    <?php
    include "playlists.php";?>
    <br><br><br>
    <?php
    include "has.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="has_insertion.php" method = "POST">
        <input type="text" name="pl_ID" placeholder="Type playlist ID">  <br>
        <input type="text" name="songID" placeholder="Type song ID"> <br>		 
        <button>INSERT</button>
</div>
<?php
}
?>


<?php
if ($selection_id=="Is in Album"){
	include "songs.php"; ?>
    <br><br><br>
    <?php
    include "albums.php";?>
    <br><br><br>
    <?php
    include "is_in_album.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="is_in_album_insertion.php" method = "POST">
        <input type="text" name="albumID" placeholder="Type album ID">  <br>
        <input type="text" name="songID" placeholder="Type song ID"> <br>		 
        <button>INSERT</button>
</div>
<?php
}
?>

<<?php
if ($selection_id=="Is in Program"){
	include "programs.php"; ?>
    <br><br><br>
    <?php
    include "episodes.php";?>
    <br><br><br>
    <?php
    include "is_in_program.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="is_in_program_insertion.php" method = "POST">
        <input type="text" name="programID" placeholder="Type program ID">  <br>
        <input type="text" name="episodeID" placeholder="Type episode ID"> <br>		 
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Playlists"){
    include "playlists.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="playlists_insertion.php" method = "POST">
        <input type="text" name="pl_name" placeholder="Type playlist name"> <br>
        <input type="text" name="pl_ID" placeholder="Type playlist ID"> <br>
        <input type="text" name="song_count" placeholder="Type song count"> <br>

        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Plays"){
	include "users.php";
    ?>
    <br><br><br>
    <?php
    include "playlists.php";?>
    <br><br><br>
    <?php
    include "plays.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>

    <form action="plays_insertion.php" method = "POST">
        <input type="text" name="username" placeholder="Type username">  <br>
        <input type="text" name="pl_ID" placeholder="Type playlist ID"> <br>		 
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Producers"){
    include "producers.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="producers_insertion.php" method = "POST">
        <input type="text" name="producer_name" placeholder="Type producer name"> <br>
        <input type="text" name="producerID" placeholder="Type producer ID"> <br>
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Produces"){
	include "producers.php";
    ?>
    <br><br><br>
    <?php
	include "albums.php";?>
    <br><br><br>
    <?php
    include "produces.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>
    <form action="produces_insertion.php" method = "POST">
        <input type="text" name="producerID" placeholder="Type producer ID">  <br>
        <input type="text" name="albumID" placeholder="Type album ID"> <br>		 
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Podcast Programs"){
    include "programs.php";?>
    <br><br><br>
    <?php
?>	
<br><br><br>
<div class=form>
    <form action="programs_insertion.php" method = "POST">
        <input type="text" name="program_name" placeholder="Type program name"> <br>
        <input type="text" name="programID" placeholder="Type program ID"> <br>
        <input type="text" name="episode_count" placeholder="Type episode count"> <br>
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Publishes"){
	include "users.php";
    ?>
    <br><br><br>
    <?php
	include "programs.php";?>
    <br><br><br>
    <?php
    include "publishes.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>

    <form action="publishes_insertion.php" method = "POST">
        <input type="text" name="username" placeholder="Type username">  <br>
        <input type="text" name="programID" placeholder="Type program ID"> <br>		 
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Releases"){
	include "artists.php";
    ?>
    <br><br><br>
    <?php
	include "albums.php";?>
    <br><br><br>
    <?php
    include "releases.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>
    <form action="releases_insertion.php" method = "POST">
        <input type="text" name="artistID" placeholder="Type artist ID">  <br>
        <input type="text" name="albumID" placeholder="Type album ID"> <br>		
        <input type="text" name="release_date" placeholder="Type release date("> <br>		  
        <button>INSERT</button>
</div>
<?php
}
?>


<?php
if ($selection_id=="Shares"){
	include "users.php";
    ?>
    <br><br><br>
    <?php
	include "episodes.php";?>
    <br><br><br>
    <?php
    include "shares.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>
    <form action="shares_insertion.php" method = "POST">
        <input type="text" name="username" placeholder="Type username">  <br>
        <input type="text" name="episodeID" placeholder="Type episode ID"> <br>		
        <input type="text" name="share_date" placeholder="Type share date"> <br>		  
        <button>INSERT</button>
</div>
<?php
}
?>

<?php
if ($selection_id=="Songs"){
	include "songs.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>

    <form action="songs_insertion.php" method = "POST">
        <input type="text" name="song_name" placeholder="Type song name">  <br>
        <input type="text" name="songID" placeholder="Type song ID"> <br>	
        <input type="text" name="duration" placeholder="Type duration of the song(in seconds)"> <br>		 	 
        <button>INSERT</button>
</div>
<?php
}
?>


<?php
if ($selection_id=="Users"){
	include "users.php";?>
    <br><br><br>
    <?php
?>	
    <div class=form>

    <form action="users_insertion.php" method = "POST">
        <input type="text" name="username" placeholder="username">  <br>
        <input type="text" name="email" placeholder="email"> <br>		
        <input type="text" name="upassword" placeholder="upassword"> <br>		 
        <input type="text" name="country" placeholder="country"> <br>		 
        <input type="text" name="age" placeholder="age"> <br>		  
        <button>INSERT</button>
</div>
<?php
}
?>


<?php
}

else
{

	echo "The form is not set.";

}

?>



