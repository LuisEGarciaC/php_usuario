<?php
    require_once("../../controller/userController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>

