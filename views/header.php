<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Bách Hóa Xanh</title>
</head>

<body>

  <header>
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-3 col-sm-12 col-sx-12">
                     <div class="logo">
                         <a href="<?php echo URL; ?>">
                             <img src="<?php echo URL; ?>public/img/logoapp.png" alt="Bách hóa xanh">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-5 col-md-4 col-sm-12 col-sx-12">
                     <div class="search-form">
                         <form action="??" method="GET">
                             <input type="text" name="search" id="" class="search-form__query" placeholder="Tìm kiếm">
                             <button type="submit" class="search-form__submit">
                                 <i class="fa fa-search" aria-hidden="true"></i>
                             </button>
                         </form>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-5 col-sm-12 col-sx-12 header-right">
                     <div class="header-account">
                         <ul>
                            <?php if (Session::get('name') == "" || Session::get('name') == null):?>
                             <li>
                                 <a href="<?php echo URL ?>register">Đăng ký</a>
                             </li>
                             <li>
                                 <a href="<?php echo URL ?>login">Đăng nhập</a>
                             </li>

                             <?php endif; ?>
                             <?php if (Session::get('name')):?>
                              <li>
                                   <span>Chào bạn <?php echo Session::get('name') ?></span>
                              </li>
                              <li>
                                   <a href="<?php echo URL ?>logout">Đăng xuất</a>
                              </li>
                              <?php endif; ?>
                         </ul>
                     </div>
                     <div class="header-cart">
                         <a class="btn" href="#" role="button">
                             <img src="<?php echo URL ?>public/img/ic-header-cart.png" alt=""> Giỏ hàng</a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="header__nav">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                         <nav class="nav-main nav-main--sigle">
                             <ul>
                                 <li>
                                     <a href="">Trang chủ</a>
                                 </li>
                                 <li>
                                     <a href="">Giới thiệu</a>
                                 </li>
                                 <li>
                                     <a href="">Dịch vụ</a>
                                 </li>
                                 <li>
                                     <a href="">Tin tức</a>
                                 </li>
                                 <li>
                                     <a href="">Khuyến Mãi</a>
                                 </li>
                                 <li>
                                     <a href="">Liên Hệ</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>

         </div>
     </header>
