<section class="section-login">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div>
          <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>
        </div>
        <form action="login" method="post">
          <div class="form-group">
            <label>Email:</label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
          </div>
          <div class="pull-xs-left" style="margin-bottom: 25px">
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="register" class="btn-link-style btn-register" style="margin-left: 20px; ">Đăng ký</a>
          </div>
        </form>
        <div class="">
          <?php
            echo $data;
            ?>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div>
          <h3>QUÊN MẬT KHẨU</h3>
        </div>
        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control" placeholder="Enter email" name="email">
          </div>
          <div class="pull-xs-left" style="margin-bottom: 25px">
            <button type="submit" class="btn btn-default">Lấy lại mật khẩu</button>
          </div>
        </div>
      </div>
    </div>
  </section>
