<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/main.css"/>
    <link rel="stylesheet" href="styles/normalize.css"/>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <link href="styles/lightbox.css" rel="stylesheet" />
    <title>The Wall - Robin Wist</title>
</head>

<body>

<header class="mainHeader">
    <h1>The Wall</h1>

    <?php
    if(isset($_SESSION['username'])) {
        include 'views/navbarTrue.php';
    } else {
        include 'views/navbarFalse.php';
    }
    ?>

</header>







</body>



</html>