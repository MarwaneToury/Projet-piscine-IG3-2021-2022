<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Toast/Toast.css">
    <title><?php echo $pagetitle; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<header style="border: 2px solid black;text-align:center;">
    <h3>
        <a href='index.php?controller1=Ingredient'>Liste des ingrédients</a>
        <a href='index.php?controller2=Recette'>Liste des recettes</a>
    </h3>
</header>
<body style="display: flex">
<div class="page" id="page1" style="flex: 1; position: relative">
    <?php require File::build_path(array("view", "Ingredient", "$view1.php")); ?>
</div>
<div class="page" id="page2" style="flex: 1; position: relative">
    <?php require File::build_path(array("view", "Recette", "$view2.php")); ?>
</div>
<script type="text/javascript">
    $(".update").click(function () {
        $.ajax({
            url: "index.php", type: 'GET', data: {action1: 'update', controller1: 'Ingredient', code_ing: $(this).attr("id")},
            success: function (result) {
                $("#page1").html(result);
            }
        });
    });
    var myform = $('#updateING');
    myform.submit(function () {
        $.ajax({
            url: myform.attr('action'), type: myform.attr('method'), data: myform.serialize(),
            success: function (result) {
                $("#page1").html(result);
            }
        });
    });
</script>
</body>
<footer>
    <p style="border: 1px solid black;text-align:right;padding-right:1em;">
        Site du meilleur projet piscine
    </p>
</footer>
</html>