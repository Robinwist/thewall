<?php

if(isset($_POST['edit'])){

    $query = "UPDATE users SET username='".$_POST['username']."', password='".$_POST['password']."' WHERE id='".$_SESSION['id']."'";

    $result = $mysqli->query($query);

}



?>



<form method="post">

    <input type="text" placeholder="<?php echo $_SESSION['username']?>"name="username">
    <input type="password" name="password">

    <input type="submit" name="edit" value="Send">

</form>