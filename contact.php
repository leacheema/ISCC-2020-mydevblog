<!DOCTYPE html>
<html>

<head>
<link type="text/css" rel="stylesheet" href="contact.css"> </link>
</head>


 <?php include_once ("header.php")?>

 <header>

 <h1>Contact</h1>
 
 <form action="/ma-page-de-traitement" method="post">

 

    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>

    <div>
        <label for="Surname ">Nom :</label>
        <input type="text" id="surname" name="user_surname">
    </div>

    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>

    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>

<div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

 </header>

