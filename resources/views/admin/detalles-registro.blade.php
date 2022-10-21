@extends('layouts.app')

@section('head')

@endsection

@section('breadcrumb')
	Ver Registro
@endsection 

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card card-primary">
			</form>
				<div class="card-header align-items-center d-flex">
					<h4 class="card-title mb-0 flex-grow-1">Datos del registro</h4>
				</div><!-- end card header -->
				<div class="card-body">
					<div class="live-preview">
						<form action="{{route('register.update', ['id'=>$registro->id])}}" method="POST">
							@csrf
							@method('put')

							<div class="row gy-4">
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="school" class="form-label">Escuela</label>
										<input maxlength="50" type="text" class="form-control" id="school" name="school" value="{{$registro->school}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="date" class="form-label">Fecha</label>
										<input type="date" class="form-control" id="date" name="date" value="{{$registro->date}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="zone" class="form-label">Zona escolar</label>
										<input maxlength="3" type="text" class="form-control" id="zone" name="zone" value="{{$registro->zone}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="attention_type" class="form-label">Tipo de atención</label>
										<select class="form-control" id="attention_type" name="attention_type">
											<option selected disabled>Seleccione una opción</option>
											<option value="Atención">Atención</option>																		
											<option value="Canalización">Canalización</option>																		
											<option value="Detección">Detección</option>																		
											<option value="Intervención">Intervención</option>																		
											<option value="Orientación">Orientación</option>																		
											<option value="Seguimiento">Seguimiento</option>																		
											<option value="Taller">Taller</option>																		
										</select>
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="grade" class="form-label">Grado</label>
										<select class="form-control" id="grade" name="grade">
											<option selected disabled>Seleccione una opción</option>
											<option value="1">1ro</option>																	
											<option value="2">2do</option>																	
											<option value="3">3ro</option>																	
											<option value="4">4to</option>																	
											<option value="5">5to</option>																	
											<option value="6">6to</option>																	
										</select>
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="group" class="form-label">Grupo</label>
										<select class="form-control" id="group" name="group">
											<option selected disabled>Seleccione una opción</option>
											<option value="A">A</option>																	
											<option value="B">B</option>																	
											<option value="C">C</option>																	
											<option value="D">D</option>																	
											<option value="E">E</option>																	
											<option value="F">F</option>																	
										</select>
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="time" class="form-label">Turno</label>
										<select class="form-control" id="time" name="time">
											<option selected disabled>Seleccione una opción</option>
											<option value="Matutino">Matutino</option>																	
											<option value="Vespertino">Vespertino</option>																																
										</select>
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="teacher" class="form-label">Docente a cargo</label>
										<input maxlength="70" type="text" class="form-control" id="teacher" name="teacher" value="{{$registro->teacher}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="principal" class="form-label">Director</label>
										<input maxlength="70" type="text" class="form-control" id="principal" name="principal" value="{{$registro->principal}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="name" class="form-label">Nombre del alumno</label>
										<input maxlength="70" type="text" class="form-control" id="name" name="name" value="{{$registro->name}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="location" class="form-label">Localidad</label>
										<input maxlength="30" type="text" class="form-control" id="location" name="location" value="{{$registro->location}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="municipality" class="form-label">Municipio</label>
										<select class="form-control" id="municipality" name="municipality">
											<option selected disabled>Seleccione una opción</option>
											<option value="Comondú">Comondú</option>																																																
											<option value="La Paz">La Paz</option>																																
											<option value="Loreto">Loreto</option>																																
											<option value="Los Cabos">Los Cabos</option>
											<option value="Mulegé">Mulegé</option>																																	
										</select>
									</div>
								</div>
								<div class="col-xxl-12 col-md-12">
									<div>
										<label for="observations" class="form-label">Observaciones</label>
										<textarea maxlength="1200" rows="10" class="form-control" id="observations" name="observations">{{$registro->observations}}</textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-success add-btn" id="create-btn">Guardar cambios</button>
				</div>
			</form>
		</div>
	</div>
	<!--end col-->
</div>
@endsection 

@section('scripts')
	<script>
		document.getElementById("attention_type").value = "<?php echo $registro->attention_type ?>";
		document.getElementById("grade").value = "<?php echo $registro->grade ?>";
		document.getElementById("group").value = "<?php echo $registro->group ?>";
		document.getElementById("time").value = "<?php echo $registro->time ?>";
		document.getElementById("municipality").value = "<?php echo $registro->municipality ?>";
	</script>
	 <script src="{{ asset('libs/prismjs/prism.js') }}"></script>
@endsection