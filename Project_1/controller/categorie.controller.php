<?php
require_once '../model/categorie.model.php';
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'add':
//            echo $action;
            break;
        case 'delete':
//            echo $action;
            break;
        case 'update':
//            echo $action;
            break;
        case 'read':
            $categories = readCategories();
            require_once "../view/categorie/categorie.view.html.php";
//            echo $action;
            break;
        case 'create':
//            echo $action;
            break;
    }
}