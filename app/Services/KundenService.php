<?php

namespace App\Services;

use App\Models\Kunden;
use App\Models\KundenData;

class Kundenservice
{
    
    public function getAllKunden()
    {
        $kunden = KundenData::all();

        return $kunden;
    }

    public function persistKunde(array $kundenData)
    {
        $kunde                  = new Kunden();

        $kunde->vorname         = $kundenData['vorname'];
        $kunde->nachname        = $kundenData['nachname'];
        $kunde->beschreibung    = $kundenData['beschreibung']?? null;
        $kunde->kontakt_art_id  = $kundenData['kontakt_arts_id']?? null;
        $kunde->image           = $kundenData['image']?? null;
        $kunde->save();

        $kundendaten                = new KundenData();
        $kundendaten->strasse       = $kundenData['strasse'];
        $kundendaten->hausnummer    = $kundenData['hausnummer'];
        $kundendaten->postleitzahl  = $kundenData['postleitzahl'];
        $kundendaten->ort           = $kundenData['ort'];
        $kundendaten->kunden_id     = $kunde->id;

        $kundendaten->save();

        return $kundendaten;
    }
}
