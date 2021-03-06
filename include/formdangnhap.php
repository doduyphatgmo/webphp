<?php

?>
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <span class="anchor" id="formLogin"></span>
                    <!-- form card login -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Đăng nhập</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" method="post" 
                            action="welcome.php">
                            <div class="form-group">
                                <label for="uname1">Tên đăng nhập</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name="pwd1" required="" autocomplete="new-password">
                            </div>
                            <div>
                                <label class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description small">Nhớ tài khoản trên máy tính</span>
                              </label>
                          </div>
                          <?php
                          $obj = new tintuc();
                          if(isset($_POST['btnDangNhap'])){
                              $un = $_POST['uname1'];
                              $pw = $_POST['pwd1'];
                              $Login = $obj->Login($un, $pw);
                              if(count($Login) == 0){
                                ?>
                                    <div class="alert alert-danger">
                                        Tên đăng nhập hoặc mật khẩu sai
                                    </div>    
                                <?php
                              }
                          }
                          ?>
                          <button type="submit" name="btnDangNhap" class="btn btn-primary btn-lg float-right">Đăng nhập</button>
                      </form>
                  </div>
                  <!--/card-block-->
              </div>
              <!-- /form card login -->
          </div>


      </div>
      <!--/row-->

  </div>
  <!--/col-->
</div>
<!--/row-->
</div>
<!--/container-->
