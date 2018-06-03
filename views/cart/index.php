<div class="container">
  <div class="row">
    <div class="content-cart">
      <div class="row title-cart">
        <div class="col-md-5">Sản phẩm</div>
        <div class="col-md-2">Đơn giá</div>
        <div class="col-md-2">Số lượng</div>
        <div class="col-md-2">Thành tiền</div>
      </div>
      <?php
      if (Session::get('cart')) {
        $data = Session::get('cart');
        foreach ($data as  $value) { ?>
          <div class="row list-cart">
            <div class="col-md-5">
              <img src="<?php echo URL .$value['picture'] ; ?>" alt="">
              <span><?php echo $value['product_name']; ?></span>
            </div>
            <div class="col-md-2"><?php echo $value['unit_price']; ?></div>
            <div class="col-md-2">
              <input  class="<?php echo $value['id'].'-cart form-control'; ?>" type="number" min="1" value="<?php echo $value['count']; ?>">
            </div>
            <div class="col-md-2"><?php echo $value['total']; ?></div>
            <div class="col-md-1"><a href="<?php echo URL . 'cart/delete/' . $value['id']; ?>">Xóa</a></div>
          </div>
        <?php } ?>
      <div class="pay-cart">
        <div class="col-md-2 col-md-offset-8">
          <span>Tổng tiền: </span>
          <span><?php echo Session::get('totalPrice'); ?></span>
        </div>
        <div class="col-md-5 col-md-offset-7 ">
          <div class="">
            <a href="<?php echo URL ?>">Tiếp tục mua hàng</a>
          </div>
          <a href="<?php echo URL .'cart/pay'?>">Đặt hàng</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(":input").bind('keyup mouseup', function () {
      var unit_price =  $(this).parent().prev().text();
      var count = $(this).val();
      var id =  this.className.split('-');
      console.log(id);
      var priceOld = $(this).parent().next().text();
      $(this).parent().next().text(unit_price*count);
      var priceNew = $(this).parent().next().text();
      var totalOld = $('.pay-cart span:last-child').text();
      $('.pay-cart span:last-child').text(Number(totalOld) + Number(priceNew) - Number(priceOld));
      $.ajax({
        url : "http://localhost:85/myfood/cart/update",
        type : "post",
        dataType:"text",
        data : {
          count : count,
          id:id[0]
        },
        success : function (result){
          console.log(result);
        }
      });
    });
</script>
