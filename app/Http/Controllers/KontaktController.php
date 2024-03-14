<?php
namespace APP\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\KontaktService;

class KontaktController extends Controller
{
    private KontaktService $kontaktService;

    public function __construct(KontaktService $kontaktService)
    {
        $this->kontaktService = $kontaktService;
    }

    public function index(): View
    {
        $kontakt = $this->kontaktService->getAllKontakts();
        return view('kunden.kontakt-art', ['kontakt' => $kontakt]);
    }
    
    
    
    public function persist(Request $request): View
    {

        $kontaktData = $request->validate(
            [
                'kontakt-art' => 'required|min:3',
            ]
        );

        $kontakt = $this->kontaktService->persistKontakt($kontaktData);

        return view('kunden.persist', ['kontakt' => $kontakt]);
    }
}