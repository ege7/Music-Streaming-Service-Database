<?php 

include "config.php"; 

if (!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['upassword']) and !empty($_POST['country']) and !empty($_POST['age'])){ 
    #eger butun bilgileri girmelerini istiyosak diye
    $username = $_POST['username']; 
    $email = $_POST['email']; 
    $upassword = $_POST['upassword'];
    $country = $_POST['country'];
    $age = $_POST['age'];
    
    $sql_statement = "INSERT INTO users(username, email, upassword, country, age) VALUES ('$username', '$email', '$upassword', '$country', '$age')"; 

    $result = mysqli_query($db, $sql_statement);
    if ($result === false) {
        echo "Error: " . mysqli_error($db);
    } else {
        echo "Your result is: " . $result;
    }
} 
else {
    if(empty($_POST['username'])){
        echo "You did not enter the username";
    }
    elseif(empty($_POST['email'])){
        echo "You did not enter the email of the user.";
    }
    elseif(empty($_POST['upassword'])){
        echo "You did not enter the password of the user";
    }
    elseif(empty($_POST['country'])){
        echo "You did not enter the country of the user.";
    }
    elseif(empty($_POST['age'])){
        echo "You did not enter the age of the user";
    }
}

?>
