@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')
<main class="container">
	<h4 class="center-align">Timline {{ $module->title }}</h4>
	<div class="divider"></div>
	<div class="col s8 m8 offset-m2">
		<div class="row">
			<div class="col s12">
				<table class="highlight">
					<thead>
					<tr>
						<th>Modulo</th>
						<th>Tipo Elemento</th>
					</tr>
					</thead>

					<tbody>
					<tr>
						<td>teste</td>
						<td>Explicação</td>
					</tr>
					</tbody>
				</table>
			</div>


			<form class="col s12" method="POST" action="{{ route('adicionar_elemento_timeline') }}" >
				@csrf
				<div class="row">
					<div class="input-field col s12">
						<select name="CodModule">
							<option value="{{ $module->CodModule }}">{{ $module->title }}</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 m10">
						<select name="tipoElemento">
							<option value="" disabled selected>Escolha um Elemento</option>
							<option value="E">Explicação</option>
							<option value="V">Vocabulário</option>
							<option value="Q">Pergunta</option>
						</select>
						<label>Materialize Select</label>
					</div>

					<button class="btn waves-effect waves-light col s2 m2" type="submit" name="action">
						Criar Elemento
						<i class="material-icons right">create</i>
					</button>
				</div>
			</form>

		</div>
	</div>
</main>
@endsection