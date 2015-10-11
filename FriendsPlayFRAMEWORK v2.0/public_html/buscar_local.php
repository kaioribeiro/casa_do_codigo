<?php session_start(); ?>

<?php 
include ("_Funcoes/FuncaoSelect.php");

// $id_usu = $_SESSION['FBID'];
// $id_goo = $_SESSION['id_google'];
$buscar = $_REQUEST['buscaLabel'];
$consulta= select("local_evento","*","WHERE nome LIKE '%$buscar%'", null, null);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
            
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Friend's Play</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">

            <!--Row uma linha principal que será dividida por duas colunas-->
            <div class="row" id="linha-conteudo">

                <!--Primeira Linha--> 
                <div class="col-md-3 col-md-pull-1" id="col-lateral-direita">

                    <div class="dropdown" id="botao-sair">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu-sair" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="caret"></span>
                            </button>     
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="logout.php">Sair</a></li>

                        </ul>
                    </div>
                    <img id="img-perfil" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"  class="img-circle" id="foto-perfil" width="150">
                        


                    <mark id="nome-de-usuario"><h2><?php echo$_SESSION['FULLNAME'];?></h2></mark>

                    <ul id="menu-principal" class="nav nav-pills nav-stacked"  style="position: fixed;">
                        <li role="presentation"><a href="criarEvento.php">Criar Evento</a></li>
                        <li role="presentation"><a href="convites.php">Convites</a></li>
                        <li role="presentation" class="active" ><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>
        
                </div>


                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    <h5>Menu > Eventos Criados</h5>

                    
                    <h3>Lista de eventos que criei:</h3>

                    <form action="buscar_local.php" method="post" >
                    <div class="form-group">
                        <label class="col-md-0 control-label" for="buscaLabel"></label>  
                            
                        <div class="col-md-4">
                            
                            <input id="buscaLabel" name="buscaLabel" type="text" placeholder="🔍 Buscar" class="form-control input-md">
                            <label class="col-md-4 control-label" for="botaoBuscar"></label>
                            
                        </div> 
                        <button type="submit" id="botaoBuscar" name="botaoBuscar" class="btn btn-primary">Buscar</button>
                        
                    </div>
                    </form>
                    <table class="table table-bordered">
                        <tbody><tr>
                    <th>Selecionar</th>   
                    <th>Logradouro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Numero</th>
                </tr>

                 <?php 
                    if($consulta == true){
                        for ($i=0; $i < count($consulta); $i++) { 
                 ?>
                <tr>

                    <td><a href="criarEvento.php?id_local=<?php echo $consulta[$i]['id_local']; ?>"><?php echo $consulta[$i]['nome']; ?></a></td>                   
                    <td><?php echo $consulta[$i]['local'];?></td>
                    <td><?php echo $consulta[$i]['cidade']; ?></td>
                    <td><?php echo $consulta[$i]['estado']; ?></td> 
                    <td><?php echo $consulta[$i]['numero']; ?></td> 

                 <?php 
                                    }
                        }else{
                            echo "Nunhum dado encontrado!";
                    }
                 ?>
            </tbody>
                    </table>
                </div>

            </div>
            <div class="row" id="rodape">
                Copyright 2015 - by MangSoftware
                <br>
                <a href="https://www.facebook.com/kaio.ribeiro.984" target="_blank">Facebook</a>
            </div>
        </div>


        <h1></h1>
        <div class="con">

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>