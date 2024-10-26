<?php
//bianca nogueira
session_start();
$title = "Produto";
include "../include/database.php";
include "../include/header.php";
include "../include/nave-site.php";
$id = $_GET['produto'];
$inf = "SELECT * FROM info_roupa JOIN produto ON produto.id_produto=info_roupa.fk_id_produto JOIN galeria ON galeria.fk_id_produto=info_roupa.fk_id_produto WHERE info_roupa.fk_id_produto= {$id}";
//var_dump($inf);
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!-- SELECT * FROM `info_alimento`
join produto on produto.id_produto = info_alimento.fk_id_produto
join galeria on galeria.fk_id_produto = produto.id_produto -->

<body class="tabela">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-5">
                <div id="cafedama" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner sliderproduto">
                        <?php
                        foreach ($result as $produt) {
                            echo "
                        <div class='carousel-item active'>
                            <img src='../imagens/{$produt['endereco']}' class='d-block w-100' alt='...'>
                        </div>";
                        }
                        ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#cafedama" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cafedama" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 4mm;">
                <div class='card card-body' style='width: 30rem;'>
                    <?php
                    $produtos = $result[0];
                    $numero = $produtos['preco'];
                    $numero = str_replace('.', ',', $numero);
                    echo "
                    <h2>{$produtos['nome_produto']} <a type='button' <i class='bi bi-bookmark-plus' onclick=\"carrinho({$produtos["id_info_roupa"]})\"></a></h2>
                    <p>{$produtos['descricao']}</p>
                    
                    <div class='row'>
                        <div class='col-md-4'>
                            <h3 class='card-text' id='priceUpdate'>R$ {$numero}</h3>
                        </div>
                            <div class='col-md-5'>
                    <p>";
                    for ($i = 0; $i < 5; $i++) {
                        echo '<i class="bi bi-star-fill"></i>';
                    }
                    ?>
                    <script>
                        // AJAX do carrinho de compras
                        
                        function carrinho(id_info_produto, categoria) {
                        let id_produto = document.getElementById(id_info_produto)
                        let cat = document.getElementById(categoria)
                        
                        //id info produto, 
                        //categoria: alimento ou roupa
                        //console.log(id_info_prod)
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                let coiso = document.getElementById(categoria+id_info_produto)
                                coiso.innerHTML = this.responseText
                            }
                        }
                        xmlhttp.open("GET", "botanocarrinho.php?id=" + id_info_produto + "&cat=" + categoria +"&controle=1");
                        xmlhttp.send();
                    }
                    </script>
                </div>
            </div>
            <script>
                function alterar(idpreco) { //idepreco = contem o id
                    let idteste = document.getElementById(idpreco) //elemento
                    console.log(idteste.dataset.preco)
                    let printPrice = document.getElementById('priceUpdate')
                    let changePrice = "R$ " + idteste.dataset.preco
                    printPrice.innerHTML = changePrice.replace('.', ',')

                }
            </script>
            </p>

            <h5 class='card-title'>Guia de tamanhos</h5>
            <p>
                <?php
                $id1 = 1;
                foreach ($result as $informacoes) {
                    echo " 
                            <div class='col-md-12'>
						<button type='button' class='btn btn-outline-dark' data-preco='{$informacoes['preco']}' id='{$id1}'  onclick='alterar({$id1},)'>{$informacoes['tamanho']}</button>
                                <spam class='alert alert-secondary' style='margin-left: 2cm;'>- Em estoque: {$informacoes['estoque']}</spam>
                            </div>
                    </p>";
                    $id1++;
                }
                echo "
                    <div class= row>
                        <div class='col-md-6'>
                            <a type='button' class='btn btn-outline-success buttonprodutos' style='margin-top: 13mm;' onclick=\"carrinho({$informacoes["id_info_roupa"]},'roupa')\"  href='carrinho.php'>COMPRAR</a>
                        </div>
                        <div class='col-md-6'>
                            <a type='button' class='btn btn-outline-dark' style='margin-top: 13mm; height: 60px; padding-top: 4mm;' href='galeriap.php'>Retornar para a galeria</a>
                        </div>
                    </div>";
                ?>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <h3>Sugestão</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="../Imagens/camisa1.png" alt="">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            </div>
                            <small class="text-muted">
                                <h5>Camisa Sorridente</h5>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="../Imagens/caf2.png" alt="">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            </div>
                            <small class="text-muted">
                                <h5>Camisa do café</h5>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="../Imagens/camisavaca.jpg" alt="">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            </div>
                            <small class="text-muted">
                                <h5>Camisa do café</h5>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "../include/rodape.php";
    include "../include/footer.php";
    ?>