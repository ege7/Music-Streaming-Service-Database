
<html>
    <head>
        <title>Database</title>
        <style>
body {
        background-image: url('https://t4.ftcdn.net/jpg/02/15/94/83/360_F_215948377_kgIhNUy4X0iYsyUfYd9KKIViSPOxclbC.jpg');
        background-size: cover;
        background-repeat: no-repeat;
}
table {
  border-collapse: collapse;
    margin: 25px 0;

    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    height: 5%;
    left: 50%;
    margin-left: -250px;
    position: absolute;
    top: 50%;
    width: 200px;
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
<tr><th>username</th><th>email</th><th>age</th><th>country</th><th>upassword</th></tr>
</thead>
<tbody>
<?php
include "config.php";

$sql_statement = "SELECT * FROM users";

$result = mysqli_query($db,$sql_statement);
while ($row = mysqli_fetch_assoc($result)) 
{
    $username = $row['username'];
    $email = $row['email'];
    $age = $row['age'];
    $country = $row['country'];
    $upassword = $row['upassword'];
   
    echo "<tr>" . "<th>" . $username . "</th>". "<th>" . $email  . "</th>" . "<th>" . $age . "</th>" . "<th>" . $country . "</th>" . "<th>" . $upassword . "</th>"."</tr>";
}

?>
</tbody>
</table>
</div>
    </body>
</html>