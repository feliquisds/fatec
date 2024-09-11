<?php require_once "../header.php";?>

<br><br>
<div class="container-sm" style="width:20em;">
    <form action="../mysql/create.php" method="post">

        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control">
        <br>

        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control">
        <br>

        <label for="phone" class="form-label">Telefone</label>
        <input type="text" name="phone" id="phone" class="form-control">
        <br><br>

        <div align="center">
            <input type="submit" value="Adicionar" class="btn btn-primary" style="width:7em;">
        </div>

    </form>

    <br><br>
    <p align="center"><?php
        if (@$_GET['msg'] == 1) {
            echo "Um erro ocorreu...";
        }
        if (@$_GET['msg'] == 2) {
            echo "O nome precisa ser preenchido!";
        }
    ?></p>
</div>

<?php require_once "../footer.php";?>
