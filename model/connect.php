<?php 
    class Connect{
    public function openConnect()
    {
        $host = "localhost";
        $user = "admin1";
        $pass = "admin1";
        $db = "quanlybanhang";
        $port = '3307';
        return mysqli_connect($host, $user, $pass, $db, $port);
    }
    public function closeConnect($conn)
    {
        $conn-> close();
    }

    }


?>

