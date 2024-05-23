<?php

namespace App\Http\Controllers;
use App\Models\Bons;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonCommandeController extends Controller
{
    public function getBons()
    {
        $bons = Bons::all();

        return view('bons', compact('bons'));
    }

}
