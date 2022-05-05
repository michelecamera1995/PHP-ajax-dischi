<?php

include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>

<body>
    <div id="main">
        <div class="top-bar">
        </div>
        <div id="mainbottom">
            <?php
            foreach ($musiclist as $music) {
                $poster = ('<img class="ms-img" src="' . $music['poster'] . '" alt="music poster" />');
                $genre = ('<h3>' . $music['genre']  . '</h3>');
                $author = ('<h4>' . $music['author']  . '</h4>');
                echo ('<div class="ms-card">'  . $poster . $genre . $author . '</div>');
            }
            ?>
        </div>
    </div>
</body>

</html>