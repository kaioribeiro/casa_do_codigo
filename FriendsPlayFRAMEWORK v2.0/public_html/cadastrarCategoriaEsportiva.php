<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Friend's Play</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/criarEvento.css"/>
    </head>
    <body>
        

        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    
                    <!--<h1>Friend's Play</h1>-->
                    <!--Adicionando a foto do perfil-->
                     <figure class = "foto-legenda">
                        <img src="_imagens/avatar-perfil-mas.jpg"/>
                        <figcaption>
                            <p>
                                📷 Atualizar foto 
                            </p>
                        </figcaption>
                    </figure>
                          <h1 id="nome-do-usuario">Nome do usuário</h1>
                          <h2 id="cidade-atual">Cidade atual</h2>
                </hgroup>

                <nav id="menu">
                    <ul>
                        
                        <li><a href="criarEvento.php">Criar Evento</a></li>
                        <li><a href="convites.php">Convites</a></li>
                        <li><a href="eventosCriados.php">Eventos Criados</a></li>
                        <li><a href="partipacaoEventos.php">Participação em Eventos</a></li>
                    </ul>
                </nav>
                <iframe name="janela-calendario" id="calendario-evento" src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza"></iframe>
                <!--<a target="_blank" href="https://www.google.com/calendar/event?action=TEMPLATE&tmeid=a3RvYTJpcWR2bTIxdmRkdTluZGZmY2ozMmcga2Fpb3NiLjE0QG0&tmsrc=kaiosb.14%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_pt-BR.gif"></a>-->
                <!--<iframe src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
            </header>
            <section id="principal">
                <article id="noticia-pricipal">
                    <header id="cabecalho-artigo">
                        <hgroup>
                            <h1>Menu > Criar Evento</h1>
                        </hgroup>
                     </header>

                    <!---->
                    <form action="_inserts/InserirCategoria.php" method="post">
                    
                        <label for="nome">Nome:</label>
                        <br><input type="text" id="nome" name="nome"><br>
                      
                        <br><label for="n_maximo">Numero maximo de participantes:</label>
                        <br><input type="number" id="n_maximo" name="n_maximo"><br>

                        <br><label for="n_minimo">Numero minimo de participantes:</label>
                        <br><input type="number" id="n_minimo" name="n_minimo"><br>            
                        
                        
                        <br><button>Cadantrar</button>
                            
                    </form>
                    CRIAR EVENTO
                </article>
                <footer id="rodape">
                <p>
                    Copyright 2015 - by MangSoftware
                    <br>
                    <a href="https://www.facebook.com/kaio.ribeiro.984" target="_blank">Facebook</a>
                </p>
            </footer>
            </section>
        </div>
    </body>
</html>
