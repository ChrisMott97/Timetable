<html>

<head>
    <?php require_once('partials/header.php');?>
    <link href="../public/css/login.css" rel="stylesheet" />
    <title>SP - Login</title>
</head>

<body>
<div class="">
    <div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus/>
      <input type="password" id="password" name="password" class="form-control" placeholder="password" required/>
      <button type="submit" name="submit">login</button>
    </form>
  </div>
</div>
