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
<form action="index.php?f=0" method="post">
    <label for="id-civil">Civilité: </label>
    <select name="user_civilite" id="id-civil">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select>

    <label for="id-name">Prénom</label>
    <input type="text" id="id-name" name="user_name">

    <label for="id-fam-name">Nom</label>
    <input type="text" id="id-fam-name" name="user_fam_name">

    <input type="submit" name="submit">
</form>
</body>
</html>
