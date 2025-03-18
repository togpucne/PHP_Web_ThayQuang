<?php 
include './model/searchModel.php';

class searchController {
    public function searchKeyController($keyword) {
        if (empty($keyword)) {
            return false;
        }
        $p = new searchModel();
        $result = $p->searchKeyModel($keyword);
        return ($result) ? $result : false;
    }
}
?>
