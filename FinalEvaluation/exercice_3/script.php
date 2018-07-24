<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];
    $success = '';

    foreach($_POST as $key => $value) {
		$post[$key] = strip_tags(trim($value));
	}

    if(strlen($post['make']) < 3 ) {
        $errors[] = 'La marque doit comporter au moins 3 caractères';	
    }

    if(strlen($post['model']) < 3 ) {
        $errors[] = 'Le modèle doit comporter au moins 3 caractères';	
    }

    if(empty($post['year'])) {
        $errors[] = "L'année n'est pas valide !";	
    }

    if(strlen($post['color']) < 3 ) {
        $errors[] = 'La couleur doit comporter au moins 3 caractères';
    }

    if(count($errors) == 0) {
        $success = "<div class='alert alert-success'>Formulaire validé !</div>";
    }
}
else {
    http_response_code(405);
    echo "<div class='alert alert-danger'>Formulaire non valide !</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Exercice 3</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<body>
</head>
<body>
    <main class="container">
        <?php
            if(!empty($errors)) {
                echo "<div class='alert alert-danger'>";
                echo implode('<br>', $errors);
                echo "</div>";
            }

            if(!empty($success)) {
                echo $success;
            }
        ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>