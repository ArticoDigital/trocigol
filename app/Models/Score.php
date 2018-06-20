<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
	protected $fillable = ['time','level','score'];

    public function getTimeAttribute($value)
    {
        return substr_replace($value, $this->level  , 4, 1);

    }
}
