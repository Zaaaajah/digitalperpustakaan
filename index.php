<?php
 require('config/auth.php');
 $cek = new Auth;
 
    require('layout/auth/header.php');

     if(!isset($_GET['page'])){
      echo "<script>";
      echo "alert('Logout berhasil!!!');";
        echo "window.location.href ='index.php?page=login';";
        echo "</script>";
     }

     if($_GET['page'] == 'login'){
        require('login.php');
     } elseif ($_GET['page'] == 'register'){
       require('register.php');
     } elseif($_GET['page'] == 'postlogin'){
     $cek->login($_POST['email'],$_POST['password']);
    } elseif($_GET['page'] == 'postregister'){
     $cek->register($_POST['userid']=0,
                  $_POST['username'],
                 password_hash($_POST['password'],PASSWORD_DEFAULT),
                  $_POST['email'],
                  $_POST['namalengkap'],
                  $_POST['alamat'],
                  $_POST['role']);}

                  elseif($_GET['page'] == 'logout'){
                    $cek->logout();
   }
     require('layout/auth/footer.php');
?>