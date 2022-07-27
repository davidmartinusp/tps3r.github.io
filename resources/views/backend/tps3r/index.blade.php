@extends('noble::master')

@section('content-header')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
    	<h4 class="mb-3 mb-md-0">Form TPS3R</h4>
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
            	Welcome to TPS3R
        	</div>
        </div>
	<div class="container mt-5">
        	<div class="row">
            	<div class="col-lg-12 margin-tb">
		        <h1>TPS3R</h1>
                <a class="btn btn-success" href="{{ route('tps3r.create') }}"> TAMBAH TPS3R</a>
                
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        {{-- <th>Kemendagri ID</th>
                        <th>Nama Transportasi</th>
                        <th>Trash Box</th>
                        <th>Review</th> --}}
                        <th>Nama TPS3R</th>
                        <th>No Telepon TPS3R</th>
                        <th>Buka Setiap Hari</th>
                        <th>Jumlah Karyawan</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($tps3r as $tps3r )
                    <tr>
                        <td>{{ $tps3r->id}}</td>
                        <td>{{ $tps3r->tps3r_name }}</td>
                        <td>{{ $tps3r->phone_number }}</td>
                        <td>{{ $tps3r->daily_open }}</td>
                        <td>{{ $tps3r->number_of_employees }}</td>
                        <td>
                            <form action="{{ route('tps3r.destroy',$tps3r->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('tps3r.edit',$tps3r->id) }}">Edit</a>
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
