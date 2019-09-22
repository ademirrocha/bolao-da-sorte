<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Talismã da Sorte - Loterias Caixa</title>
	
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Ademir Rocha / Myzzy Tecnologia" />
	<meta name="publisher" content="Ademir Rocha / Myzzy Tecnologia" />
	<meta name="copyright" content="© 2017 Ademir Rocha" />
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="Talismã da Sorte,Loteria online,Megasena" />
	<meta name="description" content="Talismã da Sorte - Venha tirar a sorte grande." />
	<link rel="shortcut icon" href="{{asset('vendor/myzzy/images/icons/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('vendor/myzzy/images/icons/favicon.ico')}}" type="image/x-icon">

	<meta property="og:image" content="http://www.talismadasorte.com.br/imagens/og-loteria-online.jpg" />
	<meta property="og:title" content="Loteria Online" />
	<meta property="og:url" content="http://www.talismadasorte.com.br" />
	<meta property="og:description" content="" />

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/myzzy/css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/myzzy/css/bxslider.css')}}" />

	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="{{asset('vendor/myzzy/js/jquery.1.11.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/myzzy/js/jquery.bxSlider.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/myzzy/js/scripts.js')}}"></script>

</head>

<body>

	<!-- WIDGET FACEBOOK -->
	<div id="app">

		<div class="divWrapper"><!-- DIV PRINCIPAL -->
			<!-- CABEÇALHO -->
			<header class="header">
				<!-- DIV FIXA SOMBRA -->
				<div class="divFixaSombra"></div>
				<!-- ! DIV FIXA SOMBRA -->
				<div class="divWidth100 divTopo" style="background-image:url('{{asset('vendor/myzzy/images/bg-topo-2.png')}}');background-repeat:no-repeat;background-position:85% 3px;background-attachment:fixed;">

					<div class="divContent">

						<div class="divMeio1">
							<a href="."><img src="{{asset('vendor/myzzy/images/logo-topo
								.png')}}" class="img-marca-topo" /></a>
							</div>
							@guest
							<div class="divMeio2">
								<a href="register" class="aLinkSession2">CADASTRO</a> <a href="login" class="aLinkSession1">ENTRAR</a>
							</div>
							@endguest
							@auth
							<div class="divMeio2 color1">
								<a href="perfil" class="aLinkSession2" title=" Visualizar / Atualizar perfil ">PERFIL</a> <a href="logout" class="aLinkSession1">SAIR</a>
							</div>
							<div class="divMeio3 alignCenter">
								<b>{{auth()->user()->name}}</b><br>Créditos: <span class="spnCreditos">0,00</span>
							</div>
							@endauth

						</div>

					</div>

					<div class="divFixaHidden" id="divFixaHidden"></div>

					<div class="divFixa" id="divFixa">
						<div class="divWidth100 bgColor1" style="height:50px;border-top:3px solid #0391A0;background-image:url('{{asset('vendor/mzzy/images/bg-topo.png')}}') ;background-color:;background-repeat:repeat-x;background-size:21px 100%;">

							<div class="divContent divLinksTop">

								<div class="divLinks alignLeft">
									<div class="divData">Hoje, {{date('d/m/Y')}}</div>			
								</div>

								<div class="divLinks alignLeft">
									<a href="boloes" class="aLinkTop" title="Bolões">BOLÕES</a> | <a href="quem-somos" class="aLinkTop" title="Quem somos">QUEM SOMOS</a> | <a href="regras" class="aLinkTop" title="Regras">REGRAS</a>
								</div>


							</div>

						</div>
					</div>

				</header>

				<main class="py-4">
					@yield('content')
				</main>


				<div class="clearCol2"></div>	
			</div>﻿	
		</div>
		<!-- FECHA DIVWRAPPER -->


		<!-- RODAPÉ -->
		<div class="clearBoth" style="height:30px;"></div>

		<footer class="divFooter">
			<div class="divFooterWrapper">

				<div class="height20"></div>

				<div class="div1Col resp1 alignLeft">
					<ul class="ulFooter">
						<li><a href="boloes" title="Bolões">Bolões</a></li>
						<li><a href="quem-somos" title="Quem somos">Quem somos</a></li>
						<li><a href="regras" title="Regras">Regras</a></li>
						<li><a href="politicas" title="Políticas">Políticas</a></li>
						<li><a href="termos-de-uso" title="Termos de uso">Termos de uso</a></li>
					</ul>
					<br>
				</div>

				<div class="div1Col divMarginLeft1 resp1 alignLeft">
					<ul class="ulFooter">
						<li><a href="login" title="Entrar">Entrar</a></li>
						<li><a href="register" title="Cadastro">Cadastrar-se</a></li>
						<li><a href="fale-conosco" title="Fale conosco">Fale conosco</a></li>
						<li><a href="contas" title="Contas">Contas</a></li>
					</ul>
					<br>
				</div>

				<a href="###" id="LinkToTop" class="myLinkToTop" title="Para o topo"><span></span></a>

				<div class="div1Col divMarginLeft2 resp3 marginTop20">
					<a href="." title="Para o topo"><img src="{{asset('vendor/myzzy/images/logo.png')}}" style="width:150px;max-width:100%;"/></a><br>

					<div class="clearBoth"></div><div class="div3Col"><p>Telefone: (71)&nbsp;98683-5471<br>Contate-nos:&nbsp;<a href="mailto:vendas@talismadasorte.com.br" target="_blank">vendas@talismadasorte.com.br</a></p>
					</div>	</div>

					<div class="clearBoth"></div>

					<div class="divFooterBottom">
						<span class="fontFooter">
							<a href="http://www.myzzy.com.br" title="By Ademir Rocha e Myzzy Tecnologia" target="_blank" class="aFooter">Desenvolvido Por:&nbsp; <img src="{{asset('vendor/myzzy/images/myzzy-footer.png')}}" alt="Myzzy Tecnologia" title="Myzzy Tecnologia" />
							</a>
						</span><br>
					</div>
				</footer>

			</div><!-- FECHA DIV WRAPPER -->
		</div>
	</div>

	@yield('js')
</body>
</html>
