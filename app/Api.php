<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'apis';

    protected $fillable = [
    	'hero_name',
    	'hero_image',
    	'hero_overview',
    	'hero_detail'
    ];

    public function spells(){
    	return $this->hasMany('App\Spell');
    }

}
