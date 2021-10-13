<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
</head>
<header style="border: 2px solid black;text-align:center;">
    <h3>
        <a href='index.php?controller=ING'>Liste des ingrédients</a>
<!--        <a href='index.php?controller=utilisateur'>Liste des utilisateurs</a>-->
<!--        <a href='index.php?controller=utilisateur&action=preference'>Préférence</a>-->
    </h3>
</header>
<body>
    <?php require File::build_path(array("view", static::$object, "$view.php")); ?>
</body>
<footer>
    <p style="border: 1px solid black;text-align:right;padding-right:1em;">
        Site du meilleur projet piscine
    </p>
</footer>
</html>