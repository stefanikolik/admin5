<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategorii extends Model{
	protected $table = 'kategorii';
	public $timestamps = false;

	public function novosti(){
		return $this->belongsToMany('App\Models\Novosti')->withPivot('novost_id', 'kategorija_id');
	}
}