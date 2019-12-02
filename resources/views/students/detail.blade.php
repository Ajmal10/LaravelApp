@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-8">
			<h2>Detail Mahasiswa</h2>
			
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">{{$students->nama}}</h5>
			    <h6 class="card-subtitle mb-2 text-muted">{{$students->email}}</h6>
			    <p class="card-text">{{$students->nrp}}</p>
			    <p class="card-text">{{$students->jurusan}}</p>
			    <a href="{{$students->id}}/edit" class="btn btn-success">Edit</a>
			    <form action="/students/{{$students->id}}" method="post" class="d-inline" >
			    	@method('delete')
			    	@csrf
			    	<button type="submit" class="btn btn-danger">Delete</button>
			    </form>
			    <a href="/students" class="card-link">Kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>	

@endsection