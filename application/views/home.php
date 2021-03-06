<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chá de casa nova da Duda</title>
	<meta name="description" content="A Digital Agency Website landing page template built by TemplateFlip.com"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet">
	<link href="css/aos.css" rel="stylesheet">
	<link href="css/ekko-lightbox.css" rel="stylesheet">
	<link href="styles/bootstrap.css" rel="stylesheet">
	<link href="styles/main.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/silhueta-de-formato-simples-de-coracao (2).png"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
        $(document).ready(function () {
            let ativo = $("#ativoProduto").val();
            if (ativo == 0) {
                $('#btn-presentear').prop('disabled', true);
            }
        });
	</script>

</head>
<body id="top">
<header>
	<div class="container pt-4">
		<nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0"><a class="text-white navbar-brand"
																				href="#"><img
					src="images/panela (2).png" width="32px"> Chá de Casa Nova</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav"
					aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
					class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link smooth-scroll" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link smooth-scroll" href="#convite">Convite</a></li>
					<li class="nav-item"><a class="nav-link smooth-scroll"
											href="<?php echo base_url('index.php/Home/getPresentesAll') ?>">Presentes</a>
					</li>
					<li class="nav-item"><a class="nav-link smooth-scroll" href="#galeria">Galeria</a></li>
					<li class="nav-item"><a class="nav-link smooth-scroll" href="#contato">Contato</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
		<div class="container">
			<div class="col-md-10 col-sm-12 px-0 mx-0">
				<h2 class="display-3 " style="margin-left:-6px;">Chá de Casa Nova</h2>
				<h3 class="h5 mt-3">Não coloque limites em seus sonhos, coloque FÉ <img
						src="images/silhueta-de-formato-simples-de-coracao (1).png"></h3>
			</div>
		</div>
	</div>
