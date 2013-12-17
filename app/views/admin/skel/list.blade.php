@extends('layout.admin')

@section('main-content')
	<a href="{{URL::to('/admin/'.$controllerName.'/adicionar')}}" class="btn btn-primary btn-lg">Adicionar</a>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>{{OrderLink::make('#', 'id')}}</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $list as $k=>$row )
			<tr>
				<td>{{$row->getKey()}}</td>
				<td>
					@include('admin/partial/list-actions')
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	{{$pagination}}
@endsection