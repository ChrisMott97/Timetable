<html>

<head>
    <?php require_once('partials/header.php');?>
    <link type="text/css" href="public/css/index.css">
</head>

<body>
    <?php require_once('partials/navbar.php');?>
      
       <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1><?= $username ?></h1>
        <p>Below is a basic map of the school.</p>
        <p>To use the built in planner and get the quickest routes to lessons, please login or register!</p>
        
      </div>

    </div> <!-- /container -->
    
    <?php require_once('partials/footer.php');?>
</body>

</html>
