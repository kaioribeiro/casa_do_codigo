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

    <body><div class="container">

            <!--Row uma linha principal que será dividida por duas colunas-->
            <div class="row" id="linha-conteudo">

                <!--Primeira Linha--> 
                <div class="col-md-3 col-md-pull-1" id="col-lateral-direita">
                    
                    <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu-sair" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="caret"></span>
                            </button>     
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Sair</a></li>
    
                            </ul>
                            </div>
                    <img src="_imagens/avatar-perfil-mas.jpg"  class="img-circle" id="foto-perfil"> 
                        
                        
                        <mark><h2>Nome do Usuário</h2></mark>
                    
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active"><a href="criarEvento.php">Criar Evento</a></li>
                        <li role="presentation"><a href="convites.php">Convites</a></li>
                        <li role="presentation"><a href="eventosCriados.php">Eventos criados</a></li>
                        <li role="presentation"><a href="partipacaoEventos.php">Participação em eventos</a></li>
                    </ul>
                    <iframe name="janela-calendario" id="calendario" src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza"></iframe>
                </div>

                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    <form class="form-horizontal">
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
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="modalidade">Modalidade:</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input id="modalidade" name="modalidade" class="form-control" placeholder="Dama, Fotebol..." type="text">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                Modalidades
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#">Atletismo</a></li>
                                                <li><a href="#">Badminton</a></li>
                                                <li><a href="#">Basquetebol</a></li>
                                                <li><a href="#">Boxe</a></li>
                                                <li><a href="#">Canoagem</a></li>
                                                <li><a href="#">Ciclismo</a></li>
                                                <li><a href="#">Esgrima</a></li>
                                                <li><a href="#">Futebol</a></li>
                                                <li><a href="#">Ginástica</a></li>
                                                <li><a href="#">Golfe</a></li>
                                                <li><a href="#">Halterofilismo</a></li>
                                                <li><a href="#">Handebol</a></li>
                                                <li><a href="#">Hipismo</a></li>
                                                <li><a href="#">Hóquei sobre grama</a></li>
                                                <li><a href="#">Judô</a></li>
                                                <li><a href="#">Lutas</a></li>
                                                <li><a href="#">Nado sincronizado</a></li>
                                                <li><a href="#">Natação</a></li>
                                                <li><a href="#">Pentatlo moderno</a></li>
                                                <li><a href="#">Polo aquático</a></li>
                                                <li><a href="#">Remo</a></li>
                                                <li><a href="#">Saltos ornamentais</a></li>
                                                <li><a href="#">Taekwondo</a></li>
                                                <li><a href="#">Tênis</a></li>
                                                <li><a href="#">Tênis de mesa</a></li>
                                                <li><a href="#">Tiro</a></li>
                                                <li><a href="#">Tiro com arco</a></li>
                                                <li><a href="#">Triatlo</a></li>
                                                <li><a href="#">Vela</a></li>
                                                <li><a href="#">Voleibol</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="logradouro">Logradouro:</label>  
                                <div class="col-md-4">
                                    <input id="logradouro" name="logradouro" type="text" placeholder="Rua, Av, Travessa..." class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="num">Número</label>  
                                <div class="col-md-2">
                                    <input id="num" name="num" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cidade">Cidade:</label>  
                                <div class="col-md-4">
                                    <input id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="estado">Estado:</label>
                                <div class="col-md-2">
                                    <select id="estado" name="estado" class="form-control">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="data">Data:</label>  
                                <div class="col-md-4">
                                    <input id="data" name="data" type="text" placeholder="Data do evento" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="hora">Hora:</label>  
                                <div class="col-md-4">
                                    <input id="hora" name="hora" type="text" placeholder="Hora do evento" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="numMinimo">Nº mínimo de participantes:</label>  
                                <div class="col-md-2">
                                    <input id="numMinimo" name="numMinimo" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="numMaximo">Nº máximo de participantes:</label>  
                                <div class="col-md-2">
                                    <input id="numMaximo" name="numMaximo" type="text" placeholder="" class="form-control input-md">

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