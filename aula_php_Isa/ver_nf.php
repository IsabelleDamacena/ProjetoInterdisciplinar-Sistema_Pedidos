
<!DOCTYPE html>
<html>
<head>
    <?php
    include 'cabecalho.php';
    ?>
    <title></title>
</head>
<body>

    <div>
        <div class="card">
            <div class="card-danger data">
                <h1>Notas Fiscais emitidas</h1>
                <br>
                <?php
                    
                    include 'conecta.php';

                    $consulta = "SELECT * FROM nota_fiscal";
                    
                    foreach ($conexao -> query($consulta) as $linha){
                            echo "<br>NF: ".$linha['nf'] ."<br>";
                            echo "Data: ".$linha['data'] ."<br>";
                            echo "Valor total R$".$linha['valor_total'] ."<br>";

                            $nota = $linha['nf'];
                            $consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
                            foreach ($conexao -> query($consulta2) as $linha2) {
                                echo "ID: ".$linha2['id'] ." - ";
                                echo "Cod. Produto: ".$linha2['cod_produto'] ." - ";
                                $codigo = $linha2['cod_produto'];
                                $consulta3 = "SELECT * FROM  produtos WHERE id = '$codigo'";
                                foreach ($conexao -> query($consulta3) as $linha3) {
                                    echo "Nome: ".$linha3['nome'] ." - ";
                                    echo "Valor Unit R$: ".$linha3['preco'] ." - ";

                                }
                                

                                echo "Qtde: ".$linha2['qtde'] ." - ";
                                echo "Subtotal R$: ".$linha2['valor_total'] ."<br>";

                                }  
                                echo "<hr>";        
                    }
                    echo "<br>";
                ?>
     <p><a href="index.php" class="btn btn-light">VOLTAR AO INÍCIO</a></p>
            </div>
        </div>
    </div>
    
</body>
</html>

