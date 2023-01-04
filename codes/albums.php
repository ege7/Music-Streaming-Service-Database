<html>
    <head>
        <title>Database</title>
        <style>
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
      <thead>
<tr><th>albumID</th><th>album_name</th><th>duration</th></tr>
</thead>
<tbody>
<?php
include "config.php";

$sql_statement = "SELECT * FROM albums";

$result = mysqli_query($db,$sql_statement);
while ($row = mysqli_fetch_assoc($result)) 
{
    $album_id = $row['albumID'];
    $album_name = $row['album_name'];
    $duration = $row['duration'];
   
    echo "<tr>" . "<th>" . $album_id . "</th>". "<th>" . $album_name  . "</th>" . "<th>" . $duration . "</th>"."</tr>";
}

?>
</tbody>
</table>
</div>
    </body>
</html>