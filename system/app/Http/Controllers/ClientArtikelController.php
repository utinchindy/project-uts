<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\User;
use App\Models\ClientArtikel;

/**
 * 
 */
class ClientArtikelController extends Controller
{
	
	function index()
	{
		$data['list_artikel'] = Artikel::all();
		return view('user/index', $data);
	}

	
	function create(Artikel $artikel)
	{
		
		$data['artikel'] = $artikel;
		$data['list_komentar'] = $artikel->komentar;
		return view('user/baca', $data);
	}
	
	function store(Artikel $artikel)
	{
		
		$komentar = new ClientArtikel;
		$komentar->id_artikel = $artikel->id;
		$komentar->nama = request('nama');
		$komentar->email = request('email');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('/')->with('success', 'Berhasil menambahkan komentar');
	}
	
	function show(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('user/detail', $data);
	}
	
	function edit(ClientArtikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('user/edit', $data);
		
	}
	
	function update(ClientArtikel $artikel)
	{
		$artikel->nama = request('nama');
		$artikel->harga = request('harga');
		$artikel->jumlah = request('jumlah');
		$artikel->save();

		return redirect('checkout')->with('success', 'Barang Berhasil di Ubah pada Keranjang');
	}
	
	function destroy(ClientArtikel $artikel)
	{
		$artikel->delete();

		return redirect('checkout')->with('danger', 'Barang Berhasil di Hapus dari Keranjang');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_artikel'] = artikel::where('nama','like', "%$nama%")->get();
		//$data['list_artikel'] = artikel::whereIn('stok', $stok)->get();
		$data['list_artikel'] = Artikel::whereNotIn('stok', [0])->whereIn('stok', $stok)->whereBetween('harga', [$harga_min, $harga_max])->where('nama','like', "%$nama%")->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		

		return view('user/index', $data);	
	}

}