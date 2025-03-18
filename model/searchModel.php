<?php
include_once './model/connect.php';

class searchModel {
    public function searchKeyModel($keyword) {
        $p = new Connect();
        $conn = $p->openConnect(); 
        $sql = "SELECT * FROM SANPHAM WHERE LOWER(tensp) LIKE ?";
        $stmt = $conn->prepare($sql);
        $param = "%" . strtolower($keyword) . "%";
        $stmt->bind_param("s", $param);
        $stmt->execute();
        $result = $stmt->get_result();
        return ($result->num_rows > 0) ? $result : false;
    }
}
?>
