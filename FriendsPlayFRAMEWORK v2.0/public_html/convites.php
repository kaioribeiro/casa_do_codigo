<!DOCTYPE html>
<?php

session_start(); 

include ("_Funcoes/FuncaoSelect.php");
$estatus_true = true;
$estatus_false = false;
$consulta = select("convite","*","WHERE id_usuario = $_SESSION[FBID] and estatus = '$estatus_true'",null,null);
$consulta_pendente = select("convite","*","WHERE id_usuario = $_SESSION[FBID] and estatus = '$estatus_false'",null,null);
?>
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
                    <img id="img-perfil" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"  class="img-circle" id="foto-perfil" width="150">


                    <mark id="nome-de-usuario"><h2><?php echo$_SESSION['FULLNAME'];?></h2></mark>
                    <ul id="menu-principal" class="nav nav-pills nav-stacked"  style="position: fixed;">
                        <li role="presentation"><a href="criarEvento.php">Criar Evento</a></li>
                        <li role="presentation" class="active"><a href="convites.php">Convites</a></li>
                        <li role="presentation"><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>
              
                </div>

                <!--Segunda Linha--> 
               <div class="col-md-9 col-md-push-0">
                    <h5>Menu > Meus convites</h5>
                    
                    <div class="form-group">
                        <label class="col-md-0 control-label" for="buscaLabel"></label>  
                            
                        <button id="botaoBuscar" name="botaoBuscar" class="btn btn-primary">Criar convite</button>
                    </div>
                    
                    <h3>Lista de convites:</h3>
                    <table class="table table-bordered">
                        <tbody><tr>
                        
                    <th>Nº</th>
                    <th>Nome do Evento</th>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Nº de participantes</th>
                    <th>Aceitar</th>
                </tr>

                 <?php 
                    if($consulta == true){
                           
                        for ($i=0; $i < count($consulta); $i++) { 
                            $convite = $consulta[$i]['id_evento'];
                            //Fazer uma subconsulta para retornar o nome do local que o evento participa
                            
                            $consulta_evento =  select("evento","*","WHERE id_evento = '$convite'", null, null);
                            
                            $id_l = $consulta_evento[0]['id_relacao'];
                            $consulta_local = select("local_evento","*","WHERE id_local = '$id_l'", null, null);

                            //A cada nova consulta no banco de dados eh retornado um Array novo. Por isso
                            //a coluna 1 deve ter o valor sempre 0, para que ele não pegue valores que não existem
                            
                            $local[$i] = (string) $consulta_local[0]['nome'];
                            $nomeEvento[$i] = (string) $consulta_evento[0]['nome'];
                 ?>
                <tr>

                    <td><?php echo $i?></td>
                    <td><?php echo $nomeEvento[$i];?></td>
                    <td><?php echo $consulta_evento[$i]['data']; ?></td>
                    <td><?php echo $local[$i]; ?></td> 
                    <td><?php echo "" ?></td> 
                    <td><a href="verificar_antes.php?id=<?php echo $consulta_evento[0]['id_evento']; ?>&id_convite=<?php echo $consulta[$i]['id_convite']; ?>">Aceitar</a></td>
                </tr>
                 <?php 
                            $consulta_local = null;
                                    }
                        }else{
                            echo "Nunhum dado encontrado!";
                    }
                 ?>
            
                 <!--Tabela para os convites pendentes-->
            </tbody>
                    </table>
                </div>
                <div class="col-md-9 col-md-push-0">
                    
                    
                    <h3>Lista de convites pentendes:</h3>
                    <table class="table table-bordered">
                        <tbody><tr>
                        
                    <th>Nº</th>
                    <th>Nome do Evento</th>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Nº de participantes</th>
                    <th>Aceitar</th>
                </tr>

                 <?php 
                    if($consulta_pendente  == true){
                           
                        for ($i=0; $i < count($consulta_pendente ); $i++) { 
                            $convite = $consulta_pendente [$i]['id_evento'];
                            //Fazer uma subconsulta para retornar o nome do local que o evento participa
                            
                            $consulta_evento =  select("evento","*","WHERE id_evento = '$convite'", null, null);
                            
                            $id_l = $consulta_evento[0]['id_relacao'];
                            $consulta_local = select("local_evento","*","WHERE id_local = '$id_l'", null, null);

                            //A cada nova consulta no banco de dados eh retornado um Array novo. Por isso
                            //a coluna 1 deve ter o valor sempre 0, para que ele não pegue valores que não existem
                            
                            $local[$i] = (string) $consulta_local[0]['nome'];
                            $nomeEvento[$i] = (string) $consulta_evento[0]['nome'];
                 ?>
                <tr>

                    <td><?php echo $i?></td>
                    <td><?php echo $nomeEvento[$i];?></td>
                    <td><?php echo $consulta_evento[$i]['data']; ?></td>
                    <td><?php echo $local[$i]; ?></td> 
                    <td><?php echo "" ?></td> 
                    <td><a href="verificar_antes.php?id=<?php echo $consulta_evento[0]['id_evento']; ?>&id_convite=<?php echo $$consulta_pendente[$i]['id_convite']; ?>">Aceitar</a></td>
                </tr>
                 <?php 
                            $consulta_local = null;
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

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>