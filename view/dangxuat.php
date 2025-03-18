<?php 
    include './controller/user.php';

    $p = new User();
    $p->logOut();
    header("Location: index.php?act=trangchu");
    exit();



?>