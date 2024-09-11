<?php
    require_once "database.php";

    // form vars
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    
    if ($name == "" || $email == "" || $phone == "")
    {
        $msg = 2;
        header("Location: ../forms/form_create.php?msg=$msg");
    }
    else
    {
        // command
        $sql = "INSERT INTO entries (name, email, phone) VALUES ('$name', '$email', '$phone')";

        try
        {
            mysqli_query($conexao, $sql);
            $msg = 2;
            header("Location: ../list.php?msg=$msg");
        }
        catch (Exception)
        {
            $msg = 1;
            header("Location: ../forms/form_create.php?msg=$msg");
        }
    }
