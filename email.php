 <?php
 
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require './lib/vendor/autoload.php';

        if (isset($_POST['nome']) && !empty($_POST['nome'])) { 
               $nome = $_POST['nome'];
              }
       if (isset($_POST['telefone']) && !empty($_POST['telefone'])) { 
               $telefone = $_POST['telefone'];
              }
       if (isset($_POST['email']) && !empty($_POST['email'])) { 
               $email = $_POST['email'];
              }
        if (isset($_POST['assunto']) && !empty($_POST['assunto'])) { 
               $assunto = $_POST['assunto'];
        }
        if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
        $mensagem = $_POST['mensagem'];
        }

        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = '0745fbe6576be9';
        $mail->Password = '685f7b9559a26a';
        $mail->Port = 587;

        $mail->setFrom('evertonvitorfdv@gmail.com', 'Contato');
        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject = $assunto;
        
        $mail->Body = nl2br("Telefone: ".$telefone."<br>").nl2br($mensagem);
        $mail->AltBody = nl2br(strip_tags("Telefone: ".$telefone."<br>")). nl2br(strip_tags($mensagem));
        

        if(!$mail->send()) {
              echo "<script>alert('Não foi possível enviar a mensagem.<br>')</script>";
           
            } else {
                echo "<script>alert('Sua mensagem foi enviada com sucesso, em breve retornaremos seu contato')</script>";  
                header('Location: contato.php');              
                 
            }
              
    ?>
 ?>