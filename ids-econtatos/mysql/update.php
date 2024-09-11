<?php
    require_once "database.php";

    // form vars
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    if ($name == "" || $email == "" || $phone == "")
    {
        $msg = 2;
        header("Location: ../forms/form_update.php?id=$id&msg=$msg");
    }
    else
    {
        // command
        $sql = "UPDATE entries SET name = '$name', email = '$email', phone = '$phone' WHERE entries.id = '$id'";

        try
        {
            mysqli_query($conexao, $sql);
            $msg = 3;
            header("Location: ../list.php?msg=$msg");
        }
        catch (Exception)
        {
            $msg = 1;
            header("Location: ../forms/form_update.php?id='$id'&msg=$msg");
        }
    }
