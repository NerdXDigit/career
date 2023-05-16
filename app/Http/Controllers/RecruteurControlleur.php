<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\User;
use App\Models\Souscription;
use Illuminate\Support\Facades\DB;


class RecruteurControlleur extends Controller
{
    //
    public function offreurDashboard()
    {
        return view('offreur.dashboard');
    }

    public function saveoffer(Request $request) {

        $this->validate($request, [
            'titre' => 'required',
            'lieu' => 'required',
            'entreprise' => 'required',
            'poste' => 'required',
            'deadline' => 'required',
            'logo' => 'image|required|max:1999',
            'description' => 'required'
        ]);

        $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);
        
        $fileNameWithExt = $request->file('logo')->getClientOriginalName();

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
        $extension = $request->file('logo')->getClientOriginalExtension();
    
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
    
        $path1 = $request->file('logo')->storeAs('public/offrelogo', $fileNameToStore);

        $offre = new Offre();
        $offre->titre = $request->input('titre');
        $offre->lieu = $request->input('lieu');
        $offre->code = $code;
        $offre->user_id = auth()->user()->id;
        $offre->entreprise = $request->input('entreprise');
        $offre->poste = $request->input('poste');
        $offre->deadline = $request->input('deadline');
        $offre->description = $request->input('description');
        $offre->logo = $fileNameToStore;
        $offre->save();

        return back()->with('status',"L'offre a été enregistré avec succès");

    }
    public function listoffer(Request $request) {
        $offres = Offre::where('user_id', auth()->user()->id)
                            ->get();

        return view('offreur.listoffer')->with('offres', $offres);
    }

    public function addoffer(Request $request) {
        return view('offreur.addoffer');
    }

    public function conditionoffer(Request $request) {
        
    }

    public function editoffer($id) {
        $offre = Offre::select()
                ->where('id', $id)
                ->first();
        return view('offreur.editoffer')->with('offre', $offre);
    }

    public function updateoffer(Request $request) {
        
        $this->validate($request, [
            'titre' => 'required',
            'lieu' => 'required',
            'entreprise' => 'required',
            'poste' => 'required',
            'deadline' => 'required',
            'logo' => 'image|required|max:1999',
            'description' => 'required'
        ]);

        $fileNameWithExt = $request->file('logo')->getClientOriginalName();

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
        $extension = $request->file('logo')->getClientOriginalExtension();
    
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
    
        $path1 = $request->file('logo')->storeAs('public/offrelogo', $fileNameToStore);

        $offre = Offre::find($request->input('id'));
        $offre->titre = $request->input('titre');
        $offre->lieu = $request->input('lieu');
        $offre->entreprise = $request->input('entreprise');
        $offre->poste = $request->input('poste');
        $offre->deadline = $request->input('deadline');
        $offre->description = $request->input('description');
        $offre->logo = $fileNameToStore;
        $offre->update();

        return redirect('/espace/offreur/listoffer')->with('status',"L'offre a été modifié avec succès");


    }

    public function useroffersouscription(Request $request) {

        $candidat = DB::table('souscriptions')
            ->join('users', 'users.id','=','souscriptions.user_id')
            ->join('offres', 'offres.id','=','souscriptions.offre_id')
            ->where('offres.user_id', auth()->user()->id)
            ->get();

        return view('offreur.canditat')->with('candidat', $candidat);
    }

    public function stopoffer($id)
    {
        $offre = Offre::find($id);
        $offre->actif = 0;
        $offre->update();
        return back()->with('status',"L'offre a été arrêter avec succès");
    }

    public function userofferfile(Request $request) {
        
    }
}
