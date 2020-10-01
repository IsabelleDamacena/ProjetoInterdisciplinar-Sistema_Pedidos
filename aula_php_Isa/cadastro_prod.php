<!DOCTYPE html>
<html>
<head>
    <?php
    include 'cabecalho.php';

    ?>
    
    <title>Cadastro de Produtos</title>
</head>
<body>

    <section>
        <div>
            <div class="card">
                <div class="card-danger data">
                    <form action="insere_prod.php" method="POST">
                                        
                                        
                        <label for="text-input">Nome</label>         
                        <input type="text" class="form-control" name="nome">

                        <br><hr>
                                        
                        <label for="text-input">Valor Unit</label>
                        <input type="text" class="form-control" name="preco">

                        <br><hr>
                                           
                        <input type="submit" class="btn btn-light" value="CADASTRAR PRODUTO">
                        <br>
                        <p><a href="index.php" class="btn btn-light">VOLTAR AO INICIO</a></p>
                     </form>  
                </div>
            </div>
        </div>
    </section>   

</body>
</html>