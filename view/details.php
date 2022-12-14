<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Main/css/details.css">">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
    <?php
  include "header.php"
?>
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="./Images/img/img_raucuqua/sanpham/bapcaitim.jpg" alt="organic-food">
                            <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="organic-food">
                            <img src="./Images/img/img_raucuqua/sanpham/bi-do.jpg" alt="organic-food">
                            <img src="./Images/img/img_raucuqua/sanpham/bingoi.jpg" alt="organic-food">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="./Images/img/img_raucuqua/sanpham/bapcaitim.jpg" alt="organic-food">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="organic-food">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="./Images/img/img_raucuqua/sanpham/bi-do.jpg" alt="organic-food">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="./Images/img/img_raucuqua/sanpham/bingoi.jpg" alt="organic-food">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h2 class="product-title">B???p c???i t??m</h2>
                    <a href="./index.php" class="product-link">C???a h??ng</a>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.7(21)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">Gi?? c??: <span>$257.00</span></p>
                        <p class="new-price">Gi?? m???i: <span>$249.00 (-5%)</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>Th??ng tin s???n ph???m: </h2>
                        <p>L?? m???t lo???i th???c ph???m v?? c??ng quen thu???c, c?? m??u s???c v?? c??ng b???t m???t, r???t d??? mua v?? ch??? bi???n th??nh nhi???u m??n ??n ??a d???ng kh??c nhau trong b???a c??m h???ng ng??y. B???p c???i t??m ?????c bi???t mang ?????n l???i ??ch trong vi???c h??? tr??? ph??ng ch???ng ung
                            th??, gi??p c?? th??? kh???e m???nh to??n di???n.</p>
                        <p>M???i ng?????i d?????ng nh?? ???? qu?? quen thu???c v???i nh???ng qu??? b???p c???i xanh nh??ng ??t ng?????i bi???t r???ng, b???p c???i c??n c?? lo???i m??u t??m b???t m???t. </p>
                        <ul>
                            <li>T??nh tr???ng: <span>C??n h??ng</span></li>
                            <li>Ph??n lo???i <span>Rau-c???-qu???</span></li>
                            <li>Khu v???c v???n chuy???n: <span>N???i th??nh</span></li>
                            <li>Gi?? v???n chuy???n: <span>Free</span></li>
                        </ul>
                    </div>

                    <div class="purchase-info">
                        <input type="number" min="0" value="1">
                        <button type="button" class="btn">
            Add to Cart <i class="fas fa-shopping-cart"></i>
          </button>
                    </div>

                    <div class="social-links">
                        <p>Share At: </p>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--B??nh lu???n -->
        <div class="cmt">
            <h2>????nh gi??</h2>
            <form action="" method="POST">
                <div class="formbold-mb-3">
                    <textarea rows="6" name="message" id="message" class="formbold-form-input"></textarea>
                </div>

                <div>
                    <label for="email" class="formbold-form-label"> Email <span>(Gi??p ch??ng t??i c?? th??? li??n h??? v???i b???n)</span> </label>
                    <input type="email" name="email" id="email" class="formbold-form-input" />
                </div>

                <button class="formbold-btn">G???i ????nh gi??</button>
            </form>
        </div>

        <!--Hi???n th??? b??nh lu???n-->
        <div class="hienthi">
        </div>
        <?php
include "footer.php"
?>

            <script src="./chitiet.js"></script>
</body>

</html>