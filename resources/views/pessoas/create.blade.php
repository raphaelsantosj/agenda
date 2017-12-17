@extends('template.app')

@section('content')

	<div class="col-md-12">
		<h3>Novo Contato</h3>
	</div>

	<div class="col-md-6 well">
		<form class="col-md-12" action="{{ url('/pessoas/store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="control-label"></label>
				<input name="nome" class="col-md-12 form-control" placeholder="Nome"></input>
			</div>
			<button style="margin-top: 15px;" class="btn btn-primary pull-right">salvar</button>
		</form>
	</div>

@endsection