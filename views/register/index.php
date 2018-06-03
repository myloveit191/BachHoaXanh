<section class="section-login">
       <div class="container">
           <div>
               <h3>ĐĂNG KÝ TÀI KHOẢN</h3>
           </div>
           <form action="register/run" method="post">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="txth">Họ:</label>
                           <input type="text" id="txth" class="form-control" placeholder="Nhập họ" name="firstname">
                       </div>
                       <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control" placeholder="Nhập email" name="email">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="txtt">Tên:</label>
                           <input type="text" id="txtt" class="form-control" placeholder="Nhập tên" name="lastname">
                       </div>
                       <div class="form-group">
                           <label for="pwd">Password:</label>
                           <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password">
                       </div>
                   </div>
               </div>
               <div class="pull-xs-left" style="margin-bottom: 25px">
                   <button type="submit" class="btn btn-default">Đăng ký</button>
                   <a href="login" class="btn-link-style btn-register" style="margin-left: 20px; ">Đăng nhập</a>
               </div>
           </form>
       </div>
   </section>
