<?php

if (!isset($_POST['submit'])) {
  echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['mail'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
  echo"Name and email are mandatory!";
  exit;
}

$email_from ="gao20@hotmail.it";
$email_subject ="New form submission";
$email_body ="You have receveid a new message from the user $name. \n".
              "email address: $visitor_email\n".
              "Here is the message: $message\n".

$to = "gao20@hotmail.it";
$headers = "From: $email_from \r\n";

mail($to, $mail_subject, $email_body, $headers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PORTFOLIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-control" content="no-cache">
<link rel="stylesheet" type="text/css" href="Portfolio.css">
</head>
<body>
<!-- commento aggiunto-->
<div class="header">
  <h1>Gao Luca</h1>
  <p>A website created by me.</p>
</div>

<div class="navbar">
  <a href="#">Informazioni personali</a>
  <a href="#">Messaggi</a>
  <a href="#commento">Contatti</a>
  <a href="#" class="right">Link</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5></h5>
    <img src="img801.jpg" class="img" >
    <h3>ISTRUZIONE</h3>
    <p>Diploma di ragioneria presso istituto "Enrico De Nicola" con votazione 96/100.</p>
    <h3>COMPETENZE</h3>
    <ul style="list-style-type:square;">
      <li>Buona capacità di lavorare in gruppo;</li>
      <li>Veloce adeguamento all'ambiente di lavoro</li>
      <li>Ottime capacità di organizzare il lavoro in base alle richieste;</li>
      <li>Autonomia nell'effettuare scelte operative;</li>
      <li>Attitudine a lavorare nei tempi prestabiliti</li>

    </ul>
    <h3>OBIETTIVI</h3>
    <p>Mettere in pratica le capacità acquisite nel tempo per dare supporto all'azienda in modo dafavorirne lo svliluppo aziendale oltre a un accrescimento personale.</p>
    <div class="recapito">
      <h3>
    <img src="https://www.bit4law.com/wp-content/uploads/2019/01/acquisizione-forense-email.png" class="email" alt="email" width="40px"
      height="40px" border="0"> &nbsp; &nbsp;
      Gao20@hotmial.it
    </h3>
      <p></p>
      <h3>
    <img src="https://www.dimarcolor.it/wp-content/uploads/2016/03/icona-telefono-natura.png" class="telephone" alt="telefono" width="40px"
      height="40px" border="0"> &nbsp; &nbsp;
      3913388135
    </h3>
      <p></p>
      <h3>
    <img src="https://lanark-stnicholas.co.uk/images/parish.jpg" class="place" alt="luogo" width="40px"
      height="40px" border="0"> &nbsp; &nbsp;
      Via Torino 21
    </h3>
  </div>
  </div>
  <div class="main">
    <h2>Esperienze professionali</h2>
    <h5></h5>
    <img src="image2.jpg" alt="progetto" class="img" style="height:200px;">
    <h3>2018-2019</h3>
    <p>Esperienza alberghiera come receptionist e assistente presso Hotel Boston in zona Centrale a Milano.</p>
    <h3>2017-2018</h3>
    <p>Esperienza come assistente sushi presso Sushidaily.</p>
    <h3>2015-2016</h3>
    <p>Esperienza presso Pull&Bear del gruppo Inditex nel centro commerciale "Vulcano" a Sesto San Giovanni.</p>
    <h3>2014</h3>
    <p>Stage presso Arpa ( agenzia regionale protezione dell'ambiente) di Monza.</p>
    <hr>
    <form methond="post" name= "myform" action="Portfolio.php">
      <label for="fname">Nome</label>
      <input type="text"  name="name" placeholder="es Mario..">
      <!--<label for="lname">Cognome</label>
      <input type="text"  name="lastname" placeholder="es Rossi.."> -->
      <label for="email">Email</label>
      <input type="text"  name="email" placeholder="es.@gmail.com">
      <label for="subject">Oggetto</label>
      <textarea  name="message" placeholder="Scrivi qualcosa.." style="height:170px"></textarea>
      <input type="submit" value="Invia">
    </form>
  </div>
</div>

<footer class="footer">
  <a href="https://instagram.com" target="blank"><img src="https://www.pngkit.com/png/full/140-1402893_logo-de-instagram-png-svg-fondo-transparente-instagram.png" width="40px"
    height="40px" border="0" style="border-radius:8px; margin-left:30px;"></a>
    <a href="https://youtube.com" target="_blank"><img src="https://image.flaticon.com/icons/svg/1383/1383260.svg" width="40px"
      height="40px" border="0" style="border-radius:8px; margin-left:30px;"></a>
      <a href="https://skype.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Skype_logo_%282019%E2%80%93present%29.svg/768px-Skype_logo_%282019%E2%80%93present%29.svg.png" width="40px"
        height="40px" border="0" style="border-radius:8px; margin-left:30px;"></a>
        <a href="https://facebook.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" width="40px"
          height="40px" border="0" style="border-radius:8px; margin-left:30px;"></a>

</footer>


</body>
</html>
