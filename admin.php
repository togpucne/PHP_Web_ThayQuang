<?php
    session_start();
   
        include './view/header.php';
        include './view/nav.php';
        include './view/menu.php';
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'dangnhap':
                    include './view/dangnhap.php';
                    break;
                case 'dangxuat':
                        include './view/dangxuat.php';
                        break;
                default:
                    include './view/trangchuAdmin.php';
                    break;
            }
            }else{

                include './view/trangchuAdmin.php';
            }
        include './view/footer.php';
    
?>


              

