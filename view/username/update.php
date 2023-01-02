<?php
    require_once("../../controller/userController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre']);
?>