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
					<button id="modalBtn" type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#myModal">Generar PDF</button>
					<a href="{{route('register.edit', ['id'=>$registro->id])}}" class="btn btn-info add-btn">Editar</a>
					@if(Auth::user()->can('register.delete'))
						<button type="submit" class="btn btn-danger add-btn">Eliminar</button>
					@endif
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Default Modals -->
<div id="myModal" tabindex="-1" aria-labelledby="myModalLabel" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
			<form action="{{ route('register.pdf') }}" method="POST">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">Generar PDF</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-6">
							<label class="col-form-label">Folio del oficio</label>
							<input placeholder="Folio" maxlength="20" type="text" class="form-control" name="folio"
							value="{{old('folio', '')}}">
							@error('folio')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-6">
							<label class="col-form-label">Fecha del oficio</label>
							<input type="date" class="form-control" name="date"
							value="{{old('date', $registro->date)}}">
							@error('date')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-12">
							<label class="col-form-label">Nombre del destinatario</label>
							<input placeholder="Nombre" maxlength="70" type="text" class="form-control" name="recipient-name"
							value="{{old('recipient-name', '')}}">
							@error('recipient-name')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-12">
							<label class="col-form-label">Cargo del destinatario</label>
							<input placeholder="Cargo" maxlength="70" type="text" class="form-control" name="recipient-job"
							value="{{old('recipient-job', '')}}">
							@error('recipient-job')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-12">
							<label class="col-form-label">Nombre del remitente</label>
							<input placeholder="Nombre" maxlength="70" type="text" class="form-control" name="sender-name"
							value="{{old('sender-name', '')}}">
							@error('sender-name')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-12">
							<label class="col-form-label">Cargo del remitente</label>
							<input placeholder="Cargo" maxlength="70" type="text" class="form-control" name="sender-job"
							value="{{old('sender-job', '')}}">
							@error('sender-job')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group col-12">
							<label class="col-form-label">C.C.P.</label>
							<input maxlength="20" type="text" class="form-control" name="ccp"
							value="{{old('ccp', 'Archivo')}}">
							@error('ccp')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					@if(isset($registro->observations))
						<input type="hidden" name="observations" value="{{$registro->observations}}">
					@endif
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
					<button type="submit" class="btn btn-success">Generar</button>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection 

@section('scripts')
	@if(old('observations') !== null)
		<script type="text/javascript">
			document.getElementById("modalBtn").click();
		</script>
	@endif
@endsection
