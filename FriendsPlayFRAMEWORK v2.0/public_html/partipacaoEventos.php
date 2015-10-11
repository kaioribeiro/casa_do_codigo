
<!DOCTYPE html>
<?php
session_start();

require_once("_Funcoes/FuncaoSelect.php");
//require_once ("fbconfig.php");
$id_ev = $_REQUEST['id'];
$consulta = select("usuario","*", null, null, null);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 

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
        <nav class="navbar bg-primary">
            <div id="barra-superior" class="container-fluid">

                <!-- Titulo -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <h4 id="titulo-pagina" class="bg-primary">Friend's Play</h4>
                        </li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown" id="botao-sair">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li role="separator" class="divider"></li>
                                <li><a href="logout.php">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">

            <!--Row uma linha principal que será dividida por duas colunas-->
            <div class="row" id="linha-conteudo">

                <!--Primeira Linha--> 
                <div class="col-md-3 col-md-pull-1" id="col-lateral-direita">

                    
                    <ul id="menu-principal" class="nav nav-pills nav-stacked"  style="position: fixed;">
                        <li><img id="img-perfil" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"  class="img-circle" id="foto-perfil" width="150" ></li>
                        <li><mark id="nome-de-usuario" ><h2><?php echo$_SESSION['FULLNAME']; ?></h2></mark></li>
                        <li role="presentation"><a href="criarEvento.php">Criar Evento</a></li>
                        <li role="presentation"><a href="convites.php">Convites</a></li>
                        <li role="presentation"><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation" class="active"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>

                </div>

                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    <h5>Menu > Participação em Eventos</h5>
                    <h3>Eventos em que participo:</h3>

                     <?php 
                    if($consulta == true){
                         for ($i=0; $i < count($consulta); $i++) {
                        //     $aux =  getAmigo($consulta[$i]['id_usuario']);
                        //     if($consulta[$i]['id_usuario'] == $aux){
                    ?>
                    <!-- Multiple Checkboxes -->
                    <div class="list-group">
                        <a href="_inserts/InserirConvite.php?id= <?php echo $consulta[$i]['id_usuario']?>&id_evento=<?php echo $id_ev?>" class="list-group-item">
                             <?php echo $consulta[$i]['nome']; ?>
                        </a>
                       
                    </div>
                  
                    <?php               
                          
                            // }else{ echo "nenhum usuario encontrado"; }
                                    }
                        }else{
                            echo "Nunhum dado encontrado!";
                    }
                 ?>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selecionarAmigos"></label>
                        <div class="col-md-4">
                            <button id="selecionarAmigos" name="selecionarAmigos" class="btn btn-primary">Selecionar amigos</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" id="rodape">
                Copyright 2015 - by MangSoftware
                <br>
                <a href="https://www.facebook.com/kaio.ribeiro.984" target="_blank">Facebook</a>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>