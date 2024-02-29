<?= view('layout/header')?>
<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login-content">
                    <div class="card bg-primary text-black">
                    <div class="login-form">
                        <h4>Selamat Datang di Aplikasi Perpustakaan Digital</h4>
                        <?php if(!empty($error)) { 
                        implode('', $errors->all('<div style="color: red;">:message</div>')); 
                        } ?>
                        <form action="/home/aksi_login" method="POST">
                            <div class="form-group">
                                <label>Username :</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            </div>
                           
                          <button type="submit" class="btn btn-primary col-sm-3 align-right">Login</button>
                          <div>anda belum memiliki akun?</div>
                          <h6>registrasi, <a href="/home/register">klik disini!</a></h6>
                      </form><br>
                  </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="footer">
        <p>Perpustakaan Digital Ukk.</p>
        </div>
    </div>
</div>
<?= view('layout/footer')?>