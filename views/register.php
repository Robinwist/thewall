
<form method="POST" action="">

    <input type="text" name="firstname_reg" placeholder="First name">
    <br>
    <br>
    <input type="text" name="username_reg" placeholder="Username">
    <br>
    <br>
    <input type="password" name="password_reg" placeholder="Password">
    <br>
    <br>
    <input type="submit" name="submit" value="Register">
    <br>
    <br>
    <a href="?action=login">Back to login</a>
</form>

<?php

require_once 'config/config.php';
require_once 'library/database.php';

if(isset($_POST['submit'])) {

    $firstname = $_POST['firstname_reg'];
    $username = $_POST['username_reg'];
    $password = $_POST['password_reg'];

    $query = "INSERT INTO users (firstname, username, password) VALUES ('$firstname', '$username', '$password')";

    $res_users = $mysqli->query($query);

    echo "Welcome!";
}

?>