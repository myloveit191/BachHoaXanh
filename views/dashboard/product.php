<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Quan ly san pham</li>
    </ol>
    <div class="row">
      <div class="col-12">
        <div class="col-3">
          <button type="button" class="btn btn-success">Thêm</button>
        </div>
        <br>
      </div>
      <div class="col-12">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>MSP</th>
                <th>Tên SP</th>
                <th>Don gia</th>
                <th>So luong con</th>
                <th>Chi tiết</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value){ ?>
                  <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['product_name'] ?></td>
                    <td><?php echo $value['unit_price'] ?></td>
                    <td><?php echo $value['stock'] ?></td>
                    <td><a href="#" class="<?php echo $value['id'].'View' ?>">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td><a href="#">Xóa</a></td>
                  </tr>
                <?php } ?>

            </tbody>
          </table>
      </div>
    </div>
  </div>
