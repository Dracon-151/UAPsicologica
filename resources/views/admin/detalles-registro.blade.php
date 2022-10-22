@extends('layouts.app')

@section('head')

@endsection

@section('breadcrumb')
	Ver Registro
@endsection 

@section('content')


<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title mb-3">Datos del registro</h5>
				<div class="table-responsive">
					<table class="table table-borderless mb-2">
						<tbody>
							<tr>
								<th scope="row">Escuela</th>
								<td class="text-muted">{{$registro->school}}</td>
								<th scope="row">Fecha</th>
								<td class="text-muted">{{$registro->date}}</td>
								<th scope="row">Tipo de atención</th>
								<td class="text-muted">{{$registro->attention_type}}</td>
							</tr>
							<tr>
								<th scope="row">Grado</th>
								<td class="text-muted">{{$registro->grade}}</td>
								<th scope="row">Grupo</th>
								<td class="text-muted">{{$registro->group}}</td>
								<th scope="row">Turno</th>
								<td class="text-muted">{{$registro->time}}</td>
							</tr>
							<tr>
								<th scope="row">Docente a cargo</th>
								<td class="text-muted">{{$registro->teacher}}</td>
								<th scope="row">Director</th>
								<td class="text-muted">{{$registro->principal}}</td>
								<th scope="row">Alumno</th>
								<td class="text-muted">{{$registro->name}}</td>
							</tr>
							<tr>
								<th scope="row">Zona escolar</th>
								<td class="text-muted">{{$registro->zone}}</td>
								<th scope="row">Localidad</th>
								<td class="text-muted">{{$registro->location}}</td>
								<th scope="row">Municipio</th>
								<td class="text-muted">{{$registro->municipality}}</td>
							</tr>
						</tbody>
					</table>
				</div>
				@if(isset($registro->observations))
				<h5 class="card-title mb-3">Observaciones</h5>
					<p class="text-muted">{{$registro->observations}}</p>	
				@endif
			</div><!-- end card body -->
			<div class="card-footer">
				<form action={{route('register.destroy', $registro->id)}} method="POST">
					@csrf
					@method('delete')
					<a href="{{route('register.edit', ['id'=>$registro->id])}}" class="btn btn-info add-btn">Editar</a>
					<a href="{{route('register.edit', ['id'=>$registro->id])}}" class="btn btn-success">Generar pdf</a>
					@if(Auth::user()->can('register.delete'))
						<button type="submit" class="btn btn-danger add-btn">Eliminar</button>
					@endif
				</form>
			</div>
		</div>
	</div>
	<!--end col-->
</div>
@endsection 
