<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunden extends Model
{
    protected $table = 'kundens';
    
    public function kontaktart()
    {
        return $this->belongsTo(Kontakt::class,'kontakt_art_id');
    }
    
    public function kunden_data()
    {
        return $this->belongsTo(KundenData::class,'kunden_data_id');
    }
}
