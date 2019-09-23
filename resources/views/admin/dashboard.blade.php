@extends('layouts.app')

@section('content')
<main class="main">
	<!--
	<div class="main-header">
		<div class="main-header__heading">Hello User</div>
		<div class="main-header__updates">Recent Items</div>
	</div>
	-->
	<div class="main-overview">
		<div class="overviewcard card-blue">
			<div class="text">Usuários Cadastrados</div>
			<div class="overviewcard__info">{{$users->count()}}</div>
			<div class="icon"><i class="fas fa-users"></i></div>
		</div>
		<div class="overviewcard card-green">

			<div class="text">Bolões Ativos</div>
			<div class="overviewcard__info">0</div>
			<div class="icon"><i class="fas fa-award"></i></div>
			
		</div>
		<div class="overviewcard card-red">

			<div class="text">Bolões Passados</div>
			<div class="overviewcard__info">0</div>
			<div class="icon"><i class="fab fa-expeditedssl"></i></div>
			
		</div>
		<div class="overviewcard card-roxo">
			<div class="text">Concursos Lotofácil</div>
			<div class="overviewcard__info">0</div>
			<div class="icon"><i class="fas fa-plus-circle"></i></div>
		</div>
		<div class="overviewcard card-green">
			<div class="text">Concursos Megasena</div>
			<div class="overviewcard__info">0</div>
			<div class="icon"><i class="fas fa-plus-circle"></i></div>
		</div>
		<div class="overviewcard card-orange">
			<div class="text">Concursos Lotomania</div>
			<div class="overviewcard__info">0</div>
			<div class="icon"><i class="fas fa-plus-circle"></i></div>
		</div>
		<div class="overviewcard card-blue">
			<div class="text">Concursos Quina</div>
			<div class="overviewcard__info">0</div>
			<div class="icon"><i class="fas fa-plus-circle"></i></div>
		</div>
	</div>

	<!--
	<div class="main-cards">
		<div class="card">Card</div>
		<div class="card">Card</div>
		<div class="card">Card</div>
	</div>
	-->
</main>

@endsection