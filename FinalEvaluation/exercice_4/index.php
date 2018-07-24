<?php

require_once 'Cat.php';

try {
    $cats = [
        new Cat("Oscar", 7, "blanc", "male", "Persan"),
        new Cat("Oreo", 3, "noir", "female", "Gouttière"),
        new Cat("Oggy", 10, "brun", "male", "Norvégien")
    ];
} catch (RuntimeException $exception) {
    ?>
    <div class="alert alert-danger"><?= $exception->getMessage() ?></div>
    <?php
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cats</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Cats</h1>
        <?php
            foreach ($cats as $cat) {
                echo "<h2>".$cat->getInfo()['firstname']."</h2>";
                echo "<ul class='list-group'>";
                foreach ($cat->getInfo() as $key => $value) {
                    if($key != "firstname")
                        echo "<li class='list-group-item'><strong>$key:</strong> $value</li>";
                }
                echo "</ul>";
            }
        ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>