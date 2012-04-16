<?php
    $view = json_decode($viewData);
?>
<html>

    <head>
        <title>My test page</title>
    </head>

    <body>
        <?php foreach($view->data->products as $product) { ?>
            <h2><?php echo $product->name?></h2>
            <ul>
                <li>Studio: <?php echo $product->studio ?></li>
                <li>Rating: <?php echo $product->rating ?></li>
                <li>Released: <?php echo $product->releaseDate ?></li>
            </ul>
        <?php } ?>
    </body>

</html>