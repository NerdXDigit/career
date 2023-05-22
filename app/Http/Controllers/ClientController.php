<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscription;
use App\Models\Offre;

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
}
