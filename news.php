<!DOCTYPE html>
<html>
<?php include('views/partials/head.php'); ?>
<?php include('views/partials/loader.php'); ?>
<?php include('views/partials/menu.php'); ?>
<div class="extended-menu-line"></div>
<body class='news'>

<?php $allnews ='yes'; $newscount = 4; include('views/blocks/news.php'); ?>



<?php include('views/partials/footer.php');  ?>
<?php include('views/partials/scripts.php');  ?>


</body>
</html>