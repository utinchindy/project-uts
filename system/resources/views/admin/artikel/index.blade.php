@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Filter	
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control label">judul</label>
							<input type="text" class="form-control" name="judul" value="{{$judul ?? ''}}">
						</div>
						<div class="form-group">
							<label for="" class="control label">penulis</label>
							<input type="text" class="form-control" name="penulis" value="{{$penulis ?? ''}}">
						</div>
				<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control label">Dari tanggal</label>
								<input type="text" class="form-control" name="tanggal_min" value="{{$tanggal_min ?? ''}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control label">Ke tanggal</label>
								<input type="text" class="form-control" name="tanggal_max" value="{{$tanggal_max ?? ''}}">
							</div>
						</div>
					</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"> Filter </i></button>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Data Artikel
					<a href="{{url('admin/artikel/create')}}" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Judul Artikel</th>
								<th>Penulis Artikel</th>
								<th>Tanggal Rilis</th>
								<th>Kategori Artikel</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_artikel as $artikel)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">
									  <a href="{{url('admin/artikel', $artikel->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-info-circle"></i></a>
									  <a href="{{url('admin/artikel', $artikel->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									  @include('template.utils.delete', ['url' => url('admin/artikel', $artikel->id)])
									</div>
								</td>
								<td>{{$artikel->judul}}</td>
								<td>{{$artikel->seller->nama}}</td>
								<td>{{$artikel->tanggal}}</td>
								<td>{{$artikel->kategori->nama}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection