@extends('layout.master')

@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
				{{session('sukses')}}
			</div>
			@endif
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Model Covid-19 DKI Jakarta</h3>
							<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr"></i>Tambah Data</button>

							</div>
						</div>
						<div class="panel-body">
							<table id="tabel_model" class="table table-hover" style="width:100%">
								<thead>
									<tr>
										<th>HARI</th>
										<th>S</th>
										<th>I</th>
										<th>R</th>
										<th>D</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_model as $datamodel)
									<tr>
										<td>{{$datamodel->hari}}</td>
										<td>{{$datamodel->s}}</td>
										<td>{{$datamodel->i}}</td>
										<td>{{$datamodel->r}}</td>
										<td>{{$datamodel->d}}</td>
										<td>
											<a href="/model/{{$datamodel->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

											<a href="/model/{{$datamodel->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ?')">Delete</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Model Covid-19 DKI Jakarta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/model/create" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="day">Hari</label>
						<input name="hari" type="number" class="form-control" id="hari">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Suspected</label>
						<input name="s" type="number" class="form-control" id="s">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Infected</label>
						<input name="i" type="number" class="form-control" id="i">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Recover</label>
						<input name="r" type="number" class="form-control" id="r">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Dead</label>
						<input name="d" type="number" class="form-control" id="d">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	@stop

	@section('js')
	<!--Data Tabel-->
	<script>
		$(document).ready(function() {
			$('#tabel_model').DataTable();
		} );
	</script>
	@endsection