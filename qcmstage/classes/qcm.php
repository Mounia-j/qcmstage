<?php

require_once 'classes/database.php';
require_once 'classes/question.php';

$database = new Database;
$bd = $database->getConnection();

$question = new Question($bd);
$database = $question->ajouterQuestion();
$reponse = new Reponse($bd);
$database = $reponse->ajouterReponse();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Questionnaire</title>
</head>

<body>
<header class="bg-info text-ligt text-center py-4">
<h1>Questionnaire</h1>
</header>

<main class="container py-4">
<form action="" method="post">
    <div class="class form-row">
        <div class="class form-group col-md-8">
            <label for="question">Question</label>
            <input type="text" id="question" name="question" class="form-control" placeholder="entrez votre question">
        </div>
    </div>
            <input type="submit" value="Ajouter une question" class="btn btn-secondary">
<div class="form-row">
        <div class="class form-row col-md-6">
            <label for="reponse">Reponse</label>
            <input type="text" id="reponse" name="reponse" class="form-control" placeholder="entrez votre reponse">
          
            <label for="reponse">Explications</label>
            <input type="text" id="explication" name="explication" class="form-control" placeholder="commentaire">
        </div>
</div>
</form>

<?php
if($_POST){
$question->intitule = $_POST['intitule'];
$reponse->intitule = $_POST['intitule'];


}

?>

</main>

</body>

</html>