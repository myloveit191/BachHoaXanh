<section class="section-1">
<div class="container margin-section">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <div class="section-title">
                            <span>Danh mục</span>
                        </div>
                        <div class="section-menu">
                            <ul>
                                <li>
                                    <a href="lsproduct">Rau xanh đậm</a>
                                </li>
                                <li>
                                    <a href="lsproduct">Đậu và hạt</a>
                                </li>
                                <li>
                                    <a href="lsproduct">Đỏ và cam</a>
                                </li>
                                <li>
                                    <a href="lsproduct">Tinh bột</a>
                                </li>
                                <li>
                                    <a href="lsproduct">Khác</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-baner">
                        <div>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner carousel-width">
                                    <div class="item active ">
                                        <img src="public/img/muavu.jpg" alt="Mùa vụ" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h3>Nông sản đầu mùa</h3>
                                            <p>Bước vào mùa thu hoạch</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="public/img/giamgia.jpg" alt="Khuyễn mãi" style="width:100%">
                                        <div class="carousel-caption">
                                            <h3>Khuyến mãi</h3>
                                            <p>Khuyến mãi 10-15% cho toàn bộ sản phẩm</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo URL ?>public/img/banner2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section-title">
                        <span>Sản phẩm hot</span>
                    </div>
                    <div class="section-items-hot">
                        <ul>
                          <?php foreach ($data['hot'] as $value): ?>
                            <li>
                                <img src="<?php echo URL.$value['picture'] ?>" alt="Cam">
                                <span><?php echo $value['unit_price']; ?> đ</span>
                                <a href="#"><?php echo $value['product_name']; ?></a>
                                <div class="add-view">
                                  <a href="<?php echo URL . 'cart/addCart/'.$value["id"] ?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                  <a href="<?php echo URL . 'lsproduct/detail/'.$value["id"] ?>" >Xem</a>
                                </div>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature__item">
                        <img src="<?php echo URL ?>public/img/feature1.png" alt="MIỄN PHÍ VẬN CHUYỂN" class="feature-item__image">
                        <div class="info">
                            <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                            <p>Chúng tôi vận chuyển miễn phí với đơn hàng trị giá trên 1000.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature__item">
                        <img src="<?php echo URL ?>public/img/feature2.png" alt="MIỄN PHÍ VẬN CHUYỂN" class="feature-item__image">
                        <div class="info">
                            <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                            <p>Chúng tôi vận chuyển miễn phí với đơn hàng trị giá trên 1000.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature__item">
                        <img src="<?php echo URL ?>public/img/feature3.png" alt="MIỄN PHÍ VẬN CHUYỂN" class="feature-item__image">
                        <div class="info">
                            <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                            <p>Chúng tôi vận chuyển miễn phí với đơn hàng trị giá trên 1000.000 đ</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <span>Sản phẩm mới</span>
                    </div>
                    <div class="section-new-item">
                        <ul>
                          <?php foreach ($data['new'] as  $value): ?>
                            <li>
                                <img src="<?php echo URL.$value['picture'] ?>" alt="Cam">
                                <div class="">
                                  <a href="#"><?php echo $value['product_name']; ?></a>
                                  <span><?php echo $value['unit_price']; ?> đ</span>
                                  <div class="add-view ">
                                      <a href="<?php echo URL . 'cart/addCart/'.$value["id"] ?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                      <a href="<?php echo URL . 'lsproduct/detail/'.$value["id"] ?>" >Xem</a>
                                  </div>
                                </div>

                            </li>
                          <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="section-title">
                        <span>Sản phẩm nổi bật</span>
                    </div>
                    <div class="section-like-item">
                        <ul>
                        <?php foreach ($data['all'] as$value): ?>
                          <li>
                              <img src="<?php echo URL.$value['picture'] ?>" alt="Cam">
                              <a href=""><?php echo $value['product_name']; ?></a>
                              <span><?php echo $value['unit_price']; ?> đ</span>
                              <div class="add-view">
                                <a href="<?php echo URL . 'cart/addCart/'.$value["id"] ?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="<?php echo URL . 'lsproduct/detail/'.$value["id"] ?>" >Xem</a>
                              </div>
                          </li>
                        <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
