<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KundenData extends Model
{
    protected $table = 'kunden_data';
    
    public function kunden()
    {
        return $this->belongsTo(Kunden::class,'kunden_id');
    }

    
}