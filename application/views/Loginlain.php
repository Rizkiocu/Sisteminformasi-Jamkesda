<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href=""/>


    <title>Darel | Login</title>

    <!-- Bootstrap -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/darel/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/darel/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/darel/assets/bower_components/nprogress/nprogress.css">
  <link rel="stylesheet" href="http://localhost/darel/assets/bower_components/build/css/custom.min.css">
    <style type="text/css">
      body {
        background-color: #556B2F;
        background-size:cover;
      }
      .login-page { 
        width: 400px; 
        margin: 76px auto; 
      }
      .form { 
        z-index: 1;
        background:rgba(0,0,0,0.7); 
        max-width: 400px; 
        padding: 35px; 
        text-align: center; 
      }
      h1,a,p{
        color: #fff;
      } 
      h2,a,p{
        color: #fff;
      } 
      
     </style>
  </head>
  <body>
    <div>
      <div class="login-page"> 
        <div class="form"> 
          <h1><font size="3px";> Assalamu'alaikum, Silahkan Login </font></h1>
              
            <section class="login_content">
              <?php echo $this->session->flashdata('message'); ?>
              <?php echo form_open('Auth/do_login')?>
              <img src="http://localhost/darel/assets/images/mts.png" style="width: 150px; height: 150px"><br>
                <p><font face="tipe_font_face">MTS DARUL HIKMAH</p></font><br><br>
                  <div class="col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess1" name="username" placeholder="Username" required="" />
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-xs-12 form-group has-feedback">
                    <input type="password" class="form-control has-feedback-left" id="inputSuccess2" name="password" placeholder="Password" required="" />
                    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div>
                    <input class="btn btn-primary" style="background-color: green; border-color: green" type="submit" value="Login" name="login">
                  </div>
                  <div class="clearfix"></div>
                  <div class="separator">
                  <br />

                  <div>
                    <p>©2019 Sistem Informasi MTs Darul Hikmah</p>
                  </div>
                  </div>
              <?php echo form_close() ?>
            </section>
        </div>
      </div>
    </div>
    <script src="http://localhost/darel/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="http://localhost/darel/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>