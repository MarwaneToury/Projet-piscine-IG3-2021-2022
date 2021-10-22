<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
</head>
<header style="border: 2px solid black;text-align:center;">
    <h3>
        <a href='index.php?controller=Ingredient'>Liste des ingrédients</a>
<!--        <a href='index.php?controller=utilisateur'>Liste des utilisateurs</a>-->
<!--        <a href='index.php?controller=utilisateur&action=preference'>Préférence</a>-->
    </h3>
</header>
<body style="display: flex">
    <div class="page" id="page1" style="flex: 1; position: relative">
        <?php require File::build_path(array("view", static::$object, "$view1.php")); ?>
    </div>
    <div class="page" id="page2" style="flex: 1; position: relative">
        <?php require File::build_path(array("view", static::$object, "$view2.php")); ?>
    </div>
</body>
<footer>
    <p style="border: 1px solid black;text-align:right;padding-right:1em;">
        Site du meilleur projet piscine
    </p>
</footer>
</html>