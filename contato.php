<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include_once './conexao.php';
    require './lib/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qualitec agro</title>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" src="js/funcoes.js">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>

        <nav class="menu fixed-top">


            <img class="logo" src="img/logoTopo.png" alt="logo">
            <ul class="nav__links">
                <li><a href="index.html #empresa">Empresa</a></li>
                <li><a href="index.html #servicos">Serviços</a></li>
                <li><a href="index.html #parceiros">Parceiros</a></li>
                <li><a href="index.html #representantes">Representantes</a></li>
                <li><a href="index.html #localizacao">localização</a></li>

            </ul>
            <a class="nav-link" href="contato.php"><button>Contato</button></a>

        </nav>
        <!--fim do menu -->

        <!--inicio slide -->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/carousel/slide01.png" alt="slide1">

                    <div class="carousel-caption">

                        <h3>Qualitec</h3>
                        <p>Qualidade e tecnologia a serviço do agricultor</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel/img01.jpg" alt="slide2">
                    <div class="carousel-caption">

                        <h3>Qualitec</h3>
                        <p>Qualidade e tecnologia a serviço do agricultor</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel/img03.png" alt="slide3">
                    <div class="carousel-caption">
                        <h3>Qualitec</h3>
                        <p>Qualidade e tecnologia a serviço do agricultor</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
        <!--fim  slide -->
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

    <footer>

        <p id="rodape"> &copy; 2021 - Qualitec</p>
        <p id="rodape"> Desenvolvido por:<a href="https://api.whatsapp.com/send?phone=5532984050969&text=Olá!"
                class="nav-link">Codeprime</a>
        </p>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>