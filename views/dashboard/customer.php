<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Quan ly khach hang</li>
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
                <th>MNV</th>
                <th>Họ và tên</th>
                <th>Giới tính </th>
                <th>Email</th>
                <th>Chi tiết</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value){ ?>
                  <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['fullname'] ?></td>
                    <td><?php echo $value['sex'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><a href="#" id="detailCustomer" onclick="load_ajax(this)"  data-toggle="modal" data-target="#myModal" class="<?php echo $value['id'].'-View' ?>">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td><a href=" <?php echo 'employee/deleteById/' .$value['id'] ?>">Xóa</a></td>
                  </tr>
                <?php } ?>

            </tbody>
          </table>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Chi tiết nhân viên</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="result">

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function load_ajax(ob){
    var classHasClick = $(ob).attr('class');
    var param = classHasClick.split('-');
    console.log(param[0]);
    $.ajax({
      url : "customer/getById/" + param[0],
      type : "get",
      dataType: "json",
      success : function (result){
          $('.result').html(
            "MaKH: " + result['id'] +
            "<br>Tên nhân viên : " + result['fullname'] +
            "<br>Giới tính : " + result['sex'] +
            "<br>Ngày sinh : " + result['birthday'] +
            "<br>Phone: " + result['phone'] +
            "<br>Email: " + result['email']+
            "<br>Địa chỉ : " + result['address']
          );
      }
    });
  }


</script>
