<div class="container-fluid">
    <div class="card mt-1">
        <div class="card-header pb-0">
            <h2>Hotel Paraíso no Céu</h2>
        </div>
        <div class="card-body">
            <form class="form-inline" method="post" action="<?php echo $rota('efetuarlogin', 'login') ?>">
                <div class="form-group mr-4">
                    <label for="login"><strong>Login: &nbsp;</strong></label>
                    <input type="text" class="form-control" id="login" name="login" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Senha: &nbsp;</strong></label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <input type="submit" value="Entrar" class="btn btn-success ml-2">
            </form>
            <?php
            if ($mensagem != '') {
                echo '<div class="alert alert-warning p-1 alert-dismissible fade show">';
                echo '<h4 class="alert-heading m-0">Aviso!</h4>';
                echo '<p class="m-0">' . $mensagem . '</p>';
                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="card-footer">
            <a href="<?php echo $rota('principal'); ?>" class="btn btn-secondary btn-sm">Voltar ao menu principal</a>
        </div>

    </div>
</div>