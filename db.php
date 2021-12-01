<?php

$servername ="localhost";
$serverusername="root";
$dbpassword="";
$dbname="logistock";

$conn=mysqli_connect($servername,$serverusername,$dbpassword,$dbname);

if ($conn) {  
    echo "Connection successfully";  
}else{  
    
} 