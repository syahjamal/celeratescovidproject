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
					<form action="/harian/{{$edit->id}}/update" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="day">Tanggal</label>
							<input name="tanggal" type="date" class="form-control" id="tanggal" value="{{$edit->tanggal}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Positif Harian</label>
							<input name="positif_harian" type="number" class="form-control" id="positif_harian" value="{{$edit->positif_harian}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Sembuh Harian</label>
							<input name="sembuh_harian" type="number" class="form-control" id="sembuh_harian" value="{{$edit->sembuh_harian}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Meninggal Harian</label>
							<input name="mati_harian" type="number" class="form-control" id="mati_harian" value="{{$edit->mati_harian}}">
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
	

