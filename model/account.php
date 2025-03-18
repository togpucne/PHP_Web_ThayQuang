<?php 
    include './model/connect.php';
    class Account{         
        public function logInModel($name, $password){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM TaiKhoan WHERE TENTAIKHOAN = '$name' AND MatKhau = '$password'";
            $result = $conn->query($sql);
            return $result;



        }
    }




?>