<!DOCTYPE html>
<?php
session_start();


include ("_Funcoes/FuncaoSelect.php");

$id_convite = $_REQUEST['id_convite'];
$id = $_REQUEST['id'];
$consulta= select("evento","*", "WHERE id_evento = '$id'", null, null);

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/criarEvento.css"/>
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
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>
          
                </div>

                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                     <?php 
                            //Verificar se o objeto foi retornado
                        if($consulta == true){
                                for ($i=0; $i < count($consulta); $i++) { 
                                    
                    ?>
                   
                    <form action="_update/update_evento.php" method="post" class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Editar Evento</legend>
                            <h5>Menu > Editar Evento</h5>
                            
                            <div class="jumbotron">
                                <h1><?php echo $consulta[$i]['nome']; ?></h1>
                                <p>
                                <div class="form-group">
                                <p class="navbar-text" for="modalidade">Modalidade:</p>  
                                <div class="col-md-4">
                                    <p class="navbar-text"><?php echo $consulta[$i]['modalidade']; ?></p>
                                </div>
                            </div>

                            


                           
                            

                            <!-- Button -->
                           <!--  <div class="form-group">
                                <label class="col-md-4 control-label" for="cLocal"></label>
                                <div class="col-md-5">
                                    <a href="locais.php">Escolha um novo local para o evento!</a>
                                </div>
                            </div> -->
                            <!-- Text input-->
                            <div class="form-group">
                                <p class="navbar-text" for="modalidade">Data:</p>  
                                <div class="col-md-4">
                                     <p class="navbar-text"><?php echo $consulta[$i]['data']; ?></p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <p class="navbar-text" for="modalidade">Horario inicial:</p>   
                                
                                <div class="col-md-4">
                                     <p class="navbar-text"><?php echo $consulta[$i]['horario_inicial']; ?></p>
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <p class="navbar-text" for="modalidade">Horario final:</p>  
                                <div class="col-md-4">
                                     <p class="navbar-text"><?php echo $consulta[$i]['horario_final']; ?></p>
                                </div>
                            </div>

                        

                            <!-- Text input-->
                            <div class="form-group">
                                <p class="navbar-text" for="modalidade">Nº máximo de participantes:</p>  
                                <div class="col-md-2">
                                     <p class="navbar-text"><?php echo $consulta[$i]['n_max']; ?></p>
                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="form-group">
                              
                                <p class="navbar-text" for="modalidade">Privacidade:</p>  
                                <div class="col-md-4">
                                    <div class="radio">
                                        <p class="navbar-text"><?php echo $consulta[$i]['privacidade']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <p class="navbar-text" for="modalidade">Descrição:</p>  
                                <div class="col-md-4">                     
                                     <p class="navbar-text"><?php echo $consulta[$i]['descricao']; ?></p>
                                </div>
                            </div></p>
                                <p><a class="btn btn-primary btn-lg" href="_update/update_convite.php?id_convite= <?php echo $id_convite?>&id_evento=<?php echo $id?> " role="button">Confirmar</a></p>
                            </div>
                           
                            <!-- Button Drop Down -->

                            <!-- Text input-->
                            
                        </fieldset>
                    </form>
                    <?php 
                                }
                            }else{
                                echo "Nunhum dado encontrado!";
                            }
                     ?>



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
