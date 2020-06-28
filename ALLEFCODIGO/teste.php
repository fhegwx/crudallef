<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="container" style="margin-top: 40px;">

        <h3 style="text-align: center;">Lista de Produtos</h3>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">produto</th>
                    <th scope="col">categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">valor_unitario</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>


            <?php



            include 'conexao.php';


            $sql = "SELECT * FROM loja";
            $result = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $produto = $row['produto'];
                    $categoria = $row['categoria'];
                    $quantidade = $row['quantidade'];
                    $valor = $row['valor_unitario'];
            ?>
                    <tr>
                        <td><?php echo $id  ?></td>
                        <td><?php echo $produto  ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $quantidade  ?></td>
                        <td><?php echo $valor ?></td>
                        <td><a class="btn btn-primary btn-sm" href="atualizarProduto.php?id=<?php echo $id= $row['id'] ?>" role="button">Editar</a></td>
                        <td><a class="btn btn-danger btn-sm" href="deletarProduto.php?id=<?php echo $id = $row['id'] ?>" role="button">Excluir</a></td>




                    <?php   }
                mysqli_close($conexao);   ?>

                    </tr>

                <?php } ?>
        </table>


    </div>


    <script type="text/javascript" src="bootstrap.js/"> </script>

</body>

</html>