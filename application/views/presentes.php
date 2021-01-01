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
	<link href="../../styles/bootstrap.css" rel="stylesheet">
	<link href="../../styles/main.css" rel="stylesheet">
	<link rel="shortcut icon" href="../../images/silhueta-de-formato-simples-de-coracao (2).png"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
        $(document ).ready(function() {
            let ativo = $("#ativoProduto").val();
            if(ativo == 0){
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
					src="../../images/panela (2).png" width="32px"> Chá de Casa Nova</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav"
					aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
					class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link smooth-scroll" href="<?php echo base_url();?>">Home</a></li>
<!--					<li class="nav-item"><a class="nav-link smooth-scroll" href="#convite">Convite</a></li>-->
<!--					<li class="nav-item"><a class="nav-link smooth-scroll" href="#presentes">Presentes</a></li>-->
<!--					<li class="nav-item"><a class="nav-link smooth-scroll" href="#galeria">Galeria</a></li>-->
<!--					<li class="nav-item"><a class="nav-link smooth-scroll" href="#contato">Contato</a></li>-->
				</ul>
			</div>
		</nav>
	</div>
	<div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
		<div class="container">
			<div class="col-md-10 col-sm-12 px-0 mx-0">
				<h2 class="display-3 " style="margin-left:-6px;">Chá de Casa Nova</h2>
				<h3 class="h5 mt-3">Não coloque limites em seus sonhos, coloque FÉ <img
						src="../../images/silhueta-de-formato-simples-de-coracao (1).png"></h3>
			</div>
		</div>
	</div>
</header>

<div class="da-section first-presentes" id="presentes">
	<div class="container">
		<div class="h3 text-center" data-aos="fade-up">Presentes</div>

	</div>
	<div class="container">
		<div class="row">
		<?php
		$data = (array)$data;
		foreach ($data

		as $value){

		$idProduto = $value->id;
		$nomeProduto = $value->nome;
		$descricaoProduto = $value->descricao;
		$imagemProduto = $value->imagem;
		$ativoProduto = $value->ativo;

		?>

			<div class="col-md-4">
				<div class="card d-block mb-3"><img class="card-img-top img-produtos" src="<?php echo $imagemProduto; ?>"
													alt="image"/>
					<div class="card-body text-center">
						<input type="text" name="idProduto" value="<?php echo $idProduto;?>">
						<input type="hidden" name="ativo" id="ativoProduto" value="<?php echo $ativoProduto;?>">
						<div class="h5"><?php echo $nomeProduto; ?></div>
						<p class="text-muted"><?php echo $descricaoProduto;?></p>
						<?php if($ativoProduto==0){
								echo '<button class="btn btn-primary btn-presentear" id="btn-presentear" type="submit">Indisponível</button>';
						}else{
							echo '<button class="btn btn-primary btn-presentear" data-toggle="modal" data-target="#exampleModal" id="btn-presentear" value="'. $idProduto .'" type="submit">Presentear</button>';
						}
						?>

					</div>
				</div>
			</div>

		<?php } ?>
		</div>
	</div>
</div>

</div>

<!--Modal Presentear -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Muito Obrigada <img src="../../images/silhueta-de-formato-simples-de-coracao (2).png" width="16px"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<p>Você pode comprar o presente escolhido em qualquer loja de sua preferência e levar no dia do chá.</p>

				<form>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Nome:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">E-mail:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="id_produto" value="<?php echo $idProduto; ?>">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</div>
</div>


<div class="da-contact" id="contato">
	<div class="da-contact-detail" data-aos="zoom-in" data-aos-duration="1000">
		<div class="container">
			<div class="card py-4 px-4">
				<div class="h4 pb-4">Se tiver alguma dúvida entre em contato comigo (:</div>
				<div class="row">
					<div class="col-md-7 col-sm-12 mb-3">
						<div class="da-contact-message">
							<form action="https://formspree.io/eduardacirina@gmail.com" method="POST">
								<div class="row">
									<div class="col">
										<input class="mr-3 form-control" type="text" name="first-name"
											   placeholder="Nome" required="required"/>
									</div>
								</div>
								<br>
								<div class="row mb-3">
									<div class="col">
										<input class="form-control" type="text" name="Subject" placeholder="Assunto"
											   required="required"/>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col">
										<input class="form-control" type="email" name="_replyto"
											   placeholder="E-mail" required="required"/>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col">
											<textarea class="form-control" name="message" placeholder="Sua Mensagem"
													  rows="4" required="required"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<button class="btn btn-primary" type="submit">Enviar</button>
									</div>
								</div>
							</form>
						</div>
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


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/ekko-lightbox.min.js"></script>
<script src="scripts/main.js"></script>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever') // Extrai informação dos atributos data-*
        // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
        // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
        var modal = $(this)
        modal.find('.modal-title').text('Obrigada!)
        modal.find('.modal-body input').val(recipient)
    })
</script>
</body>
</html>
