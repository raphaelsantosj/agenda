@extends('template.app')

@section('content')

	<div class="col-md-12">
		<h3>Adicionar Contato</h3>
	</div>

	<div class="col-md-6 well">
		<form class="col-md-12" action="{{ url('/pessoas/store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group col-md-12">
				<label class="control-label">Nome</label>
				<input name="nome" class="form-control" placeholder="Nome"></input>
			</div>
			<div class="form-group col-md-4">
				<label class="control-label">DDD</label>
				<input name="ddd" class="form-control" placeholder="DDD"></input>
			</div>
			<div class="form-group col-md-8">
				<label class="control-label">Telefone</label>
				<input name="telefone" class="form-control" placeholder="Telefone"></input>
			</div>
			<button style="margin-top: 15px;" class="btn btn-primary pull-right">salvar</button>
		</form>
	</div>

@endsection