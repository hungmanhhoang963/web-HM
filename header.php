<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan Ao Hung Manh</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/swipebox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
          integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        include ('functions.php')
    ?>



</head>

<body>
<header id="header">

    <div class="strip d-flex justify-content-between px-4 py-1 color-purple-bg">
        <a href="https://www.google.com/maps/place/%C4%90%C3%B4+L%C6%B0%C6%A1ng,+Ngh%E1%BB%87+An,+Vi%E1%BB%87t+Nam/@18.9153464,105.209711,11z/data=!3m1!4b1!4m5!3m4!1s0x3139e1d6c848622d:0xd52b99034afa24fd!8m2!3d18.8990982!4d105.336536?hl=vi-VN"
           target="_blank" rel="noopener noreferrer" class="font-roboto font-size-12 text-white m-0 ">Xóm Minh Hòa,
            Xã Yên Sơn, Huyện Đô Lương, Tỉnh Nghệ An
        </a>
        <div class="font-roboto font-size-14">
            <a href="#" class="px-4 border border-warning text-warning">Đăng Kí</a>
            <a href="#" class="px-3 border border-warning text-warning">Đăng Nhập</a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand font-roboto" href="index.php">HM SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-roboto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HM-SHOP </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giảm Giá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản Phẩm <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sắp Ra Mắt</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-raleway">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'))?></span>
                </a>
            </form>
        </div>
    </nav>
</header>

<main id="main-site">