<?php
    require_once "../header.php";
    require_once "../mysql/database.php";

    // get id
    $id = $_GET ['id'];

    // get info
    $sql = "SELECT * FROM entries WHERE entries.id = '$id'";
    $info_sql = mysqli_query($conexao, $sql);

    // to array
    $info = mysqli_fetch_array($info_sql);
?>

<br><br>
<div class="container-sm" style="width:20em;">
    <form action="../mysql/update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">

        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $info['name']; ?>">
        <br>

        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="<?php echo $info['email']; ?>">
        <br>

        <label for="phone" class="form-label">Telefone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $info['phone']; ?>">
        <br><br>

        <div align="center">
            <input type="submit" value="Atualizar" class="btn btn-primary" style="width:7em;">
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
