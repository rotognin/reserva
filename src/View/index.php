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
                    <p>
                        Nesse portal você consegue reservar seu quarto de hotel, 
                        marcar quartos usados para avisar quanto estiver livre, 
                        fazer orçamentos, tirar dúvidas, etc...
                    </p>
                </div>
                <footer class="w3-container w3-blue w3-center w3-padding">
                    <a href="<?php echo $rota('login', 'login'); ?>">Clique aqui para entrar no sistema!</a>
                </footer>                    
            </div>
        </div>
        <br>
        <div class="w3-container w3-card w3-margin w3-center w3-padding w3-blue">
            <a href="<?php echo $rota('login', 'admin'); ?>">Acesso administrativo</a>
        </div>
    </body>
</html>