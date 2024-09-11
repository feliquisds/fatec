<?php require_once "header_disconnected.php";?>

<br><br><br>
<div class="container-sm" style="width:20em;">
    <form action="mysql/validate_login.php" method="post">

        <label for="login" class="form-label">Login</label>
        <input type="text" name="login" id="login" class="form-control">
        <br>

        <div style="display: flex; justify-content: space-between;">
            <label for="pass" class="form-label">Senha</label>
            <a href="wip.php">Esqueci a senha</a>
        </div>
        <input type="password" name="pass" id="pass" class="form-control">
        <br><br>

        <div align="center">
            <input type="submit" value="Entrar" class="btn btn-primary" style="width:7em;">
        </div>

        <div align="center">
            <br><a href="wip.php">Não tem cadastro?</a>
        </div>

    </form>

    <br><br>
    <p align="center"><?php
        if (@$_GET['msg'] == 1) {
            echo "Login e/ou senha inválidos.";
        }
        if (@$_GET['msg'] == 2) {
            echo "Todos os campos precisam ser preenchidos!";
        }
    ?></p>
</div>

<?php require_once "footer.php";?>
