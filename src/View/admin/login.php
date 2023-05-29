<div class="container-fluid">
    <div class="card mt-1">
        <div class="card-header pb-0">
            <h2>Hotel Paraíso no Céu</h2>
            <p><i><strong>Acesso Administrativo</strong></i></p>
        </div>
        <div class="card-body">
            <form class="form-inline" method="post" action="<?php echo $rota('efetuarlogin', 'admin') ?>">
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
                echo '<div class="alert alert-warning">';
                echo '<h3>Aviso!</h3>';
                echo '<p>' . $mensagem . '</p>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="card-footer">
            <a href="<?php echo $rota('principal'); ?>" class="btn btn-secondary btn-sm">Voltar ao menu principal</a>
        </div>

    </div>
</div>