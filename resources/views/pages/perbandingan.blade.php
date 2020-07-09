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
							<h3 class="panel-title">Data Perbandingan Kasus Covid-19 DKI Jakarta dengan Model</h3>
							<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr"></i>Tambah Data</button>

							</div>
						</div>
						<div class="panel-body">
							<table id="tabel_perbandingan" class="table table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Tanggal </th>
										<th>POSITIF HARIAN</th>
										<th>PREDIKSI KASUS POSITIF</th>
										<th>SELISIH KASUS</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_perbandingan as $dataperbandingan)
									<tr>
										<td>{{$dataperbandingan->tanggal}}</td>
										<td>{{$dataperbandingan->positif_harian}}</td>
										<td>{{$dataperbandingan->i}}</td>
										<td>{{$dataperbandingan->gap}}</td>
										<td>
											<a href="/perbandingan/{{$dataperbandingan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

											<a href="/perbandingan/{{$dataperbandingan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ?')">Delete</a>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Perbandingan Covid-19 Area Jakarta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/perbandingan/create" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="day">Tanggal </label>
						<input name="tanggal" type="date" class="form-control" id="tanggal">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Positif Harian</label>
						<input name="harian" type="number" class="form-control" id="harian">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Prediksi Kasus Positif</label>
						<input name="prediksi" type="number" class="form-control" id="prediksi">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Selisih Kasus</label>
						<input name="selisih" type="number" class="form-control" id="selisih">
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
			$('#tabel_perbandingan').DataTable();
		} );
	</script>
	@endsection