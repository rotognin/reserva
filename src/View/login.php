<html>
    <head>
        <title>Reserva de hotel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="html/css/w3.css">
    </head>
    <body>
        <div class="w3-container w3-margin-top">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Hotel Paraíso no Céu</h1>
                </header>
                <div class="w3-container">
                    <form class="w3-container" method="POST" action="<?php echo $rota('efetuarlogin', 'login') ?>">
                        <div class="input-group input-group-sm mb-3" style="margin: 0 auto;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Login:&nbsp</span>
                            </div>
                            <input type="text" class="form-control" id="login" name="login" size="30px" required autofocus>
                        </div>
                        <div class="input-group input-group-sm mb-3" style="margin: 0 auto;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Senha:</span>
                            </div>
                            <input type="password" class="form-control" id="senha" name="senha" size="30px" required>
                        </div>
                        <br>
                        <input type="submit" value="Entrar" class="btn botao">
                    </form>
                </div>
                <footer class="w3-container w3-blue w3-center w3-padding">
                    <a href="<?php echo $rota('principal'); ?>">Voltar ao menu principal</a>
                </footer>
                    
            </div>
        </div>
    </body>
</html>