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
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
          <p>{{ $message }}</p>
          </div>
          @endif
          <div class="row">
          <div class="col-lg-12 margin-tb">
          <div class="pull-right mb-1">
          <a class="btn btn-success”
          href="{{ route('dokters.create') }}"> Create Account</a>
          </div>
          </div>
          </div>
          <br/>
          <table id="table_dokters" class="table table-bordered table-striped">
          <thead>
          <tr>
          <th>number</th>
          <th>date</th>
          <th>nama</th>
          <th>bagian</th>
          <th width="280px">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($dokters as $key => $dokter)
          <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $dokter->number }}</td>
          <td>{{ $dokter->date }}</td>
          <td>{{ $dokter->nama }}</td>
          <td>{{ $dokter->bagian }}</td>
          <td>
          <a class="btn btn-info"
          href="{{ route('dokters.index',$admin->id) }}">Detail</a>
          <a class="btn btn-primary"href="{{ route('dokters.edit',$admin->id) }}">Edit</a>
          {!! Form::open(['method' => 'DELETE','route' =>
					['dokters.destroy', $dokter->number],'style'=>'display:inline']) !!}
					{!! Form::submit('Delete', ['class' => 'btn btndanger'])
					!!}
					{!! Form::close() !!}
				</td>
				</tr>
				@endforeach
				</tbody>
				</table>
					{!! $dokters->render() !!}
				</div>
				</div>
@endsection
