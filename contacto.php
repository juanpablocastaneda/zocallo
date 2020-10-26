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
  <div class="contenedorInfo">
    <div class="firstColumn">
      <div class="tit"><img src="images/contacto-tit.jpg" width="530" height="80" alt="Quien es ZoCALLo" /></div>
      <div class="txt">

        <div>

          <?php
          include("phpmailer.php");
          $smtp = new PHPMailer();
          $smtp->IsSMTP();
          $smtp->SMTPAuth = true;
          $smtp->SMTPSecure = "tls";
          $smtp->Host = "smtp.gmail.com";
          $smtp->Username = "zocallocontacto@gmail.com";
          $smtp->Password = "2AETyr5Sv7cjaY2M";
          $smtp->Port = 587;
          # $mailTo=array("contacto@zocallo.com"=>"Contacto");
          $action = $_REQUEST['action'];
          if ($action == "") {
          ?>
            <form action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="action" value="submit">
              <label for="name">Nombre Completo:</label><br>
              <input name="name" type="text" value="" size="30" /><br>
              <label for="email">Correo Electrónico:</label> <br>
              <input name="email" type="email" value="" size="30" onkeyup="javascript:this.value=this.value.toLowerCase();" /><br>
              <label for="phone">Número Celular:</label><br>
              <input name="phone" type="tel" value="" size="30" placeholder="10 dígitos" /><br>
              <label for="message">Mensaje:</label> <br>
              <textarea name="message" rows="7" cols="30" placeholder="Escribe comentario, duda o información a solicitar."></textarea><br>
              <input type="submit" value="Enviar mensaje" />
            </form>
          <?php
          } else {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $message = $_REQUEST['message'];
            $smtp->AltBody = sprintf("%s \n %s \n %s \n %s \n", $name, $email, $phone, $message);
            $smtp->MsgHTML(sprintf("%s \n %s \n %s \n %s \n", $name, $email, $phone, $message));
            if (($name == "") || ($email == "") || ($phone == "") || ($message == "")) {
              echo "Todos los campos son necesarios, por favor completa la información del <a href=\"\">formulario</a> para responder tu solicitud de una mejor manera. Gracias por tu comprensión.";
            } else {
              $smtp->Subject = "Mensaje página de contacto zocallo.com/contacto ";
              $smtp->AddAddress("contacto@zocallo.com", $name);
              $smtp->AddAddress("tammer@m4b.digital", $name);
              if ($smtp->Send()) {
                echo "<a href=\"\">Mensaje enviado, gracias, nos pondremos en contacto en breve.</a>";
              }
            }
          }
          ?>

        </div>

      </div>
    </div>

    <div class="foto"><iframe width="315" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.12420236749!2d-99.1774462!3d19.4326577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4054755be8d2e7c4!2sZocallo!5e0!3m2!1ses!2smx!4v1602867964419!5m2!1ses!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br /><small><a href="https://goo.gl/maps/rkYiyGGfK6PbmJ2K7" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small></div>

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