@extends('layout.admin')

@section('main-content')
	<a href="{{URL::to('/admin/'.$controllerSegment.'/listagem')}}" class="btn btn-primary btn-lg">Voltar a Listagem</a>
	<h3>{{ucwords( str_replace('-', ' ', $controllerSegment) )}}</h3>
	
	{{Form::model($model, array('class'=>'form-horizontal', 'files'=>true) )}}
	<fieldset>
		{{BsFormField::make('name', 'Name', 4, 'text')}}
		{{BsFormField::make('email', 'E-mail', 4, 'text')}}
		{{BsFormField::make('password', 'Senha', 3, 'password')}}

		
		{{Form::submit('Salvar', array('class'=>'btn btn-primary pull-right') )}}
	</fieldset>
	{{Form::close()}}
@endsection
