<?php
session_start();

// http://localhost/MVC/MVC_Project_First?controller=manage&action=addd

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'object';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// echo $action;

$controller = ucfirst($controller);
$fileController = $controller."Controller.php";

  $pathController = "src/controllers/$fileController";
//   echo $pathController;

if (!file_exists($pathController)) {
  echo $pathController;
    die("Trang bạn tìm không tồn tại");

}



require_once "$pathController";

$classController = $controller."Controller";

$object = new $classController();

if (!method_exists($object, $action)) {
    die("Phương thức $action
     không tồn tại trong class $classController");
}
    $object->$action();
?>