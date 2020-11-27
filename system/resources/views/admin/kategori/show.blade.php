@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Pada Kategori {{$kategori->nama}}
				</div>
				<div class="card-body">
					<table class="table table-hover table-responsive">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Aksi</th>
					      <th scope="col">Nama Artikel</th>
					      <th scope="col">Penulis Artikel</th>
					      <th scope="col">Tanggal Rilis</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">{{$kategori->id}}</th>
					      <td>
					      	<a href="{{url('admin/artikel')}}" class="btn btn-dark btn-sm"><i class="fa fa-eye"></i></a>
					      </td>
					      <td>{{$kategori->nama}}</td>
					      <td>@mdo</td>
					      <td>@mdo</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection