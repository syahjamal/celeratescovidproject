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
					<form action="/model/{{$edit->id}}/update" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="day">Hari</label>
							<input name="hari" type="number" class="form-control" id="hari" value="{{$edit->id}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">S</label>
							<input name="s" type="number" class="form-control" id="s" value="{{$edit->s}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">I</label>
							<input name="i" type="number" class="form-control" id="i" value="{{$edit->i}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">R</label>
							<input name="r" type="number" class="form-control" id="r" value="{{$edit->r}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">D</label>
							<input name="d" type="number" class="form-control" id="d" value="{{$edit->d}}">
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