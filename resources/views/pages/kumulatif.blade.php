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
							<h3 class="panel-title">Data Kumulatif Covid-19 DKI Jakarta</h3>
							<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr"></i>Tambah Data</button>

							</div>
						</div>
						<div class="panel-body">
							<table id="tabel_kumulatif" class="table table-hover" style="width:100%">
								<thead>
									<tr>
										<th>TANGGAL</th>
										<th>POSITIF KUMULATIF</th>
										<th>SEMBUH KUMULATIF</th>
										<th>MENINGGAL KUMULATIF</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_kumulatif as $datakumulatif)
									<tr>
										<td>{{$datakumulatif->tanggal}}</td>
										<td>{{$datakumulatif->positif_kumulatif}}</td>
										<td>{{$datakumulatif->sembuh_kumulatif}}</td>
										<td>{{$datakumulatif->mati_kumulatif}}</td>
										<td>
											<a href="/kumulatif/{{$datakumulatif->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

											<a href="/kumulatif/{{$datakumulatif->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ?')">Delete</a>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kumulatif Covid19 Area Jakarta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/kumulatif/create" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="day">Tanggal</label>
						<input name="tanggal" type="date" class="form-control" id="tanggal">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Positif Kumulatif</label>
						<input name="positif_kumulatif" type="number" class="form-control" id="positif_kumulatif">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Sembuh Kumulatif</label>
						<input name="sembuh_kumulatif" type="number" class="form-control" id="sembuh_kumulatif">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Meninggal Kumulatif</label>
						<input name="mati_kumulatif" type="number" class="form-control" id="mati_kumulatif">
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
			$('#tabel_kumulatif').DataTable();
		} );
	</script>
	@endsection