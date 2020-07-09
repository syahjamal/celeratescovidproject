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
				<div class="col-md-6">
					<form action="/perbandingan/{{$edit->id}}/update" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="day">Hari</label>
							<input name="tanggal" type="date" class="form-control" id="tanggal" value="{{$edit->tanggal}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Positif Harian</label>
							<input name="harian" type="number" class="form-control" id="harian" value="{{$edit->positif_harian}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Prediksi Kasus Positif</label>
							<input name="prediksi" type="number" class="form-control" id="prediksi" value="{{$edit->i}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Selisih Kasus</label>
							<input name="selisih" type="number" class="form-control" id="selisih" value="{{$edit->gap}}">
						</div>
						<button type="submit" class="btn btn-warning">Update</button>
					</div>		
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@stop