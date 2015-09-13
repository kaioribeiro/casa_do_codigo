<?php session_start(); ?>

<?php 
include ("_Funcoes/FuncaoSelect.php");

// $id_usu = $_SESSION['FBID'];
// $id_goo = $_SESSION['id_google'];

$consulta= select("local_evento","*",null, null, null);

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

                    <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu-sair" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="caret"></span>
                            </button>     
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="logout.php">Sair</a></li>

                        </ul>
                    </div>
                    <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"  class="img-circle" id="foto-perfil" width="150">
                        


                    <mark><h2>Nome do Usuário</h2></mark>

                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="criarEvento.php">Criar Evento</a></li>
                        <li role="presentation"><a href="convites.php">Convites</a></li>
                        <li role="presentation" class="active" ><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>
                    <iframe name="janela-calendario" id="calendario" src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza"></iframe>
                </div>

                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    <h5>Menu > Eventos Criados</h5>
                    <form>
                    <div class="form-group">
                        <label class="col-md-0 control-label" for="buscaLabel"></label>  
                            
                        <div class="col-md-4">
                            
                            <input id="buscaLabel" name="buscaLabel" type="text" placeholder="🔍 Buscar" class="form-control input-md">
                            <label class="col-md-4 control-label" for="botaoBuscar"></label>
                            
                        </div> 
                        <button type="submit" id="botaoBuscar" name="botaoBuscar" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                    
                    <h3>Lista de eventos que criei:</h3>
                    <table class="table table-bordered">
                        <tbody><tr>
                        
                    <th>N°</th>
                    <th>Nome do local</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Numero</th>
                    <th>Escolher</th>
                </tr>

                 <?php 
                    if($consulta == true){
                        for ($i=0; $i < count($consulta); $i++) { 
                 ?>
                <tr>

                    <td><?php echo $i?></td>
                    <td><?php echo $consulta[$i]['nome'];?></td>
                    <td><?php echo $consulta[$i]['cidade']; ?></td>
                    <td><?php echo $consulta[$i]['estado']; ?></td> 
                    <td><?php echo $consulta[$i]['numero']; ?></td> 
                    <td><a href="editar_evento.php?id=<?php echo $consulta[$i]['id_evento']; ?>">Escolher</a></td>
                </tr>
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