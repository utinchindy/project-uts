<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\ClientArtikel;
use App\Models\Kategori;


/**
 * 
 */
class ArtikelController extends Controller
{
	
	function index()
	{
		$user = request()->user();
		$data['list_artikel'] = $user->artikel;
		return view('admin/artikel/index', $data);
	}
	
	function create()
	{
		return view('admin/artikel/create');
	}
	
	function store()
	{
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->tanggal = request('tanggal');
		$artikel->isi = request('isi');
		$artikel->save();

		return redirect('admin/artikel')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Artikel $artikel)
	{
		$data['artikel'] = $produk;
		return view('admin/artikel/show', $data);
	}
	
	function edit(Artikel $artikel)
	{
		$data['artikel'] = $produk;
		return view('admin/artikel/edit', $data);
		
	}
	
	function update(Artikel $artikel)
	{
		$artikel->brand = request('brand');
		$artikel->nama = request('nama');
		$artikel->harga = request('harga');
		$artikel->stok = request('stok');
		$artikel->id_kategori = request('id_kategori');
		$artikel->deskripsi = request('deskripsi');
		$artikel->save();

		return redirect('admin/artikel')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Artikel $artikel)
	{
		$artikel->delete();

		return redirect('admin/artikel')->with('danger', 'Data Berhasil di Hapus');
	}
	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_artikel'] = Artikel::where('nama','like', "%$nama%")->get();
		//$data['list_artikel'] = Artikel::whereIn('stok', $stok)->get();
		$data['list_artikel'] = Artikel::whereNotIn('stok', [0])->whereBetween('harga', [$harga_min, $harga_max])->where('nama','like', "%$nama%")->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		

		return view('admin/artikel/index', $data);	
	}
}