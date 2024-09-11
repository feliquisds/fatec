<?php
    require_once "database.php";
    session_start();

    // form vars
    $login = trim($_POST['login']);
    $pass = trim($_POST['pass']);

    if ($login == "" || $pass == "")
    {
        $msg = 2;
        header("Location: ../index.php?msg=$msg");
    }
    else
    {
        // command
        $sql = "SELECT * FROM logins WHERE login = '$login' AND password = '$pass'";

        // access database and turn into array
        $validate = mysqli_query($conexao, $sql);
        $info = mysqli_fetch_array($validate);

        // validate login
        if ($info['login'] == $login && $info['password'] == $pass)
        {
            // array with user info
            $user = array("login" => $info['login'],
            "password" => $info['password'],
            "username" => $info['username']);

            // add to session
            $_SESSION['user'] = $user;

            // redirect
            header("Location: ../list.php");
        }
        else
        {
            $msg = 1;
            header("Location: ../index.php?msg=$msg");
        }
    }
