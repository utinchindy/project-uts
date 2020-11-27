<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artikel;

class Kategori extends Model{
	protected $table = 'kategori';


	function artikel(){
		return $this->hasMany(Artikel::class, 'id_kategori'); 
	}
}