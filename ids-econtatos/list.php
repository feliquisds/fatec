<?php require_once "header.php";?>

<div>
    <p align="center">
        <?php
            if (@$_GET['msg'] == 1) {
                echo "Um erro ocorreu...<br>";
            }
            elseif (@$_GET['msg'] == 2) {
                echo "Contato adicionado.<br>";
            }
            elseif (@$_GET['msg'] == 3) {
                echo "Contato atualizado.<br>";
            }
            elseif (@$_GET['msg'] == 4) {
                echo "Contato apagado.<br>";
            }
            else {
                echo "<br>";
            }
        ?>
    </p>
</div>

<?php
    require_once "mysql/database.php";

    $sql_list = "SELECT * FROM entries";
    $query_sql = mysqli_query($conexao, $sql_list);

    if ($query_sql->num_rows > 0)
    {
        echo "
        <table class='table table-borderless table-hover' align='center' style=\"width: 50em;\">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>";

        while ($row = $query_sql->fetch_assoc())
        {
            echo "
            <tbody>
                <tr>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>
                        <a href=\"forms/form_update.php?id=".$row["id"]."\">
                            <img src='images\\edit.png' alt='Atualizar' width='22em'>
                        </a>
                    </td>
                    <td>
                        <a href=\"mysql/delete.php?id=".$row["id"]."\">
                            <img src='images\delete.png' alt='Apagar' width='22em'>
                        </a>
                    </td>
                </tr>
            </tbody>";
        }
        echo "</table>";

    } else {
        echo '<div class="container-sm" align="center" style="width: 50em;"><p>Sua lista de contatos está vazia.<p></div>';
    }
?>

<?php require_once "footer.php";?>
