<html>

<head>
    <?php require_once('partials/header.php');?>
    <link type="text/css" href="public/css/login.css">
</head>

<body>

        <div class="container">
           <div class="row">
            <form class="form-signin col-md-6 col-md-offset-3" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="username" class="sr-only">Username</label>
                <input type="username" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            </div>
        </div>
        <!-- /container -->

    <?php require_once('partials/footer.php');?>
</body>

</html>
