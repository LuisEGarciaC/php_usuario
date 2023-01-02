<?php
    require_once("../../controller/userController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);
