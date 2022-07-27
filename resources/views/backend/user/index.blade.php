@extends('noble::master')

@section('content-header')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
    	<h4 class="mb-3 mb-md-0">Form User</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <nav class="page-breadcrumb">
        	<ol class="breadcrumb">
        		<li class="breadcrumb-item"><a href="#">TPS3R</a></li>
        		<li class="breadcrumb-item active" aria-current="page">TPS3R</li>
        	</ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
        	<div class="card-body">
            	Welcome to User
        	</div>
        </div>
	<div class="container mt-5">
        	<div class="row">
            	<div class="col-lg-12 margin-tb">
		        <h1>User</h1>
                <a class="btn btn-success" href="{{ route('user.create') }}"> TAMBAH User</a>
                
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($user as $user )
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->no_telp }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>
                            <form action="{{ route('user.destroy',$user->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                            @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('js')
	
@endsection
