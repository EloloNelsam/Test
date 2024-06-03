<?php
require_once '../model/type.model.php';
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
            $types = readType();
            require_once "../view/type/type.view.html.php";
//            echo $action;
            break;
        case 'create':
//            echo $action;
            break;
    }
}