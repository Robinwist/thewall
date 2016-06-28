<?php
$result = $mysqli->query("SELECT * FROM img ORDER BY created_at DESC");

while($img = $result->fetch_assoc()){

    echo '<div id="contain" class="clearfix">';
    echo '<div class="photo">';
//    echo '<a href="uploads/'.$img["name"].'"rel="lightbox" "><img src=' . 'uploads/' . $img['name'] . '></a>';\
//    echo '<a href="uploads/'.$img["name"].'" rel="lightbox" title="created at '.$img["created_at"].'"><img class="image" src=uploads/' .$img['name'].'></a>' . '</div>';
    echo '<a href="uploads/'.$img["name"].'" data-lightbox="image"" data-title="Uploaded by '.$img["username"].' on '.$img["created_at"].'"><img class="image" src=uploads/' .$img['name'].'></a>' . '</div>';
    echo '</div>';
    echo '</div>';
}

//<a href="img/image-2.jpg" data-lightbox="roadtrip">Image #2</a>
//	<a href="img/image-3.jpg" data-lightbox="roadtrip">Image #3</a>
//	<a href="img/image-4.jpg" data-lightbox="roadtrip">Image #4</a>
