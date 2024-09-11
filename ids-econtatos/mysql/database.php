<?php
    // connection vars
    $server_host = "127.0.0.1";
    $server_user = "root";
    $server_password = "";
    $database_name = "econtatos";

    // connection constants
    define("SERVER_HOST", "127.0.0.1");
    define("SERVER_USER", "root");
    define("SERVER_PASSWORD", "");
    define("DATABASE_NAME", "econtatos");

    // db connection (no error treatment)

        // vars
        //$conexao = mysqli_connect($server_host, $server_user, $server_password, $database_name);

        // consts
        $conexao = mysqli_connect(SERVER_HOST, SERVER_USER, SERVER_PASSWORD, DATABASE_NAME);

        // raw
        //$conexao = mysqli_connect("localhost", "root", "", "econtatos");
