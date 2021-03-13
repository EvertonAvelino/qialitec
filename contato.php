<?php
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qualitec agro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" src="js/funcoes.js">
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="#home">
                <img src="img/logoTopo.jpg" alt="logo" style="width:40px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->

            <div class="collapse navbar-collapse minhas-fontes" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Parceiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Representantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--fim do menu -->

        <!--inicio slide -->
        <div class="espaco-topo">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-inner" role="listbox">
                        <?php
						$controle_ativo = 2;						
						$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
						$resultado_carousel = mysqli_query($conn, $result_carousel);
						while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
							if($controle_ativo == 2){ ?>
                        <div class="carousel-item active">
                            <img src="img/carousel/<?php echo $row_carousel['imagen_carousel']; ?>"
                                class="d-block w-100" alt="<?php echo $row_carousel['nome']; ?>">
                        </div><?php
                        	$controle_ativo = 1;
							}else{ ?>
                        <div class="carousel-item">
                            <img src="img/carousel/<?php echo $row_carousel['imagen_carousel']; ?>"
                                class="d-block w-100" alt="<?php echo $row_carousel['nome']; ?>">
                        </div> <?php
							}
						}
					?>
                    </div>
                    <!-- Controles -->
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--fim  slide -->
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