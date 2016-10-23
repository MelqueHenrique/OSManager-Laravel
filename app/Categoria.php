<?php namespace osmanager;

use Illuminate\Database\Eloquent\Model;
class Categoria extends Model {

	public $timestamps = false;
	
	public function os(){
		return $this->hasMany('osmanager\Os');
	}

}
