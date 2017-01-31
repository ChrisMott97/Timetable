<div class="login-page">
<div class="row">
    <div class="col-md-12">
        <?php 
        if(isset($_SESSION['error'])){
            echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        }
        ?>
    </div>
</div>
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus/>
      <input type="password" id="password" name="password" class="form-control" placeholder="password" required/>
      <button type="submit" name="submit">login</button>
    </form>
    <a class="btn" href="/">return</a>
  </div>
</div>
