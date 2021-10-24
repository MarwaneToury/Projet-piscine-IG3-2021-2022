<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
</head>
<body style="display: flex">
    <div class="page" id="page1" style="flex: 1; position: relative">
        <?php require File::build_path(array("view", $object, "$view1.php")); ?>
    </div>
</body>
</html>