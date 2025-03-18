<div class="inner-right">
        <h1 class="text-center">Trang Chủ</h1>
        <?php
        include "./controller/productsController.php";

        $p = new productsController();
        
        if(isset($_GET['typeOfProduct'])){
            $type = $_GET['typeOfProduct'];
            $sanpham = $p->getDBProductsOfType($type);
            
        }else{
            $selectSP = "SELECT * FROM sanpham";
            $sanpham = $p->getDBProducts($selectSP);
            
        }




        if($sanpham->num_rows <= 0){
            echo '<p>Chưa có sản phẩm !</p>';
        } else {
            

            echo '<div class="row justify-content-start">';
            while ($row = $sanpham->fetch_assoc()) {
                echo '<div class="col-3">
                            <div class="sanpham">
                                <a href="chitietsanpham.php?id=' . $row['idsp'] . '">
                                    <div class="tensp">' . $row['mota'] . '</div>
                                    <div class="hinh">
                                        <img src="' . $row['hinh'] . '" width="150" height="150" />
                                    </div>
                                    <div class="gia">Giá: ' . $row['giamgia'] . ' USD</div>
                                    <div class="giam-gia">' . $row['gia'] . ' USD</div>
                                </a>
                            </div>
                        </div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>