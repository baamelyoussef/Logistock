<?php

function emptyInputLogin($username,$password) {
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }else{
        $result=false;
    }
    return $result;
}
function loginUser($conn,$username,$password){
    $uidExists = uidExists($conn,$username);

    if($uidExists ==false){
        exit();
    }
}

function unExists($conn,$username)  {
    $sql ="SELECT * FROM users WHERE username = ?";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }
    mysqli_stmt_bind_param($stmt);
}