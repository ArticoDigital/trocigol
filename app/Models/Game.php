<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model{
	protected $fillable = [ 'shirt' ];

	function scores() {
		return $this->hasMany( Score::class );
	}
}
