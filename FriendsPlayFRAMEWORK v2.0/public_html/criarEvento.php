<!DOCTYPE html>
<?php
session_start();
//$_SESSION['id_local'] = $_REQUEST['id_local'];

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/criarEvento.css"/>

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

    <body><div class="container">

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
                    
                    
                    <mark id="nome-de-usuario"><h2><?php echo$_SESSION['FULLNAME'];?></h2></mark>
                    
                        <ul id="menu-principal" class="nav nav-pills nav-stacked"  style="position: fixed;">
                        <li><img id="img-perfil" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"  class="img-circle" id="foto-perfil" width="150" ></li>
                        <li role="presentation" class="active"><a href="criarEvento.php">Criar Evento</a></li>
                        <li role="presentation"><a href="convites.php">Convites</a></li>
                        <li role="presentation"><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>
          
                </div>

                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    <form action="_inserts/InserirEvento.php" method="post" class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Crie o seu Evento</legend>
                            <h5>Menu > Criar Evento</h5>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                                <div class="col-md-4">
                                    <input id="nome" name="nome" type="text" placeholder="Nome do Evento" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Button Drop Down -->

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="modalidade">Modalidade:</label>  
                                <div class="col-md-4">
                                    <input id="modalidade" name="modalidade" type="text" placeholder="Fotebol, Dama..." class="form-control input-md">

                                </div>
                            </div>
                            
                            
                            
                            


                           
                            

                            <!-- Button -->
                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label" for="cLocal"></label>
                                <div class="col-md-5">
                                    <a href="locais.php">Escolha local para o seu evento!</a>
                                </div>
                            </div> -->
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="data">Data:</label>  
                                <div class="col-md-4">
                                    <input id="data" name="data" type="date" placeholder="Data do evento" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="hora">Hora inicial:</label>  
                                
                                <div class="col-md-4">
                                    <input id="hora" name="hora" type="time" placeholder="Hora do evento" class="form-control input-md">

                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="hora">Hora final:</label>  
                                <div class="col-md-4">
                                    <input id="horaf" name="horaf" type="time" placeholder="Hora do evento" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="numMinimo">Nº mínimo de participantes:</label>  
                                <div class="col-md-2">
                                    <input id="numMinimo" name="nNumMin" type="number" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="numMaximo">Nº máximo de participantes:</label>  
                                <div class="col-md-2">
                                    <input id="numMaximo" name="nNumMax" type="number" placeholder="" class="form-control input-md">
                                    
                                </div>
                            </div>
                                           

                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="privacidade">Privacidade:</label>
                                <div class="col-md-4">
                                    <div class="radio">
                                        <label for="privacidade-0">
                                            <input type="radio" name="privacidade" id="privacidade-0" value="publico" checked="checked">
                                            Público
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="privacidade-1">
                                            <input type="radio" name="privacidade" id="privacidade-1" value="privado">
                                            Privado
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="descricao">Descrição:</label>
                                <div class="col-md-4">                     
                                    <textarea class="form-control" id="descricao" name="descricao">Descreva regras, características e/ou avisos para convidados...</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 650px; margin-top: 1%;">Cadastrar Evento</button>
                        </fieldset>
                    </form>




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
