<html>

<head>
    <?php require_once('partials/header.php');?>
    <title>SP - Account</title>
</head>

<body>
       <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1><?= "Welcome, $user->firstname $user->lastname" ?></h1>
        <p><?= "Username = $user->username" ?></p>
        <p><?= "Year = $user->year"?></p>
      </div>
    
