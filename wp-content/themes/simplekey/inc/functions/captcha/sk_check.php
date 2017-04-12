<?php
session_start(); 
$code = trim($_POST['code']); 
if($code!==$_SESSION["sk_captcha"]){ 
   echo 0; 
}else{
   echo 1;
}
?>