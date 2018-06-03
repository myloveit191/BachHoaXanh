<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Nha cung cap</li>
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
                <th>MaNCC</th>
                <th>Ten NCC</th>
                <th>Phone</th>
                <th>Chi tiet</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value){ ?>
                  <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['supplier_name'] ?></td>
                    <td><?php echo $value['supplier_phone'] ?></td>
                    <td><a href="#">Chi tiet</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td><a href="#">Xóa</a></td>
                  </tr>
                <?php } ?>

            </tbody>
          </table>
      </div>
    </div>
  </div>
