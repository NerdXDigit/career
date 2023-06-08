<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscription;
use App\Models\Offre;
use App\Models\User;

class ClientController extends Controller
{
    //
    public function userDashboard()
    {
        // return view('user.dashboard');
        return redirect()->route('userSouscription');
    }
    public function userSouscription()
    {
        $sous = Souscription::where('souscriptions.user_id', auth()->user()->id)
                            ->join('offres','offres.id','=','souscriptions.offre_id')
                            ->get();

                            
        return view('user.souscription')->with('souscriptions', $sous);
    }
    public function editprofil()
    {
        $user = User::where('id', auth()->user()->id)
                            ->first();
        return view('user.editprofil')->with('user', $user);
    }

    public function updateprofil(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user = User::find(auth()->user()->id);
        $user->nom = $request->input('nom');
        $user->prenoms = $request->input('prenom');
        $user->email = $request->input('email');
        $user->telephone = $request->input('phone');
        $user->update();
        return back()->with('status',"Votre profil a été modifié avec succès");
    }
}
