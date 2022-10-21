@extends('layouts.app')

@section('head')
	<link href="{{ asset('libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
	Buscar Registro
@endsection 

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">Registros</h4>
			</div><!-- end card header -->

			<div class="card-body">
				<div id="registerList">
					<div class="row g-4 mb-3">
						<div class="col-sm-auto">
							<div>
								<a href="{{route('register.create')}}" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i>Crear registro</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="d-flex justify-content-sm-end">
								<div class="search-box ms-2">
									<input type="search" class="form-control search" placeholder="Buscar...">
									<i class="ri-search-line search-icon"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive table-card mt-3 mb-1">
						<table class="table align-middle table-nowrap" id="customerTable">
							<thead class="table-light">
								<tr>
									<th class="sort" data-sort="date">Fecha</th>									
									<th class="sort" data-sort="name">Nombre del Alumno</th>
									<th class="sort" data-sort="school">Escuela</th>
									<th class="sort" data-sort="attention_type">Tipo de Atención</th>
									<th class="sort" data-sort="location">Localidad</th>
									<th class="sort" data-sort="municipality">Municipio</th>
									<th class="sort" data-sort="details">Detalles</th>
								</tr>
							</thead>
							<tbody class="list">
								@foreach ($registros as $registro)
								<tr>
									<td class="date">{{$registro->date}}</td>									
									<td class="name">{{$registro->name}}</td>
									<td class="school">{{$registro->school}}</td>
									<td class="attention_type">{{$registro->attention_type}}</td>
									<td class="location">{{$registro->location}}</td>
									<td class="municipality">{{$registro->municipality}}</td>
									<td class="details">
										<a href="{{route('register.details', ['id'=>$registro->id])}}" class="btn btn-sm btn-info">Detalles</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="noresult" style="display: none">
							<div class="text-center">
								<lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
								</lord-icon>
								<h5 class="mt-2">Sin  resultados</h5>
								<p class="text-muted mb-0">Ningún registro coincide con los datos que ha buscado.</p>
							</div>
						</div>
					</div>

					<div class="d-flex justify-content-end">
						<div class="pagination-wrap hstack gap-2">
							<ul class="pagination listjs-pagination mb-0"></ul>
						</div>
					</div>
				</div>
			</div><!-- end card -->
		</div>
		<!-- end col -->
	</div>
	<!-- end col -->
</div>		
@endsection 

@section('scripts')

	<script src="{{ asset('libs/prismjs/prism.js') }}"></script>
	<script src="{{ asset('libs/list.js/list.min.js') }}"></script>
	<script src="{{ asset('libs/list.pagination.js/list.pagination.min.js') }}"></script>

	<script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>


	<script>
		var options = {
  			valueNames: ['date', 'name', 'school', 'attention_type', 'location', 'municipality'],
		    page: 5,
  			pagination: true,
			plugins: [ListPagination({ left: 2, right: 2 })],
		};

		var registerList = new List('registerList', options).on("updated", function (e) {
			0 == e.matchingItems.length
			? (document.getElementsByClassName("noresult")[0].style.display = "block")
			: (document.getElementsByClassName("noresult")[0].style.display = "none");
		});
	</script>

@endsection