<?php

namespace App\Services;

use App\Models\Kontakt;

class Kontaktservice
{
    
    public function getAllKontakts()
    {
        $kontakt = Kontakt::all();
        return $kontakt;
    }

    public function persistKontakt(array $kontaktData): Kontakt
    {

        $kontakt = new Kontakt();
        $kontakt->kontaktart  = $kontaktData['kontakt-art'];

        $kontakt->save();

        return $kontakt;
    }
}