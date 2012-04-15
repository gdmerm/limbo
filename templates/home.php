<html>

    <head>
        <title>My test page</title>
    </head>

    <body>
    <?php
        $data = json_decode($viewData);
        echo $data->product->name;
    ?>
    </body>

</html>