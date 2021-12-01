<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logician Inventory Solutions- Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/DataTables/datatables.min.css" />

</head>

<body class="bg-gradient-primary2">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="mr-fox-logo">
                <img class="logo" height="50" src="mr-fox.png" alt="Mr-Fox Logo">
    
    
            </div>
            <h6 class="text-gray-100 mb-4 pt-4 mt-4">Logistock - Mr Fox</h6>
            
            <div class="col-xl-10 col-lg-12 col-md-9 col-sm-12">

                <div class="card o-hidden border-0 shadow-lg my-0">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-2">
                                    <div class="text-center">
                                        <h6 class="h4 text-gray-900 mb-1">Bienvenue une autre fois!</h6>
                                    </div>
                                   
                                        <!--
                                             <?php if ($statut == "udne") { ?>
                                                        <section>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="d-flex justify-content-center text-center">
                                                        <div class="alert alert-danger" role="alert">Le nom d'utilisateur n'existe pas. Essayez à nouveau.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section><?php  } elseif ($statut == "problem") { ?>
                                        <section>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="d-flex justify-content-center text-center">
                                                        <div class="alert alert-danger" role="alert">Mot de passe est incorrect. Essayez à nouveau.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section><?php  } ?>
                                         -->
                            
                                    <form class="user" action="" method="POST" id="one">
                                        <div class="form-group-order">
                                            <input type="texte" class="form-control form-control-user" id="inputUsername" name="username" aria-describedby="username" placeholder="Enter votre nom d'utilisateur...">
                                        </div>
                                        <div class="form-group-order">
                                            <input type="password" class="form-control form-control-user" name="password" id="inputPassword" placeholder="Password">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div> -->
                                        <!-- </div> -->
                                        <button name="submit" type="submit" id="btnSubmit" class="btn btn-primary btn-user btn-block"> Login</button>
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --><?php
                                                session_start();
                                                if(isset($_POST["submit"])){
                                                    $username= $_POST["username"];
                                                    $password=$_POST["password"];
                                                    $_SESSION["username"]=$username;
                                                    require_once 'db.php';
                                                    require_once 'functions.php';
                                                    /*
                                                    if(emptyInputLogin($username,$password) !== false){
                                                        exit();
                                                    }
                                                    loginUser($conn, $username,$password);
                                                    */
                                                    $query="select * from users where username= '$username' and password='$password'";
                                                    if($result && mysqli_num_rows($result) >0){
                                                        $user_data= mysqli_fetch_assoc($result);
                                                        return $user_data;
                                                    }
                                                }else{
                                                    header("location: ./login.php");
                                                }
                                                ?>
                                    </form>

                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

       
    </div>
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-light">
                <span>Logistock v0.9 - Copyright &copy; www.logician.ma 2021 </span>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>