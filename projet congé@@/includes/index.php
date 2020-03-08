<!DOCTYPE html>
<?php
op_start();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Acceuil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<style type="text/css">
    .login-dark{height:570px;background:url(../../assets/img/societe.png)  #7575a3;background-size:cover;position:relative}.login-dark form{max-width:320px;width:90%;background-color:#99ccff;padding:40px;border-radius:4px;transform:translate(-50%,-50%);position:absolute;top:50%;left:50%;color:#fff;box-shadow:3px 3px 4px rgba(0,0,0,.2)}.login-dark .illustration{text-align:center;padding:15px 0 20px;font-size:100px;color:#ffffff}.login-dark form .form-control{background:0 0;border:none;border-bottom:1px solid #ffffff;border-radius:0;box-shadow:none;outline:0;color:inherit}.login-dark form .btn-primary{background:#214a80;border:none;border-radius:4px;padding:11px;box-shadow:none;margin-top:26px;text-shadow:none;outline:0}.login-dark form .btn-primary:active,.login-dark form .btn-primary:hover{background:#214a80;outline:0}.login-dark form .forgot{display:block;text-align:center;font-size:12px;color:#ffffff;opacity:.9;text-decoration:none}.login-dark form .forgot:active,.login-dark form .forgot:hover{opacity:1;text-decoration:none}.login-dark form .btn-primary:active{transform:translateY(1px)}
     .clean-navbar .navbar-brand img{height:100%;display:inline-block;margin-right:10px;width:60px} 
</style>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">
            <img src="714464- 150p.png"><span> SOCIÉTÉ GI</span>
        </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index_admin.php">Admin</a></li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <!--<section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">-->
            
        </section>

         <div class="login-dark">
            <br>
            <br>
            <br>
            <br>
            <br>

            
        <form method="post" action="">
            <h1><center><strong>Agent</strong></center></h1>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="login" placeholder="log in Agent"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="con"><a href="index_agent.php">se connecter</a></button></div></form>
    </div>
      <div class="row p-0 m-0">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center align-content-center p-0 m-0">
            <p class="p-0 m-0">ADRESSE: AVENUE MEKKA N:344 TEL:0662343435 </p>
            <a href="https://www.facebook.com/omolds/" target="_blank" class="p-0 m-2 d-inline-block">
                <h3><i class="fa fa-facebook-square"></i></h3>
            </a>
            <a href="https://twitter.com/OmoldsCo" target="_blank" class="p-0 m-2 d-inline-block">
                <h3><i class="fa fa-twitter"></i></h3>
            </a>
            <a href="https://plus.google.com/u/0/114804899141677023355" target="_blank" class="p-0 m-2 d-inline-block">
                <h3><i class="fa fa-google-plus"></i></h3>
            </a>
            <a href="https://www.youtube.com/channel/UCO8bVpiYLrkNhxoQUdyIYEQ" target="_blank" class="p-0 m-2 d-inline-block">
                <h3><i class="fa fa-youtube-play"></i></h3>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center p-0 m-0">
            <a class="text-dark" href="https://www.SOCIÉTÉGI.com/home/" target="_blank">
                <h6 class="text-center p-0 m-2">www.SOCIÉTÉGI.com</h6>
            </a>
        </div>
    </div>    <!-- End: Login Form Dark -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    
    </main>
</body>
</html>
<?php



require_once('connection.php');
 $login=$_POST['login'];
 echo "$login";
 $password=$_POST['password'];
 if(isset($_POST['con'])){
    if(!empty($login) && !empty($password)){
    $req="select LOGIN,MOT_PASSE from admin where LOGIN='".$login."' and MOT_PASSE='".$password ."'" ;
    echo "$req";
    $res=mysqli_query($dbh,$req);
    if(mysqli_fetch_array($res)){
       $_SESSION['User']=$_POST['login'];
       header("Location: index_admin.php");
       ob_end_flish();
    }
  
    }
}

?>
  
    
