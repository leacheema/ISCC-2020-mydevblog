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
  echo"<a href='back.php'> back office </a>";
}
{
    echo"<a href= 'http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/back.php'> page d'acceuil </a>";
   
   
}
 
?>