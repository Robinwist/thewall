<?php



echo '<div class="accdetails">';

echo '<h2>Welcome '.$_SESSION['username'].'!</h2>';

 echo '<h3>Account Details '.'</h3>';
 echo '<p>First name: '.$_SESSION['firstname'].'</p>';
 echo '<p>Username: '.$_SESSION['username'].'</p>';
 echo '<p>Password: '.$_SESSION['password'].'</p>';



?>

<div class="accnav">
<a href="?action=logout">Log Out</a>
    <hr/><a href="?action=uploadForm">Upload</a>
    <hr/><a href="?action=edit">Edit profile</a>
</div>
