@extends('layouts.app')
@section('logout')
	<a href="{{ route('admin.logout') }}"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
		Logout
	</a>
	<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
@endsection
@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create Account</h1>
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Sorry!</strong> Something wrong with your input data.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
			</div>
			@endif

			   {!! Form::open(array('route' => 'dokters.store','method'=>'POST')) !!}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>number:</strong>
						{!! Form::text('number', null, array('placeholder' => 'number','class' => 'form-control')) !!}
					</div>
				</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>date:</strong>
							{!! Form::text('date', null, array('placeholder' => 'date','class' => 'form-control')) !!}
					</div>
				</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>nama:</strong>
							{!! Form::text('nama', null, array('placeholder' => 'nama','class' => 'form-control')) !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>bagian:</strong>
							{!! Form::text('bagian', null, array('placeholder' => 'bagian','class' => 'form-control')) !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
				{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
