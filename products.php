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

    <form id="product-order" action="./view.html" method="POST"></form>
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
                        <div class="row scroll justify-content-center">
                         
                            <div class="col-xs-12">
                                <div class="p-2">
                                    <div class="text-center">
                                        <h6 class="h4 text-gray-900 mb-8 ">Choose products</h6>
                                    </div>
     
                                    <div class="col-lg-14">
                                        <div class="table-responsive" > 
                                          <table class="table table-bordered"> 
                                            <thead> 
                                              <tr>
                                                
                                                  <th>Product Name</th> 
                                                  <th>Stock Quantity</th> 
                                                  <th>Ordered</th> 
                                                
                                               </tr> 
                                            </thead> 
                                            <tbody> 
                                                
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                   
                                                        <td><input class="qte-input" id="v-1" value="0" pattern="[0-9]*"  type="number"></td> 
                                                  </tr> 
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-2" value="0" pattern="[0-9]*"  type="number"></td>                                                  
                                                  </tr> 
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-3" value="0" pattern="[0-9]*"  type="number"></td> 

                                        
                                                  </tr> 
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-4" value="0" pattern="[0-9]*"  type="number"></td> 

                                        
                                                  </tr> 

                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-5" value="0" pattern="[0-9]*"  type="number"></td> 

                                        
                                                  </tr> 
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-6" value="0" pattern="[0-9]*"  type="number"></td> 

                                        
                                                  </tr> 
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-7" value="0" pattern="[0-9]*"  type="number"></td> 

                                        
                                                  </tr> 
                                                  <tr> 
                                                    <th scope="row">Coca Cola</th> 
                                                  
                                                    <td>3 packet</td> 
                                                    <td><input class="qte-input" id="v-8" value="0" pattern="[0-9]*"  type="number"></td> 
                                                  </tr> 
                               
                                                </tbody> 
                                               </table> 
                                             </div>
                                        </div>
                                   
                                </div>
                            </div>
                             
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<section class="move-buttons">
<div class="row d-flex justify-content-around">
    <div class="col-xs-6">
       <a href="./login.html"> <button type="button" class="btn btn-secondary">exit</button></a>
    </div>
    <div id="next-button" class="col-xs-6">
     <a href="./view.html"> <button type="submit" class="btn btn-primary">next</button></a> 
    </div>

</div>
</form>
</section>

    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-light">
                <span>Logistock v0.9 - Copyright &copy; www.logician.ma 2021 </span>
            </div>
        </div>
    </footer>

    
            <!-- (C) ATTACH NUMPAD -->
            <script>
                window.addEventListener("load", function() {
                    // BASIC
                    numpad.attach({
                        target: "product-order"
                    });
                    // BASIC
                    numpad.attach({
                        target: "demoC"
                    });
                    // WITH OPTIONS
                    numpad.attach({
                        target: "demoB",
                        max: 10,
                        decimal: false
                    });
                });
            </script> 

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript"  src="./js/main.js" ></script>
    <script language="JavaScript" type="text/javascript"  src="./js/numpad.js" ></script>
    <script src="https://kit.fontawesome.com/fb5d955344.js" crossorigin="anonymous"></script>

</body>
</html>