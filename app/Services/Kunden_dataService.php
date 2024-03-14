<?php

namespace App\Services;

use App\Models\KundenData;

class Kunden_dataservice
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
        // dd($kontakt->kontaktart);
        return $kontakt;
    }
}