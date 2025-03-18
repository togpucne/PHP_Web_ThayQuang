<main class="inner-main">
                        <div class="inner-nav">
                            <nav class="navbar navbar-expand-lg ">
                                <div class="container-fluid">

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Trang Chủ</a>
                                            </li>

                                            <?php

                                                
                                                    if(isset($_SESSION['logIn'])){
                                                        echo '<li class="nav-item">
                                                <a class="nav-link" href="admin.php?act=dangxuat">Đăng Xuất </a>
                                            </li>';
                                                    
                                                }else{
                                                    echo '<li class="nav-item">
                                            <a class="nav-link" href="index.php?act=dangky">Đăng Ký </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?act=dangnhap">Đăng Nhập </a>
                                        </li>';
                                                }
                                            
                                            
                                            
                                            ?>
                                            

                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>

                        <div class="inner-search">
                            <form action="" method="post">
                                <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search" />
                                <button class="btn btn-success" type="submit">Search</button>
                            </form>
                        </div>

                    </main>

<?php  
    if(isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_POST['search'])){
        $search = $_POST['search'];
        $url = 'index.php' .'&search='.$search;
        header('Location: '.$url);
        exit();

    }


?>