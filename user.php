<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traitement form 1</title>
</head>
<body>
    <h1>Mon premier form ma renvoyé sur cette page</h1>

    <?php
    if (isset($_GET['submit-form'])) {?>
        <h2>Les infos du form 1:</h2>
            <div><?= $_GET['username'] ?></div>
            <div><?= $_GET['user-family-name'] ?></div><?php
    }
    ?>

    <?php
    if (isset($_POST['username'], $_POST['user-family-name'])) {?>
        <h2>Les infos du form 2:</h2>
        <div><?= $_POST['username'] ?></div>
        <div><?= $_POST['user-family-name'] ?></div><?php
    }
    ?>

</body>
</html>
