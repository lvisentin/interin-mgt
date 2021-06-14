<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<script
			src="https://code.jquery.com/jquery-3.6.0.min.js"
			integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"
		></script>

		<link rel="shortcut icon" href="./assets/img/favicon.ico" />
		
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
		/>

		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap"
			rel="stylesheet"
		/>

		<link rel="stylesheet" href="styles/global.css" />
		<link rel="stylesheet" href="styles/contact.css" />

		<title>Interim Management</title>
	</head>
	<body>
		<header class="header">
			<div class="container-fluid">
				<div class="nav-row flex-acenter-jbetween">
					<div class="col-logo">
						<a href="index.html">
							<img src="assets/img/small-logo.png" />
						</a>
					</div>

					<div class="col-nav">
						<nav class="nav-bar">
							<ul class="nav-ul">
								<li>
									<a href="index.html" class="nav-link"
										>Início</a
									>
								</li>
								<li>
									<a href="about.html" class="nav-link"
										>Sobre o IM</a
									>
								</li>

								<li>
									<div class="dropdown">
										<a
											class="nav-link dropdown-toggle"
											type="button"
											id="dropdownMenuButton1"
											data-bs-toggle="dropdown"
											aria-expanded="false"
										>
											Soluções
										</a>
										<ul
											class="dropdown-menu"
											aria-labelledby="dropdownMenuButton1"
										>
											<li>
												<a
													href="solutions/taxintelligence.html"
													class="dropdown-item"
													href="#"
													><img
														class="dropdown-icon"
														width="24"
														height="24"
														src="assets/img/icon1.png"
													/>Inteligência tributária</a
												>
											</li>
											<li>
												<a
													href="solutions/management.html"
													class="dropdown-item"
													href="#"
													><img
														class="dropdown-icon"
														width="24"
														height="24"
														src="assets/img/icon2.png"
													/>Gestão de Pessoas</a
												>
											</li>
											<li>
												<a
													href="solutions/financial.html"
													class="dropdown-item"
													href="#"
													><img
														class="dropdown-icon"
														width="24"
														height="24"
														src="assets/img/icon3.png"
													/>Estratégia Financeira</a
												>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="team.html" class="nav-link"
										>Equipe</a
									>
								</li>
								<li>
									<a
										href="contact.php"
										class="nav-link active"
										>Contato</a
									>
								</li>
								<li>
									<a href="partner.html">
										<button class="yellow-white-button">
											Seja um Parceiro!
										</button>
									</a>
								</li>
							</ul>
						</nav>
					</div>

					<div class="mobile-nav">
						<div class="dropdown">
							<a
								class="nav-link dropdown-main"
								type="button"
								id="dropdownMenuButton1"
								data-bs-toggle="dropdown"
								aria-expanded="false"
							>
								<img
									width="36"
									height="36"
									src="assets/img/botao-de-menu.svg"
								/>
							</a>
							<ul
								class="dropdown-menu"
								aria-labelledby="dropdownMenuButton1"
							>
								<li>
									<a
										href="index.html"
										class="nav-link dropdown-link"
										>Início</a
									>
								</li>
								<li>
									<a
										href="about.html"
										class="nav-link dropdown-link"
										>Sobre o IM</a
									>
								</li>

								<li>
									<a
										href="solutions/taxintelligence.html"
										class="dropdown-item"
										><img
											class="dropdown-icon"
											width="24"
											height="24"
											src="assets/img/icon1.png"
										/>Inteligência tributária</a
									>

									<a
										href="solutions/management.html"
										class="dropdown-item"
										><img
											class="dropdown-icon"
											width="24"
											height="24"
											src="assets/img/icon2.png"
										/>Gestão de Pessoas</a
									>

									<a
										href="solutions/financial.html"
										class="dropdown-item"
										><img
											class="dropdown-icon"
											width="24"
											height="24"
											src="assets/img/icon3.png"
										/>Estratégia Financeira</a
									>
								</li>
								<li>
									<a
										href="team.html"
										class="nav-link dropdown-link"
										>Equipe</a
									>
								</li>
								<li>
									<a
										href="contact.html"
										class="nav-link dropdown-link active"
										>Contato</a
									>
								</li>

								<li>
									<a
										class="nav-link dropdown-link"
										href="partner.html"
									>
										Seja um Parceiro!
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main>
			<section class="img-section">
				<img src="assets/img/contact/img1.png" />
			</section>

			<section class="contact-section">
				<aside class="text-aside">
					<h3 class="contact-title">
						Deixe sua mensagem que nosso time entrará em contato com
						você.
					</h3>

					<h6 class="contact-obs">Atendemos todo o Brasil.</h6>

					<h5 class="email-title">
						Se preferir, nos envie um e-mail:
					</h5>
					<h6 class="email-text">
						interim.management@grupopanna.com.br
					</h6>

					<h5 class="email-title">
						Ou entre em contato via WhatsApp:
					</h5>
					<h6 class="email-text">
						<img src="./assets/img/whatsapp.svg" width="24" height="24">
						
						<a
							href="https://api.whatsapp.com/send?phone=5515981340092"
							>Murilo - (15) 98134-0092</a
						>
					</h6>

					<h6 class="contact-obs">Atendemos todo o Brasil.</h6>
				</aside>

				<aside class="form-aside">
					<div class="contact-form">
						<?php if (isset($_REQUEST['email']) && $_REQUEST['email'] === 'true') { ?>
							<p>Recebemos sua mensagem e em breve entraremos em contato!</p>
						<?php } else if (isset($_REQUEST['email']) && $_REQUEST['email'] === 'false') { ?>
							<p>Ocorreu um erro ao enviar o email!</p>
						<?php } ?>
						<form action="email.php" method="post">
							<input
								class="contact-input"
								placeholder="Nome Completo"
								name="name"
								required
							/>
							<input class="contact-input" name="email" placeholder="E-mail" required />
							<input
								class="contact-input"
								placeholder="Assunto"
								name="subject"
								required
							/>
							<textarea
								class="contact-textarea"
								placeholder="Mensagem"
								name="message"
								required
							></textarea>

							<button type="submit" name="submit" class="yellow-white-button form-button">
								Enviar Mensagem
							</button>
						</form>
					</div>
				</aside>
			</section>

			<section class="units-section">
				<h3 class="units-title">Nossas Unidades</h3>
				<h6 class="units-subtitle">
					Segunda-feira à Sexta-feira das 8h às 18h
				</h6>

				<div class="units-list">
					<article class="unit">
						<h5 class="unit-title">Unidade Sorocaba</h5>
						<p class="unit-address">
							Av. Pres. Juscelino Kubitscheck de Oliveira, 660 -
							Centro Fone: (15) 3238-2022
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">Unidade Campinas</h5>
						<p class="unit-address">
							Rua Jose Paulino, 1542 - Centro Salas 06, 07, 08, 09
							e 10. Fone: (19) 2517-1928
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">Unidade Mairinque</h5>
						<p class="unit-address">
							Av. Francisco de Assis Pinto de Oliveira, 92 - 1°
							andar - Sala 6 - Centro
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">Unidade Boituva</h5>
						<p class="unit-address">
							Rua Prof. José Assad Atalla Junior, 119 - Sala 05 -
							Centro
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">Unidade Manaus</h5>
						<p class="unit-address">
							Rua Tito Bittencourt, no 83 Bairro de São Francisco
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">Unidade Itapetininga</h5>
						<p class="unit-address">
							Rua Saldanha Marinho, 561 - Centro
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">Unidade São Paulo</h5>
						<p class="unit-address">
							R. Cel. Luís Barroso, 455 Santo Amaro, São Paulo
						</p>
					</article>

					<article class="unit">
						<h5 class="unit-title">
							Centro Administrativo (Sorocaba)
						</h5>
						<p class="unit-address">
							Av. Pres. Juscelino Kubitscheck de Oliveira, 660,
							Centro Fone: (15) 3238-2020
						</p>
					</article>
				</div>
			</section>
		</main>

		<footer class="footer">
			<div class="footer-wrapper">
				<div class="up-div">
					<aside class="logos-aside">
<<<<<<< HEAD:contact.html
						<img class="logos-aside-img" src="./assets/img/small-logo.png" />
						<p>Interin Management</p>

						<img class="logos-aside-img" src="./assets/img/logopanna.png" />
=======
						<p>Interim Management</p>
>>>>>>> 1731b70277c418a16f252071d204bc5e633113fb:contact.php
						<p>Grupo Panna</p>
					</aside>

					<aside class="social-aside">
						<a href="https://www.facebook.com/grupopannazn/"
							><img src="assets/img/fb-logo.png"
						/></a>

						<a href="https://www.instagram.com/interimmanegement/"
							><img src="assets/img/instagram.png"
						/></a>

						<a
							href="https://www.linkedin.com/in/interim-management-a6178ab2/"
							><img src="assets/img/linkedin.png"
						/></a>
					</aside>
				</div>

				<hr />

				<div class="bottom-div">
					Av. Juscelino Kubitscheck de Oliveira, n° 660, Sorocaba/SP -
					CEP 18035-060
				</div>
			</div>
		</footer>
	</body>

	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
		integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</html>

