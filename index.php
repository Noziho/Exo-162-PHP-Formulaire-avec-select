<?php
require 'form.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>



<?php
if (isset($_POST['submit'])) { ?>
        <div><?= $_POST['user_civilite'] ?></div>
        <div><?= $_POST['user_name']?></div>
        <div><?= $_POST['user_fam_name']?></div><?php
    if (isset($_FILES['user_file']) && $_FILES['user_file']['error'] === 0) {
        $info = pathinfo($_FILES['user_file']['name']);
        $autorisedExtension = ['pdf'];

        foreach ($autorisedExtension as $value) {
            if ($info['extension'] === $value) {
                echo "L'extension du fichier est ok, le fichier a bien été envoyer";
            }
            else {
                echo "Ce n'est pas la bonne extension vous devez envoyer un pdf";
            }
        }
    }
}
elseif (isset($_GET['submit'])) { ?>
        <div><?= $_GET['user_civilite'] ?></div>
        <div><?= $_GET['user_name']?></div>
        <div><?= $_GET['user_fam_name']?></div><?php
}

else {?>
<form action="index.php?f=0" method="post" enctype="multipart/form-data">
    <label for="id-civil">Civilité: </label>
    <select name="user_civilite" id="id-civil">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select>

    <label for="id-name">Prénom</label>
    <input type="text" id="id-name" name="user_name">

    <label for="id-fam-name">Nom</label>
    <input type="text" id="id-fam-name" name="user_fam_name">

    <input type="file" name="user_file">

    <input type="submit" name="submit">
</form><?php
}

?>
</body>
</html>
