<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <?php    include 'inc_js.php';
              include 'form/main_form.php';
              include 'form/gridview.php';
              include 'database/db_tools.php';
              include 'connect.php';
      ?>

    <title>เข้าสู่ระบบ</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/floating-labels.css">
    <link rel="stylesheet" href="CSS/sticky-footer.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="CSS/jquery-ui.css"> 
    <link rel="stylesheet" href="CSS/main.css">
    
  </head>

  <body>
   <?php
	$form = new form();
	$text_user = new textfield('user_user','inputEmail','form-control','Email address');
	$text_pass = new pass('user_pass','form-control','Password','inputPassword');
	$submit = new buttonok('Login','','btn btn-lg btn-primary btn-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12','');
	echo $form->open('','','form-signin','check_login.php','');
    ?>

      <div class="text-center mb-4">
<!--         <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
        <h1 class="h3 mb-3 font-weight-normal">เข้าสู่ระบบ</h1>
      </div>

      <div class="form-label-group">
        <?php echo $text_user; ?>
        <label for="inputEmail">User</label>
      </div>

      <div class="form-label-group">
<!--         <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
            <?php echo $text_pass; ?>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2014-2018</p>
   <?php echo $form->close();?>
  </body>
</html>
