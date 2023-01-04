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
<tr><th>songID</th><th>pl_ID</th></tr>
</thead>
<tbody>
<?php
include "config.php";

$sql_statement = "SELECT * FROM has";

$result = mysqli_query($db,$sql_statement);
while ($row = mysqli_fetch_assoc($result)) 
{
    $song_id = $row['songID'];
    $pl_id = $row['pl_ID'];
   
    echo "<tr>" . "<th>" . $song_id . "</th>". "<th>" . $pl_id  . "</th>" . "<tr>";
}

?>
</tbody>
</table>
</div>
    </body>
</html>