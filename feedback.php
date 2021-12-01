<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logician Inventory Solutions- Dashboard</title>
   
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="./webfontkit/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="style.css" rel="stylesheet">
 

</head>

<body class="bg-gradient-primary2">
<?php
    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="mr-fox-logo">
                <img class="logo" height="50" src="mr-fox.png" alt="Mr-Fox Logo">
    
    
            </div>
            <h6 class="text-gray-100 mb-4 pt-4 mt-4">Logistock - Mr Fox</h6>
            <div class="col-xl-10 col-lg-12 col-md-9 col-sm-12">

                <div class="card  o-hidden border-0 shadow-lg my-0">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <svg id="completion" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 101">
                            <style>
                              .st0{fill:#51BBA0;fill-opacity:0.4;} .st1{fill:#51BBA0;fill-opacity:0.1;} .st2{fill:#51BBA0;}
                            </style>
                          
                            <g id="configurator">
                              <g id="configurator_completion">
                                <g id="stars">
                                  <circle id="Oval" class="st0" cx="14" cy="18" r="1"/>
                                  <circle id="Oval-Copy-4" class="st0" cx="27" cy="20" r="1"/>
                                  <circle id="Oval-Copy-10" class="st0" cx="76" cy="20" r="1"/>
                                  <circle id="Oval-Copy-2" class="st0" cx="61.5" cy="12.5" r="1.5"/>
                                  <circle id="Oval-Copy-9" class="st0" cx="94" cy="53" r="1"/>
                                  <circle id="Oval-Copy-6" class="st0" cx="88" cy="14" r="1"/>
                                  <circle id="Oval-Copy-7" class="st0" cx="59" cy="1" r="1"/>
                                  <circle id="Oval_1_" class="st0" cx="43" cy="9" r="2"/>
                                  <path id="ster-01" class="st0" d="M28.5 3.8L26 6l2.2-2.5L26 1l2.5 2.2L31 1l-2.2 2.5L31 6z"/>
                                  <path id="ster-01" class="st0" d="M3.5 50.9l-2.1 2.4 1.7-2.7-2.9-1.2 3.1.8.2-3.2.2 3.2 3.1-.8-2.9 1.2 1.7 2.7z"/>
                                  <path id="ster-01" class="st0" d="M93.5 27.8L91 30l2.2-2.5L91 25l2.5 2.2L96 25l-2.2 2.5L96 30z"/>
                                  <circle id="Oval-Copy-5" class="st0" cx="91" cy="40" r="2"/>
                                  <circle id="Oval-Copy-3" class="st0" cx="7" cy="36" r="2"/>
                                  <circle id="Oval-Copy-8" class="st0" cx="7.5" cy="5.5" r=".5"/>
                                </g>
                              </g>
                            </g>
                            <g id="cirkel">
                              <g id="Mask">
                                <path id="path-1_1_" class="st1" d="M49 21c22.1 0 40 17.9 40 40s-17.9 40-40 40S9 83.1 9 61s17.9-40 40-40z"/>
                              </g>
                            </g>
                            <path id="check" class="st2" d="M31.3 64.3c-1.2-1.5-3.4-1.9-4.9-.7-1.5 1.2-1.9 3.4-.7 4.9l7.8 10.4c1.3 1.7 3.8 1.9 5.3.4L71.1 47c1.4-1.4 1.4-3.6 0-5s-3.6-1.4-5 0L36.7 71.5l-5.4-7.2z"/>
                          </svg>

                          <h5 id="confirmed" >Your order was sent successfully!</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
  
<section class="move-buttons">
<div class="row d-flex justify-content-around">

    <div id="next-button" class="col-xs-6">
     <a href="./login.html"> <button type="submit" class="btn btn-success">Exit</button></a> 
    </div>
</form>
</div>
</section>

    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-light">
                <span>Logistock v0.9 - Copyright &copy; www.logician.ma 2021 </span>
            </div>
        </div>
    </footer>

    
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript"  src="./js/main.js" ></script>
    <script language="JavaScript" type="text/javascript"  src="./js/numpad.js" ></script>
    <script src="https://kit.fontawesome.com/fb5d955344.js" crossorigin="anonymous"></script>

</body>
</html>