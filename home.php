<?php
session_start();
$title = 'The COFFEE\'N\'JOIN';
include './include/database.php';
include './include/header.php';
include './include/nave.php';
$pesquisa = '';
if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
	$pesquisa = $_GET['buscar'];
}
//-------------------roupas------------------------------------
$inf = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` 
JOIN info_roupa ON info_roupa.fk_id_produto = produto.id_produto
JOIN galeria ON galeria.fk_id_produto = produto.id_produto 
WHERE produto.nome_produto LIKE '%%' OR produto.categoria = 'roupa' group by id_produto LIMIT 4";
#echo $inf;
$query = mysqli_query($con, $inf);
$roupa = mysqli_fetch_all($query, MYSQLI_ASSOC);
//-------------------alimentos------------------------------------
$inf2 = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` 
JOIN info_alimento ON info_alimento.fk_id_produto = produto.id_produto
JOIN galeria ON galeria.fk_id_produto = produto.id_produto 
WHERE produto.nome_produto LIKE '%%' OR produto.categoria='alimento' group by id_produto LIMIT 4";
#var_dump($inf);
$query = mysqli_query($con, $inf2);
$alimento = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="responsive">
	<!-- JavaScript da Home -->
	<script>
		// AJAX do carrinho de compras
		function carrinho(id_info_produto, categoria) {
			let id_produto = document.getElementById(id_info_produto)
			let cat = document.getElementById(categoria)

			if (categoria == 'roupa') {
				//console.log(categoria)
			}
			if (categoria == 'alimento') {
				//console.log(categoria)
			}
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
			xmlhttp.open("GET", "pages/botanocarrinho.php?id=" + id_info_produto + "&cat=" + categoria+"&controle=1");
			xmlhttp.send();
		}
	</script>

	<!-- Slider da Home do site -->
	<div class="col-12 col-xl-12 slider">
		<div id="cafeb" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="0" class="active slide-button" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="1" class="slide-button" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="2" class="slide-button" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="3" class="slide-button" aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner center-block">
				<div class="carousel-item active">
					<img src="Imagens/cafe1.png" class="d-block w-100" alt="..." height="480px;">
				</div>
				<div class="carousel-item">
					<img src="Imagens/cafe2.png" class="d-block w-100" alt="..." height="480px;">
				</div>
				<div class="carousel-item">
					<img src="Imagens/cafe3.png" class="d-block w-100" alt="..." height="480px;">
				</div>
				<div class="carousel-item">
					<img src="Imagens/cafe4.png" class="d-block w-100" alt="..." height="480px;">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#cafeb" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#cafeb" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<!-- Cards da Home do site -->
	<div class="container">
		<div class="row justify-content-evenly mt-5">
			<?php
			foreach ($roupa as $roupas) {
				echo "
		<div class='col-md-3'>
			<div class='card shadow-sm'>
				<div class='card-body'>
					<a href='pages/produto.php?produto={$roupas['id_produto']}'><center><img src='imagens/{$roupas['endereco']}' class='card-img-top' style='max-width:220px; max-height:200px;'></center></a>
					<div class='card-text feed-item-body post-body'>
						<div style='vertical-align: inherit;'>
							<h2 class='text-center'>{$roupas['nome_produto']}</h2>
						</div>
						<div style='vertical-align: inherit;'>
							<p class='bia'>{$roupas['descricao']}...</p>
						</div>
						<div class='d-flex justify-content-between align-items-center'>
							<div class='btn-group' id='roupa{$roupas["id_info_roupa"]}'>
								<button type='button' onclick=\"carrinho({$roupas["id_info_roupa"]},'roupa')\" class='btn btn-sm btn-outline-secondary' href='carrinho.php'>Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>";
			}
			?>
		</div>
	</div>
	<!-- Parallax -->
	<div class="mt-2 mb-2 parallax-home"></div>
	<!-- Cards Home do site -->
	<div class="container">
		<div class="row justify-content-evenly">
			<?php

			foreach ($alimento as $alimentos) {
				echo "
				<div class='col-md-3'>
					<div class='card shadow-sm'>
						<div class='card-body'>
							<a href='pages/alimento.php?produto={$alimentos['id_produto']}'><center><img src='imagens/{$alimentos['endereco']}' class='card-img-top' style='max-width:230px; max-height:230px;'></center></a>
							<div class='card-text feed-item-body post-body'>
								<div style='vertical-align: inherit;'>
									<h2 class='text-center'>{$alimentos['nome_produto']}</h2>
								</div>
								<div style='vertical-align: inherit;'>
									<p class='bia'>{$alimentos['descricao']}...</p>
								</div>
								<div class='d-flex justify-content-between align-items-center'>
									<div class='btn-group' id='alimento{$alimentos["id_info_alimento"]}'>
										<button type='button' onclick=\"carrinho({$alimentos["id_info_alimento"]},'alimento')\" class='btn btn-sm btn-outline-secondary'>Adicionar ao carrinho</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>";
			}
			?>
		</div>
	</div>

	<?php
	include './include/rodape.php';
	include './include/footer.php';
	?>