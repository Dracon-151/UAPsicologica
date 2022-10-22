@extends('layouts.app')

@section('head')

@endsection

@section('breadcrumb')
	Agregar Registro
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
						<form action="{{route('register.store')}}" method="POST">
							@csrf

							<div class="row gy-4">
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="school" class="form-label">Escuela</label>
										<input maxlength="50" type="text" class="form-control" id="school" name="school"
										value="{{old('school', '')}}">
										@error('school')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="date" class="form-label">Fecha</label>
										<input type="date" class="form-control" id="date" name="date"
										value="{{old('date', '')}}">
										@error('date')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="zone" class="form-label">Zona escolar</label>
										<input maxlength="3" type="text" class="form-control" id="zone" name="zone"
										value="{{old('zone', '')}}">
										@error('zone')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="attention_type" class="form-label">Tipo de atención</label>
										<select class="form-control" id="attention_type" name="attention_type">
											<option selected disabled>Seleccione una opción</option>
											<option 
											{{ old('attention_type') == 'Atención' ? "selected" : "" }} 
											value="Atención">Atención</option>																		
											<option 
											{{ old('attention_type') == 'Canalización' ? "selected" : "" }} 
											value="Canalización">Canalización</option>																		
											<option 
											{{ old('attention_type') == 'Detección' ? "selected" : "" }} 
											value="Detección">Detección</option>																		
											<option 
											{{ old('attention_type') == 'Intervención' ? "selected" : "" }} 
											value="Intervención">Intervención</option>																		
											<option 
											{{ old('attention_type') == 'Orientación' ? "selected" : "" }} 
											value="Orientación">Orientación</option>																		
											<option 
											{{ old('attention_type') == 'Seguimiento' ? "selected" : "" }} 
											value="Seguimiento">Seguimiento</option>																		
											<option 
											{{ old('attention_type') == 'Taller' ? "selected" : "" }} 
											value="Taller">Taller</option>																		
										</select>
										@error('attention_type')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="grade" class="form-label">Grado</label>
										<select class="form-control" id="grade" name="grade">
											<option selected disabled>Seleccione una opción</option>
											<option 
											{{ old('grade') == '1' ? "selected" : "" }} 
											value="1">1ro</option>																	
											<option 
											{{ old('grade') == '2' ? "selected" : "" }} 
											value="2">2do</option>																	
											<option 
											{{ old('grade') == '3' ? "selected" : "" }} 
											value="3">3ro</option>																	
											<option 
											{{ old('grade') == '4' ? "selected" : "" }} 
											value="4">4to</option>																	
											<option 
											{{ old('grade') == '5' ? "selected" : "" }} 
											value="5">5to</option>																	
											<option 
											{{ old('grade') == '6' ? "selected" : "" }} 
											value="6">6to</option>																	
										</select>
										@error('grade')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="group" class="form-label">Grupo</label>
										<select class="form-control" id="group" name="group">
											<option selected disabled>Seleccione una opción</option>
											<option 
											{{ old('group') == 'A' ? "selected" : "" }} 
											value="A">A</option>																	
											<option 
											{{ old('group') == 'B' ? "selected" : "" }} 
											value="B">B</option>																	
											<option 
											{{ old('group') == 'C' ? "selected" : "" }} 
											value="C">C</option>																	
											<option 
											{{ old('group') == 'D' ? "selected" : "" }} 
											value="D">D</option>																	
											<option 
											{{ old('group') == 'E' ? "selected" : "" }} 
											value="E">E</option>																	
											<option 
											{{ old('group') == 'F' ? "selected" : "" }} 
											value="F">F</option>																	
										</select>
										@error('group')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-2">
									<div>
										<label for="time" class="form-label">Turno</label>
										<select class="form-control" id="time" name="time">
											<option selected disabled>Seleccione una opción</option>
											<option 
											{{ old('time') == 'Matutino' ? "selected" : "" }} 
											value="Matutino">Matutino</option>																	
											<option 
											{{ old('time') == 'Vespertino' ? "selected" : "" }} 
											value="Vespertino">Vespertino</option>																																
										</select>
										@error('time')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="teacher" class="form-label">Docente a cargo</label>
										<input maxlength="70" type="text" class="form-control" id="teacher" name="teacher"
										value="{{old('teacher', '')}}">
										@error('teacher')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="principal" class="form-label">Director</label>
										<input maxlength="70" type="text" class="form-control" id="principal" name="principal"
										value="{{old('principal', '')}}">
										@error('principal')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="name" class="form-label">Nombre del alumno</label>
										<input maxlength="70" type="text" class="form-control" id="name" name="name"
										value="{{old('name', '')}}">
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="location" class="form-label">Localidad</label>
										<input maxlength="30" type="text" class="form-control" id="location" name="location"
										value="{{old('location', '')}}">
										@error('location')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-3 col-md-6">
									<div>
										<label for="municipality" class="form-label">Municipio</label>
										<select class="form-control" id="municipality" name="municipality">
											<option selected disabled>Seleccione una opción</option>
											<option 
											{{ old('municipality') == 'Comondú' ? "selected" : "" }} 
											value="Comondú">Comondú</option>																																																
											<option 
											{{ old('municipality') == 'La Paz' ? "selected" : "" }} 
											value="La Paz">La Paz</option>																																
											<option 
											{{ old('municipality') == 'Loreto' ? "selected" : "" }} 
											value="Loreto">Loreto</option>																																
											<option 
											{{ old('municipality') == 'Los Cabos' ? "selected" : "" }} 
											value="Los Cabos">Los Cabos</option>
											<option 
											{{ old('municipality') == 'Mulegé' ? "selected" : "" }} 
											value="Mulegé">Mulegé</option>																																	
										</select>
										@error('municipality')
											<span class="text-light" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
									</div>
								</div>
								<div class="col-xxl-12 col-md-12">
									<div>
										<label for="observations" class="form-label">Observaciones</label>
										<textarea maxlength="1200" rows="10" class="form-control" id="observations" name="observations">
											{{old('observations', '')}}
										</textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-success add-btn" id="create-btn">Guardar registro</button>
					<a href="{{route('register.index')}}" class="btn btn-dark">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
	<!--end col-->
</div>
@endsection 

@section('scripts')
	 <script src="{{ asset('libs/prismjs/prism.js') }}"></script>
@endsection