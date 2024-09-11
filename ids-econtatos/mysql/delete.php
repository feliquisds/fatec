<?php
    require_once "database.php";

    // form vars
    $id = $_GET['id'];

    // command
    $sql = "DELETE FROM entries WHERE entries.id = '$id'";

    try
    {
        mysqli_query($conexao, $sql);
        $msg = 4;
        header("Location: ../list.php?msg=$msg");
    }
    catch (Exception)
    {
        $msg = 1;
        header("Location: ../list.php?msg=$msg");
    }
