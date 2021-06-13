<body id="LoginForm">
  <div class="container">
    <!-- <h1 class="form-heading">login Form</h1> -->
    <div class="login-form">
      <img src="<?= base_url("assets/unnamed2.jpg"); ?>" class="center">
      <style>
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 40%;
        }
      </style>
      <h2>Admin Login</h2>
      <div class="main-div">
        <!-- <form class="js-validation-signin px-30" action="<?php echo base_url().'index.php/login/auth'?>" method="post">

          <div class="form-group">
            <label for="login-username">Username</label>
            <input type="text" class="form-control" id="login-username" placeholder="Username" name="username" required>
            <label for="login-password">Password</label>
            <input type="password" class="form-control" id="login-password" placeholder="Password" name="password" required>

          </div>
          <button type="submit" class="btn btn-primary">Login</button>

        </form> -->
        <div class="login-box-body">
          <p class="login-box-msg">Sign in</p>

          <form action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <div class="form-group has-feedback">
              <input type="text" id="login-username" name="username" class="form-control" placeholder="Username"
                required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" id="login-password" placeholder="Password" name="password"
                required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-info btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-box-body -->
      </div>
    </div>
  </div>
  </div>


</body>

</html>

<style>
  body#LoginForm {
    /* background-image: url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    /* padding: 10px; */
  }

  .form-heading {
    color: #fff;
    font-size: 23px;
  }

  .panel h2 {
    color: #444444;
    font-size: 18px;
    margin: 0 0 4px 0;
  }

  .panel p {
    color: #777777;
    font-size: 14px;
    margin-bottom: 30px;
    line-height: 24px;
  }

  .login-form .form-control {
    background: #f7f7f7 none repeat scroll 0 0;
    border: 1px solid #d4d4d4;
    border-radius: 4px;
    font-size: 14px;
    height: 50px;
    line-height: 50px;
  }

  .main-div {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 2px;
    margin: 10px auto 30px;
    max-width: 38%;
    padding: 50px 70px 70px 71px;
  }

  .login-form .form-group {
    margin-bottom: 10px;
  }

  .login-form {
    text-align: center;
  }

  .forgot a {
    color: #777777;
    font-size: 14px;
    text-decoration: underline;
  }

  .login-form .btn.btn-primary {
    background: #f0ad4e none repeat scroll 0 0;
    border-color: #f0ad4e;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 50px;
    line-height: 50px;
    padding: 0;
  }

  .forgot {
    text-align: left;
    margin-bottom: 30px;
  }

  .botto-text {
    color: #ffffff;
    font-size: 14px;
    margin: auto;
  }

  .login-form .btn.btn-primary.reset {
    background: #ff9900 none repeat scroll 0 0;
  }

  .back {
    text-align: left;
    margin-top: 10px;
  }

  .back a {
    color: #444444;
    font-size: 13px;
    text-decoration: none;
  }
</style>