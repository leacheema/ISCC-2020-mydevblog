<?php


 session_start();
var_dump($_POST);

if($_POST["password"] == "2020")
{
echo $_POST ["password"] ;
$_SESSION ["id"] = $_POST ["name"];
header("Location: http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/front.php");
}
 
else 
{
  echo "Mauvais couple identifiant / mot de passe";
  echo"<a href='connexion.php'> connexion </a>";
}
{
    echo"<a href= 'http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/connexion.php'> page d'acceuil </a>";
   
}
 
?>


