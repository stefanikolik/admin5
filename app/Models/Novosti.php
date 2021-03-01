<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novosti extends Model{
	protected $table = 'novosti';
	public $timestamps = false;

	public function kategorija(){
		return $this->belongsToMany('App\Models\Kategorii', 'kategorija_id');
	}
}