<div class="login-page">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php 
        if(isset(Controller::$error)){
            echo '<div class="alert alert-danger">'.Controller::$error.'</div>';
        };
        ?>
    </div>
</div>
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus/>
      <input type="password" id="password" name="password" class="form-control" placeholder="password" required/>
      <button type="submit" name="submit">login</button>
    </form>
  </div>
</div>
