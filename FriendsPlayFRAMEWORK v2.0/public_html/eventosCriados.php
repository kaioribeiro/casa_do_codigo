<?php session_start(); ?>

<?php
include ("_Funcoes/FuncaoSelect.php");

$id_usu = $_SESSION['FBID'];
$id_goo = $_SESSION['id_google'];
//$consulta= select("evento","*", "WHERE id_usuario = '$id_usu' AND id_usuario_google = '$id_goo'", null, null);
$consulta = select("evento", "*", "WHERE id_usuario = '$id_usu' AND id_usuario_google = '$id_goo'", null, null);
?>

<!DOCTYPE html>
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
                        <li role="presentation" class="active"><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>

                </div>

                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    <h5>Menu > Eventos Criados</h5>

                    <div class="form-group">
                        <label class="col-md-0 control-label" for="buscaLabel"></label>  

                        <div class="col-md-4">

                            <input id="buscaLabel" name="buscaLabel" type="text" placeholder="🔍 Buscar" class="form-control input-md">
                            <label class="col-md-4 control-label" for="botaoBuscar"></label>

                        </div> 
                        <button id="botaoBuscar" name="botaoBuscar" class="btn btn-primary">Buscar</button>
                    </div>

                    <h3>Lista de eventos que criei:</h3>
                    <table class="table table-bordered">
                        <tbody><tr>

                                <th>Nº</th>
                                <th>Nome do Evento</th>
                                <th>Data</th>
                                <th>Local</th>
                                <th>Nº de participantes</th>
                                <th>Editar</th>
                            </tr>

                            <?php
                            if ($consulta == true) {

                                for ($i = 0; $i < count($consulta); $i++) {
                                    //bryalmeidaecomp@yahoo.com.br
                                    //Fazer uma subconsulta para retornar o nome do local que o evento participa
                                    $id_l = $consulta[$i]['id_relacao'];
                                    $consulta_local = select("local_evento", "*", "WHERE id_local = '$id_l'", null, null);
                                    //A cada nova consulta no banco de dados eh retornado um Array novo. Por isso
                                    //a coluna 1 deve ter o valor sempre 0, para que ele não pegue valores que não existem

                                    $convercao[$i] = (string) $consulta_local[0]['nome'];
                                    ?>

                                    <tr>
                                        <!--Converter o horario para o padrão brasileiro-->
                                        <?php $data_mysql = $consulta[$i]['data'];
                                        $formatar = strtotime($data_mysql)
                                        ?>

                                        <td><?php echo $i ?></td>
                                        <td><?php echo $consulta[$i]['nome']; ?></td>
                                        <td><?php echo date('d/m/Y', $formatar); ?></td>
                                        <td><?php echo $convercao[$i]; ?></td> 
                                        <td><?php echo $consulta[$i]['num_atual']; ?></td> 
                                        <td><a class="btn btn-success" href="edt_locais.php?id=<?php echo $consulta[$i]['id_evento']; ?>">Alterar</a></td>

                                    </tr>

                                    </div>
                                    <?php
                                    $consulta_local = null;
                                }
                            } else {
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
