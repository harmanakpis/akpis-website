<!DOCTYPE html>
<html>
<head>
    <base href="<?=base_url()?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKPIS | Admin Login</title>
    <?=view('admin/inc/css.php')?>
</head>

<body class="md-skin">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="mt-5">
            <div class="">
                <!-- <h1 class="logo-name">AKPIS</h1> -->
                <img alt="AKPIS" class="mt-5" src="admin_assets/img/footer-logo.png" height="80"/>
            </div>
            <h3>Welcome to AKPIS</h3>
            <?=view('admin/inc/alert')?>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" name="submitForm" value="submitForm" class="btn btn-primary block full-width m-b">Login</button>

                <!-- <a href="#"><small>Forgot password?</small></a> -->
            </form>
            <p class="m-t"> <small>AKPIS &copy; <?=date('Y')?></small> </p>
        </div>
    </div>
    <?=view('admin/inc/js.php')?>
</body>
</html>
