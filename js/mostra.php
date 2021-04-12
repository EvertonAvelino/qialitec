<?php
 include_once("conexao.php");

	$id_cidade = $_REQUEST['id_cidade'];
	
      $sql = "SELECT representante.id,representante.nome as nome_representante, representante.telefone,cidade.nome as nome_cidade FROM representante INNER JOIN cidade WHERE   $id_cidade = representante.id GROUP BY nome_representante AND nome_cidade";
            foreach ($conn->query($sql) as $row) {                        
                echo 'nome: '.$row['nome_representante'].'<br>'.'Telefone: '.$row['telefone'].'<br>'.'Cidades: '.$row['nome_cidade'].'<br><hr>';
                          
            } 
	
	echo(json_encode($sub_categorias_post));
    ?>