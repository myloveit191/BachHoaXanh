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
                <a href="<?php echo URL ?>lsproduct/view/1">Rau xanh đậm</a>
              </li>
              <li>
                <a href="<?php echo URL ?>lsproduct/view/2">Đậu và hạt</a>
              </li>
              <li>
                <a href="<?php echo URL ?>lsproduct/view/3">Đỏ và cam</a>
              </li>
              <li>
                <a href="<?php echo URL ?>lsproduct/view/4">Tinh bột</a>
              </li>
              <li>
                <a href="<?php echo URL ?>lsproduct/view/5">Khác</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="section-title">
          <span>Danh sách sản phẩm</span>
        </div>
        <div class="section-list-item">
          <ul>
            <?php foreach ($data as $value) { ?>
              <li>
                  <img src="<?php echo URL.$value['picture'] ?>" alt="Cam">
                  <a href=""><?php echo $value["product_name"]; ?> </a>
                  <span><?php echo $value["unit_price"]; ?> đ</span>
                  <div class="add-view ">
                    <a href="<?php echo URL . 'cart/addCart/'.$value["id"]?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href="<?php echo URL . 'lsproduct/detail/'.$value["id"] ?>" >Xem</a>
                </div>
              </li>
            <?php }?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
