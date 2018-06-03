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
          <div class="detail-item">
              <div class="img-item">
                  <img src="<?php echo URL.$data['picture'] ?>" alt="<?php echo $data['product_name'] ?>">
              </div>
              <div class="info-item">
                  <div>
                      <h3><?php echo $data['product_name'] ?></h3>
                  </div>
                  <div>
                      <span>Trình trạng:</span>
                      <span><?php if ($data['stock']) {
                            echo "Còn hàng";
                      }else {
                          echo "Hết hàng";
                      }
                     ?></span>
                  </div>
                  <div>
                    <span>Giá:</span>

                      <span><?php echo $data['unit_price'] ?></span>
                  </div>
                  <div>
                    <span>Nguồn gốc:</span>

                      <span><?php echo $data['origin'] ?></span>
                  </div>
                  <div>
                    <span>Đơn vị:</span>

                      <span><?php echo $data['unit'] ?></span>
                  </div>
                  <div>
                    <span>Mô tả:</span>

                      <span><?php echo $data['description'] ?></span>
                  </div>
                  <div class="">
                    <span>Số lượng:</span>

                      <div class="quantity">
                          <input type="number" min="1" max="9" step="1" value="1">
                      </div>

                  </div>
                  <div class="cart-detail">
                    <a href="<?php echo URL . 'cart/addCart/'.$value["id"]?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Thêm</span></a>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>
