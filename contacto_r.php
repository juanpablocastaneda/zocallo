<?php include("includes/header.php"); ?>
<style>
  a {
    text-decoration: none;
    color: tomato;
  }

  p {
    margin-right: 45px;
    float: right;
    margin-top: 15px;
  }

  input[type=text],
  select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
  }

  input[type=email],
  select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
  }

  input[type=tel],
  select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
  }

  input[type=phone],
  select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
  }


  input[type=submit] {
    width: 50%;
    background-color: tomato;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  textarea {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
  }

  input[type=submit]:hover {
    background-color: #B24531;
  }
</style>
<!--inicia contentr-->


<div id="content">

<?php
include("phpmailer.php");
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
  $smtp=new PHPMailer();
  $smtp->IsSMTP();
  $smtp->CharSet="UTF-8";

  $smtp->SMTPAuth   = true;
  $smtp->SMTPSecure = "tls";
  $smtp->Host       = "smtp.gmail.com";
  $smtp->Username   = "zocallocontacto@gmail.com";
  $smtp->Password   = "2AETyr5Sv7cjaY2M";
  $smtp->Port       = 587;
  $mailTo=array(
      "contacto@zocallo.com"=>"Contacto"
  );
  $smtp->WordWrap = 50;
  $contenidoHTML = "<head>";
  $contenidoHTML .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
  $contenidoHTML .= "</head><body>";
  $contenidoHTML .= "<b>Contenido en formato HTML</b>";
  $contenidoHTML .= "<p><a href='google.com'>google.com</a></p>";
  $contenidoHTML .= "</body>\n";
  $contenidoTexto = "Contenido en formato Texto";
  $contenidoTexto .= "\n\ngoogle.com";
  $smtp->Subject = "Envio de prueba utilizando un servidor SMTP";
  $smtp->AltBody = $contenidoTexto;
  $smtp->MsgHTML($contenidoHTML);
  foreach($mailTo as $mail=>$name){
    $smtp->ClearAllRecipients();
    $smtp->AddAddress($mail,$name);
    if(!$smtp->Send())
    {
      echo "<br>Error (".$mail."): ".$smtp->ErrorInfo;
    }else{
      echo "<br>Envio realizado a ".$name." (".$mail.")";
    }}
  }
?>


  <div>
    <h2>Simple PHP Contact Form</h2>
<div class="contactFrm">
    <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
    <form action="" method="post">
        <h4>Name</h4>
        <input type="text" name="name" placeholder="Your Name" required="" value="Juan Pablo">
        <h4>Email </h4>
        <input type="email" name="email" placeholder="mrjpch@outlook.com" required="" value="mrjpch@outlook.com">
        <h4>Subject</h4>
        <input type="text" name="subject" placeholder="Write subject" required=""  value="Hola">
        <h4>Message</h4>
        <textarea name="message" placeholder="Write your message here" required="">Hola</textarea>
        <input type="submit" name="submit" value="Submit">
        <div class="clear"> </div>
    </form>
</div>





    <div class="foto"><iframe width="315" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.mx/maps?q=Herschel+152,+Anzures,+Miguel+Hidalgo,+Ciudad+de+M%C3%A9xico&amp;hl=es&amp;ie=UTF8&amp;sll=23.625269,-102.540613&amp;sspn=34.353665,44.692383&amp;oq=herschel+152&amp;hnear=Herschel+152,+Anzures,+Miguel+Hidalgo,+Ciudad+de+M%C3%A9xico,+Distrito+Federal&amp;t=m&amp;hq=&amp;ll=19.434219,-99.178648&amp;spn=0.028329,0.027037&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.mx/maps?q=Herschel+152,+Anzures,+Miguel+Hidalgo,+Ciudad+de+M%C3%A9xico&amp;hl=es&amp;ie=UTF8&amp;sll=23.625269,-102.540613&amp;sspn=34.353665,44.692383&amp;oq=herschel+152&amp;hnear=Herschel+152,+Anzures,+Miguel+Hidalgo,+Ciudad+de+M%C3%A9xico,+Distrito+Federal&amp;t=m&amp;hq=&amp;ll=19.434219,-99.178648&amp;spn=0.028329,0.027037&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small></div>

    <p><strong>Zocallo Contact Center</strong><br>
      Kelvin 10, Primer Piso<br />
      Col. Anzures<br />
      Delegación Miguel Hidalgo<br />
      Teléfono: +52 55 9126 2728<br />
      E-mail: <a href="mailto:contacto@zocallo.com">contacto@zocallo.com</a></p>
    <div class="clr"></div>
  </div>
</div>
<!--termina contentr-->
<?php include("includes/footer.php"); ?>