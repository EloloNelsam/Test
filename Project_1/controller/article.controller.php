<?php

require_once '../model/article.model.php';
require_once '../model/categorie.model.php';
require_once  '../model/type.model.php';
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'read':
//            echo "$action";
            $articles = read();
            require_once '../view/article/liste.html.php';
            break;
        case 'create':
            echo "$action";
            break;
        case 'update':
//            echo "$action";
            break;
        case 'delete':
//            echo "$action";
            break;
        case 'add':
//            echo "$action";
            $types = readType();
            $categories = readCategories();
            require_once '../view/article/add.html.php';
            break;
        default:
            echo "Error";
            break;
    }
}