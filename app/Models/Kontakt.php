<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontakt extends Model
{
    protected $table = 'kontakt_arts';
    
    public function kunden()
    {
        return $this->hasMany(Kunden::class,'kontakt_art_id');
    }
}
