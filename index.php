
<?php

session_start();
include_once './page/header.php';
include_once './module/pdo.php';
include_once './module/taikhoan.php';
include "./module/sanpham.php";
include "./module/danhmuc.php";

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
if (isset($_GET['sp'])) {
    $sp = $_GET['sp'];
    switch ($sp) {


            //login && resign && logout
        case 'login_resign':
            include './page/login_resign.php';
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $login = checkuser($email, $pass);
                if (is_array($login)) {
                    $_SESSION['user'] = $login;
                    $yourURL = "index.php";
                    echo ("<script>location.href =' $yourURL '</script>");
                } else {
                    $thongbaoerro = 'Sai tài khoản hoặc mật khẩu';
                    include './page/login_resign.php';
                }
            }
            break;
        case 'account_fix':
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass'];
                update_user_now($id, $name, $address, $phone, $pass);
            }
            include './page/my-account.php';
            break;
        case 'resign':
            if (isset($_POST['resign'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insertAcc($name, $email, $pass);
                $thongbaodangki = "Đăng kí thành công";
            }
            include './page/login_resign.php';
            break;
        case 'forget':
            if (isset($_POST['forget'])) {
                $email = $_POST['email'];
                $check = checkforget($email);
                if (is_array($check)) {
                    extract($check);
                    $thongbao = "Mật khẩu của bạn là " . $password;
                } else {
                    $thongbao = 'Email không chính xác';
                }
            }
            include './page/forget.php';
            break;
        case 'chitiet':
            include './page/single-product.php';
            break;
        case 'account':
            include './page/my-account.php';
            break;

        case 'logout':
            session_destroy();
            $yourURL = "index.php";
            echo ("<script>location.href =' $yourURL '</script>");
            break;

        case 'shop':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['idCate']) && ($_GET['idCate']) > 0) {
                $idCate = $_GET['idCate'];
            } else {
                $idCate = 0;
            }
            $loadsp = list_sp($kyw, $idCate);
            $listdm = list_dm();
            include './page/shop-leftsidebar.php';
            break;
        case 'addtocart':
            if (isset($_POST['addcart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $image, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
                // var_dump($_SESSION['mycart']);
            }
            include './page/header.php';
            $yourURL = "index.php?sp=shop";
            echo ("<script>location.href =' $yourURL '</script>");
            break;

        case 'delete_cart':
            if (isset($_GET['idCart'])) {
                array_splice($_SESSION['mycart'], $_GET['idCart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }

            $yourURL = "index.php?sp=addtocart";
            echo ("<script>location.href =' $yourURL '</script>");
            break;

        case 'blog':
            include './page/blog.php';
            break;
        case "contact":
            include_once "./page/contact.php";
            break;
        case "checkout":
            include_once "./page/checkout.php";
            break;
        default:
            include './page/home.php';
    }
} else {
    include_once './page/home.php';
}

include_once './page/footer.php';
