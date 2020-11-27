<?php 

namespace App\Models;

use App\Models\ClientArtikel;

/**
 * 
 */
class Artikel extends Model
{
	protected $table = 'artikel';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}

		function komentar(){
    	return $this->hasMany(ClientArtikel::class, 'id_artikel');
    }
    
}