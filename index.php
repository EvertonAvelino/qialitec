<?php
	include_once("conexao.php");
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

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>

        <nav class="menu fixed-top">


            <img class="logo" src="img/logo-qualitec.png" alt="logo">
            <ul class="nav__links">
                <li><a href="#home">Empresa</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#parceiros">Parceiros</a></li>
                <li><a href="#representantes">Representantes</a></li>
                <li><a href="#localizacao">localização</a></li>
            </ul>
            <a class="nav-link" href="contato.php"><button>Contato</button></a>

        </nav>
        <!--fim do menu -->

        <!--inicio slide -->
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
                        <img src="img/carousel/<?php echo $row_carousel['imagen_carousel']; ?>" class="d-block w-100"
                            alt="<?php echo $row_carousel['nome']; ?>">
                    </div><?php
                        	$controle_ativo = 1;
							}else{ ?>
                    <div class="carousel-item">
                        <img src="img/carousel/<?php echo $row_carousel['imagen_carousel']; ?>" class="d-block w-100"
                            alt="<?php echo $row_carousel['nome']; ?>">
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
            <!--fim  slide -->
    </header>


    <main class="container">
        <section>
            <div id="home" class="container-fluid">
                <h1>home</h1>
            </div>
            <div id="servicos" class="container-fluid">
                <h1>Serviços</h1>

            </div>
            <div id="parceiros" class="container-fluid">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
                <img id="partners" src="#">
            </div>
            <div id="representantes" class="container-fluid">
                <h1>Representantes</h1>
            </div>
            <div id="localizacao" class="container-fluid">
                <h1>Localização</h1>
            </div>

        </section>
        <!-- link whatsapp-->
        <a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=5532984050969&text=Olá!" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>

    </main>


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