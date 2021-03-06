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
        <link rel="stylesheet" type="text/css" href="_css/convites.css"/>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

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
                            
                        <a class="btn btn-primary btn-lg" href="eventoConvite.php" role="button">Criar convite</a>
                    </div>
                    
                    <h3>Lista de convites aceitos:</h3>
                    <table class="table table-bordered">
                        <tbody><tr>
                        
                    <th>Nº</th>
                    <th>Nome do Evento</th>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Nº de participantes</th>
                    <th>Pendêcia</th>
                </tr>

                 <?php 
                    if($consulta == true){
                        //Verificar se a data do evento já passou

                           
                        for ($i=0; $i < count($consulta); $i++) { 
                            $convite = $consulta[$i]['id_evento'];
                            
                            $consulta_evento =  select("evento","*","WHERE id_evento = '$convite'", null, null);

                            //Verificar a data do evento
                            $data_atual = date('Y/m/d');
                            if($data_atual < $consulta_evento[0]['data']){

                            //Fazer uma subconsulta para retornar o nome do local que o evento participa
                            
                            
                            
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
                    <td><?php echo $consulta_evento[0]['data']; ?></td>
                    <td><?php echo $local[$i]; ?></td> 
                    <td><?php echo $consulta_evento[0]['num_atual']; ?></td> 
                    <td><a class="btn btn-danger" href="_excluir/excluir_convite.php?id_convite=<?php echo $consulta[$i]['id_convite']; ?>">Cancelar</a></td>
                </tr>
                 <?php 
                            $consulta_local = null;
                                        }else{
                                            $contar_data[$i] = $consulta[$i]['id_convite'];
                                        }
                                    }
                                
                        }else{
                            echo "<h4 >Você ainda não tem nenhum convite.</h4>";
                    }
                 ?>
            
                 <!--Tabela para os convites pendentes-->
            </tbody>
                    </table>
                
                
                    
                    
                    <h3>Lista de convites pentendes:</h3>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>

                                <th>Nº</th>
                                <th>Nome do Evento</th>
                                <th>Data</th>
                                <th>Local</th>
                                <th>Nº de participantes</th>
                                <th>Aceitar</th>
                                <th>Recusar</th>
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
                    <td><?php echo $consulta_evento[0]['data']; ?></td>
                    <td><?php echo $local[$i]; ?></td> 
                    <td><?php echo $consulta_evento[0]['num_atual']; ?></td> 
                    <td><a class="btn btn-success" style="font-weight: bold;" href="verificar_antes.php?id=<?php echo $consulta_evento[0]['id_evento']; ?>&id_convite=<?php echo $consulta_pendente[0]['id_convite']; ?>">V</a></td>
                    <td><a class="btn btn-danger" style="font-weight: bold;" href="_excluir/excluir_convite.php?id_convite=<?php echo $consulta_pendente[$i]['id_convite']; ?>">X</a></td>
                </tr>
                 <?php 
                            $consulta_local = null;
                                    }
                        }else{
                            echo "<h4>Você ainda não tem nenhum convite.</h4>";
                    }
                 ?>
            </tbody>
                    </table>
                </div>

            </div>
        </div>
            <div class="row" id="rodape">
                Copyright 2015 - by MangSoftware
                <br>
                <a href="https://www.facebook.com/kaio.ribeiro.984" target="_blank">Facebook</a>
            </div>
        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
