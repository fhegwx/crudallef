<?php

include 'conexao.php';




?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Jarles</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">


</head>



<body>

    <div class="container" id="tamanhoContainer" style="margin-top:40px">
        <h4 style="text-align: center;">Atualização do Formulário de Cadastro</h4>
        <form action="_atualizar_produto.php" method="post">
            <?php
$id_estoque = $_GET['id'];

            $sql = "SELECT * FROM estoque WHERE  id_estoque = $id_estoque";
            $result = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id_estoque = $row['id_estoque'];
                    $numeroproduto = $row['numeroproduto'];
                    $nomeproduto = $row['nomeproduto'];
                    $categoria = $row['categoria'];
                    $quantidade = $row['quantidade'];
                    $fornecedor = $row['fornecedor'];
                }
            ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Número do produto</label>
                 <input type="number" class="form-control" name="numeroproduto" id="exampleInputEmail1" value="<?php echo $numeroproduto ?>">                         
                    
                    
                
                
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do produto</label>
                    <input type="text" class="form-control" name="nomeproduto" id="exampleInputEmail1" value="<?php echo $nomeproduto ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" name="categoria" id="exampleFormControlSelect1" value="<?php echo $categoria ?>">
                        <option>perifericos</option>
                        <option>hardware</option>
                        <option>software</option>
                        <option>celulares</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="exampleInputEmail1" value="<?php echo $quantidade ?>">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Fornecedores</label>
                    <select class="form-control" name="fornecedor" id="exampleFormControlSelect1" value="<?php echo $fornecedor ?>">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>

                    </select>
                    <br>



                </div>

                <div style="text-align:right">

                    <button type="submit" class="btn btn-success">Atualizar</button>

                </div>


            <?php   }       ?>
        </form>




    </div>



    <script type="text/javascript" src="bootstrap.js/"> </script>








</body>



</html>