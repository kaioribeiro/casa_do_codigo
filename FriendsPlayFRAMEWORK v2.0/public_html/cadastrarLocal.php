<!DOCTYPE html>
<?php

session_start(); 
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/cadastrarLocal.css"/>

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
            

                <form action="_inserts/InserirLocal.php" method="post" class="form-horizontal">
                    <fieldset>
                
                <!--Segunda Linha--> 
                <div class="col-md-9 col-md-push-0">
                    

                    

                    <!-- Text input-->
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                                <div class="col-md-4">
                                    <input id="nome" name="nome" type="text" placeholder="Nome do espaço" class="form-control input-md">

                                </div>
                            </div>

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
                                    <input id="num" name="num" type="number" placeholder="" class="form-control input-md">

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

                            <script language="JavaScript">
                                function Fecha(url)
                                {
                                    
                                    window.close(url,'cadastrarLocal.php')
                                }
                                
                        </script>
                            <a href="javascript:Fecha('cadastrarLocal.php')">Cadastre um local</a>
                            
                            <button  type="submit" class="btn btn-primary" style="margin-left: 420px; margin-top: 3%;" >Cadastrar Local</button>
                    
                    
                </div></fieldset>

            </div>
            
    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>