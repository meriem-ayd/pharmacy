<?php

namespace App\Http\Controllers;
use App\Models\Dci;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DciController extends Controller
{

   

    public function getDCI(){
        return view('dci');
    }

    public function postDCI(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'IDdci' => 'required|integer',
            'dci' => 'required|string|max:255',
            'forme' => 'required|string|max:255',
            'dosage' => 'required|string|max:50',
            'quantite_en_stock' => 'required|integer',
            'prix_unitaire' => 'required|numeric',
            'Montant' => 'required|numeric',
            'date_peremption' => 'required|date',
        ]);


 // Créez une nouvelle instance de DCI avec les données validées

    Dci::create($validatedData);
    return redirect()->route('dci')->with('success', 'La DCI a été ajoutée avec succès.');

}

 // Redirigez l'utilisateur vers la page DCI ou toute autre page pertinente


//////
public function listeDCI()
{
 $dcis = Dci::all();
 return view('liste_dci', compact('dcis'));
}
public function updateDCI(Request $request, $id)
{
// Validez les données du formulaire
$validatedData = $request->validate([
 'IDdci'=>'required|integer',
 'dci' => 'required|string|max:255',
 'forme' => 'required|string|max:255',
 'dosage' => 'required|string|max:50',
 'quantite_en_stock' => 'required|integer',
 'prix_unitaire' => 'required|numeric',
 'Montant' => 'required|numeric',
 'date_peremption' => 'required|date',
]);


}
}
