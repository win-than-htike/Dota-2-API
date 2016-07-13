<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $table = 'spells';

    protected $fillable = [
    	'spell_name',
    	'spell_image',
    	'spell_overview'
    ];

    public function api(){
    	return $this->belongsTo('App\Api');
    }
}
