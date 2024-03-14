<?php
namespace APP\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\KundenService;
use App\Services\KontaktService;

class KundenController extends Controller
{
    private KundenService $bookService;

    public function __construct(KundenService $kundenService, KontaktService $kontaktService)
    {
        $this->kundenService = $kundenService;
        $this->kontaktService = $kontaktService;
    }

    public function index(): View
    {
        $kunden = $this->kundenService->getAllKunden();

        return view('kunden.index', ['kunden' => $kunden]);
    }

    public function create(): View
    {
        $kontakt = $this->kontaktService->getAllKontakts();

        return view('kunden.create',['kontakt' => $kontakt]);
    }
    public function persist(Request $request): View
    {
 
        $kundenData = $request->validate(
            [
                'vorname'           => 'required|min:3',
                'nachname'          => 'required',
                'strasse'           => 'required',
                'hausnummer'        => 'required',
                'postleitzahl'      => 'required',
                'ort'               => 'required',
                'beschreibung'      => 'nullable',
                'kontakt_arts_id'   => 'nullable|exists:kontakt_arts,id',
                'image'             => 'nullable|image|max:2048',
            ]
        );
        if ($request->hasFile('image') && $request->file('image')->isValid()) 
        {
            $imagePath = $request->file('image')->store('kunden_images', 'public');           
            $kundenData['image'] = $imagePath;
        } 

        $kunde = $this->kundenService->persistKunde($kundenData);

        return view('kunden.kundepersist', ['kunde' => $kunde]);
    }

}