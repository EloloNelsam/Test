<?php
define("WEBROOT", "http://" . $_SERVER["HTTP_HOST"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= WEBROOT ?>style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP</title>
</head>
<body class="h-screen p-4 bg-gray-100">

<div class="flex h-full rounded-lg bg-white relative left-1/2 top-1/2 translate-y-[-50%] translate-x-[-50%]">
    <?php require_once "../view/static/header.html.php"; ?>
    <main class="w-full p-5 h-full">

        <?php
                require_once "../controller/article.controller.php";
        //        require_once "../controller/type.controller.php";
        //        require_once "../controller/categorie.controller.php";
        ?>

    </main>
</div>
<!-- SCRIPT -->
<script type="module" src="<?= WEBROOT ?>/script/main.js"></script>

</body>
</html>
