<?php require_once('../config.php') 

?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <head>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="hold-transition login-page">

<div class="login-box">

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./" class="h1"><b>Admin Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <a href="<?php echo base_url ?>">Go to Website</a>
          </div>
          
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
         
        </div>
        <div class="g-recaptcha" data-sitekey="6Ld0mFYpAAAAAKRxP7CAOqn6wenEerKVSfBcLqjH"></div>
      </form>
     
    
    </div>
 
  </div>

</div>
<script>
  $(document).on('click','#submit',function(){
    var response = grecaptcha.getResponse();
    if(response.length=0)
    {
      alert("Please verify you are not a robot")
      return false;
    }
    
  })
</script>



</body>
</html>
