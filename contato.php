<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include_once './conexao.php';
    require './lib/vendor/autoload.php';
    include ("header.html");
?>


<main>
    <h1>Formulario de contato</h1>
    <form name="add_msg" action="" method="POST">
        <label>Nome:</label>
        <input type="TEXT" name="name" id="name" placeholder="Nome completo" required><br>
        <label>Email:</label>
        <input type="email" name="email" id="email" placeholder="Seu email" required><br>
        <label>Assunto:</label>
        <input type="TEXT" name="assunto" id="assunto" placeholder="assunto" required><br>
        <label>Mensagem:</label>
        <input type="TEXT" name="mensagem" id="mensagem" placeholder="mensagem" required><br>
        <input type="submit" value="Enviar" name="sendAddMsg">
    </form>
    <?php               
                $data = filter_input_array(INPUT_POST,FILTER_DEFAULT);
                
                if(!empty($data['sendAddMsg'])){
                   var_dump($data);
                  $query_msg = "INSERT INTO contatos_msgs (name,email,assunto,mensagem, data_envio) VALUES (:name, :email, :assunto, :mensagem, NOW())";

                  $add_msg = $conn->prepare($query_msg);

                  $add_msg ->bindParam(':name',$data['name'], PDO::PARAM_STR);
                  $add_msg ->bindParam(':email',$data['email'], PDO::PARAM_STR);
                  $add_msg ->bindParam(':assunto',$data['assunto'], PDO::PARAM_STR);
                  $add_msg ->bindParam(':mensagem',$data['mensagem'], PDO::PARAM_STR);

                  $add_msg ->execute();

                  if($add_msg->rowCount()){

                    $mail = new PHPMailer(true);

                      try {
                        //Server settings
                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                        $mail->CharSet = 'UTF-8';
                        $mail->isSMTP();
                        $mail->Host = 'smtp.mailtrap.io';
                        $mail->SMTPAuth = true;
                        $mail->Username = '814ec1619793f1';
                        $mail->Password = '8e1c263bd0e2ef';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 2525;

                        //Recipients
                        $mail->setFrom('evertonvitorfdv@gmail.com', 'Qualitec ');
                        $mail->addAddress($data['email'], $data['name']);

                        // Content
                        $mail->isHTML(true);                                  
                        $mail->Subject = $data['assunto'];
                        $mail->Body = $data['mensagem'];
                        $mail->AltBody = $data['assunto'];

                        $mail->send();
                        echo "<script>alert('Email de conatato enviado con sucesso')</script>";
                    } catch (Exception $e) {
                        echo "<script>alert('Erro ao enviar mensagem ')</script>";
                    }
                      
                  }else{
                      echo "<script>alert('Erro ao enviar mensagem ')</script>";
                  }
                }          
            ?>
</main>
</header>
<section>





</section>
<!-- link whatsapp-->
<a href="https://api.whatsapp.com/send?phone=5532984050969&text=Olá!" class="float" target="_blank">
    <i class="bi bi-whatsapp my-float"></i>
</a>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/55(aqui seu numero com ddd | tudo junto)?text=Adorei%20seu%20artigo" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
    <i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>

<?php
    include ("footer.html");
?>