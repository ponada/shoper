<?php require_once "test.php"?>
<!DOCTYPE html>
<meta charset="utf-8">
<title>Shoper.by</title>
<meta name="description">
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
</head>
    <body>

    <?php
        $category = new Category(1, 'Product');

        /*
        $category->setName('Продукт');
        echo $category->getName();
        echo $category->getSlug();
        */

        $animalProduct = new AnimalProduct(1, 'toy', 'for cat', 'img', '5$', 'exist', 1,  5);

        echo $animalProduct->getName();



    ?>
    </body>
</html>
