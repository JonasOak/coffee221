<?php
session_start();
$title = 'The COFFEE\'N\'JOIN';
include './include/database.php';
include './include/header.php';
include './include/nave.php';
?>

<body class="responsive">
	<!-- JavaScript da Home -->
	<script>
		// AJAX do carrinho de compras
		function rodinhas(id_info_prod) {
			console.log(id_info_prod)
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText)
				}
			}
			xmlhttp.open("GET", "pages/botanocarrinho.php?id=" + id_info_prod);
			xmlhttp.send();
		}
		// Script do encurtador de texto dos cards
		function leiamore() {
			var pontos = document.getElementById("pontos");
			var maisTexto = document.getElementById("mais");
			var btnLeiaMais = document.getElementById("btnLeiaMais");

			if (pontos.style.display === "none") {
				pontos.style.display = "inline";
				maisTexto.style.display = "none";
				btnLeiaMais.innerHTML = "Leia Mais";
			} else {
				pontos.style.display = "none";
				maisTexto.style.display = "inline";
				btnLeiaMais.innerHTML = "Leia Menos";
			}
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
			<div class="col-md-3">
				<div class="card shadow-sm">
					<img src="./Imagens/fototeste.jpg" heigth="">
					<div class="card-body">
						<div class="card-text feed-item-body post-body">
							<div style="vertical-align: inherit;">
								<div style="vertical-align: inherit;">
									<h2 class="text-center">Caramelo Cremoso </h2>
								</div>
								<div style="vertical-align: inherit;">
									<p class="bia">Maior seletividade de grãos, sabor qualidade.</p>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary" onclick="leiamore()" id="btnLeiaMais">
									<div style="vertical-align: inherit;">Mais</div>
								</button>
							</div>
							<small class="text-muted">
								<div style="vertical-align: inherit;">
									<div style="vertical-align: inherit;">COFFE'JOIN</div>
								</div>
							</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card shadow-sm">
					<img src="./Imagens/fototeste.jpg" heigth="">
					<div class="card-body">
						<div class="card-text feed-item-body post-body">
							<div style="vertical-align: inherit;">
								<div style="vertical-align: inherit;">
									<h2 class="text-center">Caramelo Cremoso </h2>
								</div>
								<div style="vertical-align: inherit;">
									<p class="bia">Maior seletividade de grãos, sabor qualidade.</p>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary" onclick="leiamore()" id="btnLeiaMais">
									<div style="vertical-align: inherit;">Mais</div>
								</button>
							</div>
							<small class="text-muted">
								<div style="vertical-align: inherit;">
									<div style="vertical-align: inherit;">COFFE'JOIN</div>
								</div>
							</small>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card shadow-sm">
					<img src="./Imagens/fototeste.jpg" heigth="">
					<div class="card-body">
						<div class="card-text feed-item-body post-body">
							<div style="vertical-align: inherit;">
								<div style="vertical-align: inherit;">
									<h2 class="text-center">Caramelo Cremoso </h2>
								</div>
								<div style="vertical-align: inherit;">
									<p class="bia">Maior seletividade de grãos, sabor qualidade.</p>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary" onclick="leiamore()" id="btnLeiaMais">
									<div style="vertical-align: inherit;">Mais</div>
								</button>
							</div>
							<small class="text-muted">
								<div style="vertical-align: inherit;">
									<div style="vertical-align: inherit;">COFFE'JOIN</div>
								</div>
							</small>
						</div>
					</div>
				</div>
			</div>
			<!-- Parallax -->
			<div class="mt-2 mb-2 parallax-home"></div>
			<!-- Cards Home do site -->
			<div class="container">
				<div class="row justify-content-evenly">

					<div class="col-md-4">
						<div class="card shadow-sm ">
							<img src="./Imagens/fototeste.jpg" heigth=''>
							<div class="card-body">
								<p class="card-text">
								<div style="vertical-align: inherit;">
									<div style="vertical-align: inherit;">
										<h2 class="text-center">Grão de café PREMIUM </h2>
									</div>
									<div style="vertical-align: inherit;">
										<h6 class="car">Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
									</div>
								</div>
								</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">


										<button type="button" class="btn btn-sm btn-outline-secondary">

											<div style="vertical-align: inherit;">Mais</div>
										</button>
									</div>
									<small class="text-muted">
										<div style="vertical-align: inherit;">
											<div style="vertical-align: inherit;">COFFE'JOIN</div>
										</div>
									</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card shadow-sm ">
							<img src="./Imagens/fototeste.jpg" heigth="">
							<div class="card-body">
								<p class="card-text">
								<div style="vertical-align: inherit;">
									<div style="vertical-align: inherit;">
										<h2 class="text-center">Caramelo Cremoso </h2>
									</div>
									<div style="vertical-align: inherit;">
										<h6 class="car">Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
									</div>
								</div>
								</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">

										<button type="button" class="btn btn-sm btn-outline-secondary">

											<div style="vertical-align: inherit;">Mais</div>
										</button>
									</div>
									<small class="text-muted">
										<div style="vertical-align: inherit;">
											<div style="vertical-align: inherit;">COFFE'JOIN</div>
										</div>
									</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card shadow-sm ">
							<img src="./Imagens/fototeste.jpg" heigth="">
							<div class="card-body">
								<p class="card-text">
								<div style="vertical-align: inherit;">
									<div style="vertical-align: inherit;">
										<h2 class="text-center">Caramelo Cremoso </h2>
									</div>
									<div style="vertical-align: inherit;">
										<h6 class="car">Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
									</div>
								</div>
								</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">
											<div style="vertical-align: inherit;">
												<div style="vertical-align: inherit;">Mais</div>
											</div>
										</button>
									</div>
									<small class="text-muted">
										<div style="vertical-align: inherit;">
											<div style="vertical-align: inherit;">COFFE'JOIN</div>
										</div>
									</small>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<?php
			include './include/rodape.php';
			include './include/footer.php';
			?>