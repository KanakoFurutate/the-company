<?php

include "../classes/User.php";

$user_obj = new User;

$user_obj->deleteUser($_POST);


?>