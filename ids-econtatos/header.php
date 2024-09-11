<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eContatos</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- link bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div style="min-height:100vh; display:flex; flex-direction:column;">
    
        <div align="center" style="width: 100%; display: flex; margin: 1em 0; justify-content:space-between;">

            <h1 style="width: 10em; margin: 0em 2.75em;"><a href="list.php" style="text-decoration: none; color: black;">eContatos</a></h1>

            <div>
                <p style="width: 20em; height: 0.7em; margin: 0.25em 0em 0.5em 0em;">Bem-vindo, <?php session_start(); echo $_SESSION['user']['username'] ?></p>
                <a href="index.php">Sair</a>
            </div>

            <a href="forms/form_create.php" class="btn btn-primary" style="width: 7em; height: 2.5em; margin: 0.4em 15.4em;">Adicionar</a>
            
        </div>

        <br><br><br>