</header>
<div class="page-content">
	<div>
		<div class="da-section da-work bg-secondary convite-especial" id="convite">
			<div class="container">
				<div class="perfil-img">
					<img class="foto-perfil" src="images/foto-duda.jpg" width="200px">
				</div>
				<div class="h3 pb-3 text-center text-white text-convite" data-aos="fade-up">Convite Especial</div>
				<p class="px-5 pb-5 text-center text-white" data-aos="fade-up">Convido você a comemorar e celebrar está
					grande conquista comigo.</p>
				<div class="row">
					<div class="col-md-4">
						<div class="card mb-3" data-aos="flip-left">
							<div class="card-body card-convite mt-4 mb-1 text-center"><img class="icones-convite"
																						   src="images/date.png"
																						   width="40px">
								<br>
								<div class="h4 pb-3">Quando?</div>
								<p>Data: xx/xx/xx</p>
								<p>Hora: 00h00</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-3" data-aos="zoom-in-up">
							<div class="card-body card-convite mt-4 mb-1 text-center"><img class="icones-convite"
																						   src="images/local.png"
																						   width="40px">
								<div class="h4 pb-3">Onde?</div>
								<p>R. Francisco Pereira, 466 - Vila Galvão</p>
								<p>UP Lago dos Patos - Salão de Festas</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-3" data-aos="flip-right">
							<div class="card-body card-convite mt-4 mb-1 text-center"><img class="icones-convite"
																						   src="images/presente.png"
																						   width="40px">
								<div class="h4 pb-3">Presente</div>
								<p>Acesse a sessão presentes e escolha qual presente gostaria de me presentear <img
										src="images/silhueta-de-formato-simples-de-coracao (2).png" width="16px">.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="da-section first-presentes" id="presentes">
			<div class="container">
				<div class="h3 text-center" data-aos="fade-up">Presentes</div>

			</div>
			<div class="da-team carousel slide py-5" id="da-carouselIndicator" data-ride="carousel"
				 data-aos="zoom-in-up" data-aos-duration="1000">
				<div class="container">
					<ol class="carousel-indicators">
						<li class="active" data-target="#da-carouselIndicator" data-slide-to="0"></li>
						<li data-target="#da-carouselIndicator" data-slide-to="1"></li>
						<li data-target="#da-carouselIndicator" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<?php
						$data = (array)$data;
						$indexArray = 0;
						$dataNew = array_slice($data, 0, 9);
						for ($i = 0; $i < 3; $i++) {
							if ($i == 0) {
								echo '<div class="carousel-item active">';
							} else {
								echo '<div class="carousel-item">';
							}

							echo '<div class="row">';
							$sliceArray = array();
							switch ($i) {
								case 0:
									$sliceArray = array_slice($dataNew, 0, 3);
									break;

								case 1:
									$sliceArray = array_slice($dataNew, 3, 3);
									break;

								case 2:
									$sliceArray = array_slice($dataNew, 6, 3);
									break;

							}

							foreach ($sliceArray as $value) {

								$idProduto = $value->id;
								$nomeProduto = $value->nome;
								$descricaoProduto = $value->descricao;
								$imagemProduto = $value->imagem;
								$ativoProduto = $value->ativo;


								echo '
        <div class="col-md-4">
          <div class="card d-block mb-3"><img class="card-img-top img-produtos" src="' . $imagemProduto . '" alt="image"/>
            <div class="card-body text-center">
              <input type="hidden" name="idProduto" value="' . $idProduto . '">
              <input type="hidden" name="ativo" id="ativoProduto" value="' . $ativoProduto . '">
              <div class="h5">' . $nomeProduto . '</div>
              <p class="text-muted">' . $descricaoProduto . '</p>';
								if ($ativoProduto == 0) {

									echo ' <button class="btn btn-primary btn-presentear" id="btn-presentear" type="submit" disabled>Indisponível</button>';

								} else {
									echo ' <button class="btn btn-primary btn-presentear" data-toggle="modal" data-target="#exampleModal" id="btn-presentear" type="submit">Presentear</button>';
								}
								echo '</div>
          </div>
        </div>';
							}

							echo '</div></div>';
						}
						?>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" align="center">
					<a href="<?php echo base_url('index.php/Home/getPresentesAll') ?>">
						<button class="btn btn-primary vermais">Ver mais produtos</button>
					</a>
				</div>
			</div>
		</div>

	</div>
	<!--Modal Presentear -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<h5 class="modal-title" id="exampleModalLabel">Muito Obrigada <img src="images/silhueta-de-formato-simples-de-coracao (2).png" width="16px"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<p>Você pode comprar o presente escolhido em qualquer loja de sua preferência e levar no dia do chá.</p>

					<?php
					echo form_open_multipart('Home/getConfirm');
					?>
					<form>
						<label>Nome:</label>
						<br>
						<input type="hidden" name="id_produto" value="3">
						<input type="text" class="form-control" placeholder="Nome" name="nome_confirmado">

						<br>
						<label>E-mail:</label>
						<br>
						<input class="form-control" type="email" placeholder="exemplo@exemplo.com.br" name="email">
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Confirmar</button>
						</div>

					</form>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Link to open the modal -->

	<!-- <div class="da-section bg-light" id="services">
	  <div class="da-services">
		<div class="container text-center">
		  <div class="h3 pb-5 text-center" data-aos="fade-up">Our Services</div>
		  <div class="row">
			<div class="col-lg-3 col-md-6">
			  <div class="card mb-3">
				<div class="card-body py-5" data-aos="zoom-in" data-aos-duration="500">
				  <div class="text-primary"><i class="pb-3 fas fa-code fa-3x"></i>
					<p class="font-weight-bold">Web Design</p>
				  </div>
				  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
				</div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-6">
			  <div class="card mb-3">
				<div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1000">
				  <div class="text-primary"><i class="pb-3 fab fa-buromobelexperte fa-3x"></i>
					<p class="font-weight-bold">Graphic Design</p>
				  </div>
				  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
				</div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-6">
			  <div class="card mb-3">
				<div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1500">
				  <div class="text-primary"><i class="pb-3 fas fa-cubes fa-3x"></i>
					<p class="font-weight-bold">App Development</p>
				  </div>
				  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
				</div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-6">
			  <div class="card mb-3">
				<div class="card-body py-5" data-aos="zoom-in" data-aos-duration="2000">
				  <div class="text-primary"><i class="pb-3 fas fa-eye fa-3x"></i>
					<p class="font-weight-bold">Application Support</p>
				  </div>
				  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div> -->
	<!-- <div class="da-projects" id="projects">
	  <div class="title">
		O sonho se tornou em realidade ...
	  </div>
	  <div class="row mx-0">
		<div class="col-md-6 px-0 da-project-1" style="background-image: url('images/up.jpeg');" data-aos="zoom-in"></div>
		<div class="col-md-6 pl-5 pt-5 pb-3">
		  <div class="row">
			<div class="col-1 da-project-icon"><i class="text-warning fas fa-user-md fa-2x fa-fw"></i></div>
			<div class="col-10">
			  <div class="h4">Healthcare</div>
			  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
			</div>
		  </div>
		  <div class="row mb-3">
			<div class="col-1 da-project-icon"><i class="text-info fas fa-book fa-2x fa-fw"></i></div>
			<div class="col-10">
			  <div class="h4">Education</div>
			  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
			</div>
		  </div>
		  <div class="row">
			<div class="col-1 da-project-icon"><i class="fas fa-shopping-basket fa-2x fa-fw"></i></div>
			<div class="col-10">
			  <div class="h4">Digital Retail</div>
			  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="row mx-0">
		<div class="col-md-6 pl-5 pt-5 pb-3">
		  <div class="row mb-3">
			<div class="col-1 da-project-icon"><i class="text-warning fas fa-money-bill-alt fa-2x fa-fw"></i></div>
			<div class="col-10">
			  <div class="h4">Finance</div>
			  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
			</div>
		  </div>
		  <div class="row mb-3">
			<div class="col-1 da-project-icon"><i class="text-info far fa-chart-bar fa-2x fa-fw"></i></div>
			<div class="col-10">
			  <div class="h4">Marketing</div>
			  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
			</div>
		  </div>
		  <div class="row">
			<div class="col-1 da-project-icon"><i class="fas fa-music fa-2x fa-fw"></i></div>
			<div class="col-10">
			  <div class="h4">Entertainment</div>
			  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, nullam tempor malesuada laoreet tempus blandit pretium etc.</p>
			</div>
		  </div>
		</div>
		<div class="col-md-6 px-0 da-project-2" style="background-image: url('images/up.jpeg');" data-aos="zoom-in"></div>
	  </div>
	</div> -->
	<div class="da-section da-brand bg-secondary parte-frases">
		<div class="container text-center text-white">
			<div class="carousel slide pb-5" id="da-brand-carouselIndicator" data-ride="carousel">
				<ol class="carousel-indicators">
					<li class="active" data-target="#da-brand-carouselIndicator" data-slide-to="0"></li>
					<li data-target="#da-brand-carouselIndicator" data-slide-to="1"></li>
					<li data-target="#da-brand-carouselIndicator" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<p>"Quando se rega um sonho com fé, Deus abençoa a colheita."</p>
								<div class="h6 text-uppercase">Inês Seibert</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<p>"Vá firme na direção das suas metas. Porque o pensamento cria, o desejo atrai e a fé
									realiza."</p>
								<div class="h6 text-uppercase">Autor desconhecido.</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<p>"Que a felicidade seja sonho, meta e realidade."</p>
								<div class="h6 text-uppercase">Autor desconhecido</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container da-gallery galeria-div" id="galeria">
		<div class="h3 pb-5 text-center text-galeria" data-aos="fade-up">Galeria</div>
		<div class="card-columns">
			<div class="card"><a href="images/up.jpeg" data-toggle="lightbox" data-gallery="da-gallery"><img
						class="img-fluid" src="images/up.jpeg" alt="Gallery Image 1"/></a></div>
			<div class="card"><a href="images/up-piscina.jpeg" data-toggle="lightbox" data-gallery="da-gallery"><img
						class="img-fluid" src="images/up-piscina.jpeg" alt="Gallery Image 2"/></a></div>
			<div class="card"><a href="images/up-fachada.jpeg" data-toggle="lightbox" data-gallery="da-gallery"><img
						class="img-fluid" src="images/up-fachada.jpeg" alt="Gallery Image 3"/></a></div>
			<div class="card"><a href="images/up-exemplo.jpeg" data-toggle="lightbox" data-gallery="da-gallery"><img
						class="img-fluid" src="images/up-exemplo.jpeg" alt="Gallery Image 4"/></a></div>
			<div class="card"><a href="images/gallery-img-2.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img
						class="img-fluid" src="images/gallery-img-2.jpg" alt="Gallery Image 5"/></a></div>
		</div>
	</div>

	<div class="da-contact" id="contato">
		<div class="da-contact-detail" data-aos="zoom-in" data-aos-duration="1000">
			<div class="container">
				<div class="card py-4 px-4">
					<div class="h4 pb-4">Se tiver alguma dúvida entre em contato comigo (:</div>
					<div class="row">
						<div class="col-md-7 col-sm-12 mb-3">

									<?php
									echo form_open_multipart('Home/getContato');
									?>
									<div class="row">
										<div class="col">
											<input class="mr-3 form-control" type="text" name="nome"
												   placeholder="Nome" required="required"/>
										</div>
									</div>
									<br>
									<div class="row mb-3">
										<div class="col">
											<input class="form-control" type="text" name="assunto" placeholder="Assunto"
												   required="required"/>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<input class="form-control" type="email" name="email"
												   placeholder="E-mail" required="required"/>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<textarea class="form-control" name="mensagem" placeholder="Sua Mensagem"
													  rows="4" required="required"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<button class="btn btn-primary" type="submit">Enviar</button>
										</div>
									</div>
								<?php
								echo form_close();
								?>
						</div>
						<div class="col-md-5">
							<p>Você também pode entrar em contato pelo meu telefone via whatsApp.</p>
							<a href="https://api.whatsapp.com/send?phone=5511962420491">
								<button class="btn btn-primary" type="submit">whatsApp</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<footer class="bg-secondary da-section">
	<div class="container text-white">
		<div class="row">
			<div class="col-md-4">
				<div class="h2">Chá de Casa Nova</div>
				<p class="mb-0">eduardacirina@gmail.com</p>
			</div>
			<div class="col-md-4">
				<div class="h6 pb-2">Como chegar?</div>
				<div>
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.1976338480335!2d-46.56822444875356!3d-23.45333459437099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5b3dd7aaaab%3A0x606cd4d46e55d90b!2sR.%20Francisco%20Pereira%2C%20466%20-%20Vila%20Galvao%2C%20Guarulhos%20-%20SP%2C%2007071-060!5e0!3m2!1spt-BR!2sbr!4v1609036471257!5m2!1spt-BR!2sbr"
						width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""
						aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
			<div class="col-md-4">
				<div class="h6 pb-2">Copyright</div>
				<p>&copy; 2020</p>
			</div>
		</div>
	</div>
</footer>
<div id="scrolltop">
	<button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
</div>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/ekko-lightbox.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>
