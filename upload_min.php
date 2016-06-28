<?php
//
//$file = $_FILES['fileToUpload']['tmp_name'];
////var_dump($_FILES);
//$destination = 'uploads/' . $_FILES['fileToUpload']['name'];
////move_uploaded_file($file, $destination);
//
//if (move_uploaded_file($file, $destination)) {
//    echo "The file " . $file . " has been uploaded";
//} else {
//    echo "m8 u don goofed";
//}
//
//const DB_HOST = 'localhost';
//const DN_NAME = 'thewall';
//const DB_USERNAME = 'root';
//const DB_PASSWORD = '';
//
//$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//
//if($mysqli->connect_errno) {
//    echo 'Failed to connect to MySQL: ( ' . $mysqli->connect_errno. ') ' . $mysqli->connect_errno;
//}
//
//$filename = $_FILES['fileToUpload']['name'];
//$query = "INSERT INTO img (name, username) VALUES ('$filename', 'Robin')";
//echo $query;
//$mysqli->query($query);
//
//?>

<?php
const DB_HOST = 'localhost';
const DB_NAME = 'thewall';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: ( ' . $mysqli->connect_errno .  ') ' . $mysqli->connect_error;
}

//$action = (empty($_GET['action'])) ? '' : $_GET['action'];
//
//if($action="doUpload"){

$file = $_FILES['fileToUpload']['tmp_name'];
//var_dump($_FILES);
$destination = 'uploads/' . $_FILES['fileToUpload']['name'];
//move_uploaded_file($file, $destination);

if (move_uploaded_file($file, $destination)) {
    echo "The file " . $file . " has been uploaded";
    echo '<a href="?action=doLogin">Go back</a>';
    echo 'HOE';
} else {
    echo "m8 u don goofed";
}
//Insert data into DB
$filename = $_FILES['fileToUpload']['name'];
$query = "INSERT INTO img (name, username) VALUES ('$filename', 'Robin')";
$mysqli->query($query);

$result = $mysqli->query("SELECT * FROM img ORDER BY created_at DESC");

while($img = $result->fetch_assoc()){
    echo '<img src=' . 'uploads/' . $img['name'] . '>';
    echo '<br>';
    echo '<br>';
}



?>