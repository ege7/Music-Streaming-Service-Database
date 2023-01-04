<html>

<head>
    <title> MAIN PAGE</title>
    
</head>
<body>
<div align = "center">
    <h1>Welcome to Spotify song database</h1>

    <br><br>
    <h2>Any questions?</h2>
    <br><br><br>
    <div class=formsmall>
    <button onclick="window.location.href='admin_chat.php'">Admin</button>
    <button onclick="window.location.href='client_chat.php'">Client</button>
</div>

    <br><br>
    <h2>What do you want to see?</h2>
    <br><br><br>
    <div class=formsmall>
    <form action="selection.php" method="POST">
    <input type="submit" name="foo" value="Songs Longer Than 5 Minutes" />
    <input type="submit" name="foo" value="Blues Songs" />
    <input type="submit" name="foo" value="Artists from Turkey" />
</div>
    </form>


    <br><br>
    <h2>What do you want to add?</h2>
    <br><br><br>


    <?php

include "config.php";

?>
<style type="text/css">
  body {
        display: flex;
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
        height: 130px ;
        padding: 10px;
        width: 100%;
        position: relative;
        text-align: center;
        justify-content: center;

    }
    .formsmall {
        background-color: #7585BB;
        border-radius: 20px;
        box-sizing: border-box;
        height: 80px;
        padding: 10px;
        width: 100%;
        position: relative;
        align-items: center;


    }
    input[type=submit]{
        padding: 10px 26px;
        margin: 10px;
        overflow: hidden;
        position: relative;
        border-width: 0;
        outline: none;
        border-radius: 2px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
        float: center;
        background-color: #868AAB;
        color: #ecf0f1;
        font-family: courier, monospace;
        transition: background-color .3s;
        border-radius: 5px;
        text-align: center;
        justify-content: center;
        
    }
    input[type=submit]:hover, input[type=submit]:focus {
        background-color: #D9D7D3;
        color: black;
    }
    h3{
        text-align: center;
        font-family: courier, monospace;
        margin: 10px;
        color: #D9D7D3;
    }
    h1{
        margin: 10px;
        font-family: courier, monospace;
        color: #D9D7D3;
    }
    h2{
        font-family: courier, monospace;
        margin: 10px;
        color: #D9D7D3;
    }
    button{
        padding: 1%;
        background: #56876D;
        border-top-style: none;
        border-right-style: none;
        border-left-style: none;
        border-bottom-style: none;	
        color: #D9D7D3;
        border-radius: 5px;
        margin-top: 5px;
        font-family: courier, monospace;
        box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
    }
    button:hover{
        background-color: #EB5E55;
    }
    select {
        width: 35%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #56876D;
    }
</style>
<div class=form>
<form action="sendadmin.php" method="POST">
<input type="submit" name="foo" value="Albums" />
<input type="submit" name="foo" value="Artists" />
<input type="submit" name="foo" value="Belongs" />
<input type="submit" name="foo" value="Creates Song" />
<input type="submit" name="foo" value="Creates Playlist" />
<input type="submit" name="foo" value="Podcast Episodes" />
<input type="submit" name="foo" value="Genres" />
<input type="submit" name="foo" value="Has" />
<input type="submit" name="foo" value="Is in Album" />
<input type="submit" name="foo" value="Is in Program" />
<input type="submit" name="foo" value="Playlists" />
<input type="submit" name="foo" value="Plays" />
<input type="submit" name="foo" value="Producers" />
<input type="submit" name="foo" value="Produces" />
<input type="submit" name="foo" value="Podcast Programs" />
<input type="submit" name="foo" value="Publishes" />
<input type="submit" name="foo" value="Releases" />
<input type="submit" name="foo" value="Shares" />
<input type="submit" name="foo" value="Songs" />
<input type="submit" name="foo" value="Users" />
</div>
</form>

    <br><br>
    <h2>What do you want to delete?</h2>
    <br><br>
    <?php
    include "songs.php"
    ?>
    <br><br>
    <form action="senddeleteadmin.php" method = "POST">
    <select name="ids">


    <?php
    $sql_command = "SELECT songID FROM songs";
    $myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult)){
    $id = $id_rows['songID'];
    echo "<option value=$id>". $id ." </option>";
    }
    ?>
    </select>
    <button>DELETE with Song ID</button>
    </form>
    </div>
</body>


</html>
