<?php


 session_start();
var_dump($_POST);

if($_POST["name"] == "lea")
{
echo $_POST ["name"] ;
$_SESSION ["id"] = $_POST ["name"];
}
 
else 
{
  echo "Mauvais couple identifiant / mot de passe";
  echo"<a href='connexion.php'> connexion </a>";
}
{
    echo"<a href= 'http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/front.php'> page d'acceuil </a>";
   
}
 
?>