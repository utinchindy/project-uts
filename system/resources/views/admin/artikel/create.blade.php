@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel')}}" method="post">	
						@csrf
						<div class="form-group">
							<label for="brand" class="control-label">Judul Artikel</label>
							<input type="text" name="brand" id="judul" class="form-control">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="harga" class="control-label">Penulis Artikel</label>
						      <input type="text" class="form-control" name="penulis" id="penulis">
						    </div>
						    <div class="col">
						    	<label for="stok" class="control-label">Tanggal Rilis</label>
						      <input type="text" class="form-control" name="tanggal" id="tanggal">
						    </div>
						</div>
						<!-- <div class="form-group mt-3">
						    <label for="exampleFormControlSelect1">Kategori Produk</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
						      <option selected="" disabled="">Pilih Kategori</option>
						      <option value="1">Laptop</option>
						      <option value="2">Handphone</option>
						      <option value="3">Pakaian Pria</option>
						      <option value="4">Pakaian Wanita</option>
						    </select>
						</div> -->
						<div class="form-group">
							<label for="deskripsi" class="control-label">Isi Artikel</label>
							<textarea class="form-control" name="isi" id="isi" rows="5"></textarea>
						</div>
						<button class="btn btn-dark btn-sm"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection