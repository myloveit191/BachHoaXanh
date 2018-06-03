<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h3>Thông tin mua hàng</h3>
      <form action="<?php echo URL. 'cart/pay' ?>" method="post">
        <div class="form-group">
          <label for="name">Tên người nhân:</label>
          <input type="text" class="form-control" id="name"  name="tenNN">
        </div>
        <div class="form-group">
          <label for="diachi">Địa chỉ người nhận:</label>
          <input type="text" class="form-control" id="diachi"  name="diachiNN">
        </div>
        <div class="form-group">
          <label for="diachi">Hình thức vận chuyển:</label>
          <select class="form-control" name="shipOption">
            <option value="1">Bình thường</option>
            <option value="2">Ưu đãi</option>
            <option value="3">Nhanh</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default">Xác nhận</button>
      </form>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>
