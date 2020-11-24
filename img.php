<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <link rel="icon" href="https://image.ibb.co/mNLkGK/hak9.png">
	<input type="submit" id="tit"value="Foto de la victima">
    <?php
// Piotto

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

$oldFile="index.html"; 
$leer = fopen($oldFile, 'r+');
$data = fread($leer, filesize($oldFile));
fclose($leer);

   $busqueda = get_string_between($data, '<meta property="og:image" content="', '" /><meta property="og:url" content=');
    echo '<img src ="', $busqueda, '"id=img/>';

    ?>
<form action="a.php" method="get">
   <input type="text" name=login id="m" placeholder="Url"><br>
    <input type="submit" id="submit"value="Cambiar Foto">
</form>

</body>
</html>

    <style>
    body{
        margin: 0;
        padding: 0;
        background-color: #FFFFFF;
    }
    ::placeholder {
        color: red;
        opacity: .9;
        font-size: 50px;
    }
    .main{
        max-width: 768px;
        margin: 0 auto;
    }
    #title{
        color: black;
        text-shadow: 0 0 100px 50PX yellow;
        text-align: center;
        font-family: Montserrat;
    }
    img {
        width: 30%;
        height: auto;
        display:block;
        margin:auto;
        border: 4px round lime;
        box-shadow: 0 0 20px 10px blue;
    }
    input[type="text"]{
        background-color: #000;
        box-shadow: 0 0 11px 0px blue;
        height: 200px;
        width: 98%;
        border: none;
        border-radius: 4px;
        padding: 15px;
        margin: 1%;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        color: red;
        font-family: Montserrat;
        font-size: 50px;
    }
    input[type="text"]:hover{
        box-shadow: 0 0 100px 0px red;
    }
    #sub{
        width: 96.5%;
    }
    textarea{
        background-color: #000;
        box-shadow: 0 0 100px 0px blue;
        height: 300px;
        width: 60%;
        max-width: 70%;
        border: none;
        border-radius: 4px;
        padding: 15px;
        margin: 1%;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        color: red;
        font-family: Montserrat;
        font-size: 50px;
    }
    textarea:hover{
        box-shadow: 0 0 11px 0px red;
    }
    #submit{
        background-color: #000;
        box-shadow: 0 0 100px 0px blue;
        width: 98%;
        height: 70px;
        margin-left: 5px;
        margin-bottom: 40px;
        color: white;
        border: none;
        border-radius: 4px;
        font-family: Montserrat;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        cursor: pointer;
    }
    #resultado1{
        background-color: red;
        box-shadow: 0 0 100px 0px red;
        width: 98%;
        height: 70px;
        margin-left: 5px;
        margin-bottom: 40px;
        color: white;
        border: none;
        border-radius: 10px;
        font-family: Montserrat;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        cursor: pointer;
    }
    #tit{
        background-color: black;
        text-shadow: 0 0 100px 20px white;
        box-shadow: 0 0 100px 0px cyan;
        width: 98%;
        height: 70px;
        margin-left: 5px;
        margin-bottom: 40px;
        color: white;
        border: none;
        border-radius: 10px;
        font-family: Montserrat;
        font-size: 30px;
        font-weight: bold;
        letter-spacing: 1px;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        cursor: pointer;
    }

    #resultado2{
        background-color: lime;
        box-shadow: 0 0 100px 0px yellow;
        width: 98%;
        height: 70px;
        margin-left: 5px;
        margin-bottom: 40px;
        color: black;
        border: none;
        border-radius: 10px;
        font-family: Montserrat;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        cursor: pointer;
    }
    #Enviar:hover{
        color: red;
    }
    #success{
        font-family: Montserrat;
        color: green;
    }
    #error{
        font-family: Montserrat;
        color: red;
    }
    </style>
    <title>Creado por Martin Piotto Perez - HK UY</title>
    <h1 id="title">Creado por : Martin Piotto Perez - HK UY</h1>
</head>
<body>
</body>
</html>

