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
					<form action="/kumulatif/{{$edit->id}}/update" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="day">Tanggal</label>
							<input name="tanggal" type="date" class="form-control" id="tanggal" value="{{$edit->tanggal}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Positif Kumulatif</label>
							<input name="positif_kumulatif" type="number" class="form-control" id="positif_kumulatif" value="{{$edit->positif_kumulatif}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Sembuh Kumulatif</label>
							<input name="sembuh_kumulatif" type="number" class="form-control" id="sembuh_kumulatif" value="{{$edit->sembuh_kumulatif}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Meninggal Kumulatif</label>
							<input name="mati_kumulatif" type="number" class="form-control" id="mati_kumulatif" value="{{$edit->mati_kumulatif}}">
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