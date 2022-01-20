<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<form action="user.php" method="get">
    <label for="id-name">Prénom</label>
    <input type="text" id="id-name" name="username">

    <label for="id-fam-name">Nom</label>
    <input type="text" id="id-fam-name" name="user-family-name">

    <input type="submit" name="submit-form">
</form>

<form action="user.php" method="post">
    <label for="id-name">Prénom</label>
    <input type="text" id="id-name" name="username">

    <label for="id-fam-name">Nom</label>
    <input type="text" id="id-fam-name" name="user-family-name">

    <input type="submit" name="submit-form">
</form>
</body>
</html>