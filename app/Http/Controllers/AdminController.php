<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\User;
use App\Models\Condition;
use App\Models\Souscription;
use App\Models\Fichier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Spatie\SimpleExcel\SimpleExcelWriter;

use Illuminate\Support\Facades\Mail;

use App\Mail\ResulatMail;

class AdminController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function saveoffer(Request $request) {

        $this->validate($request, [
            'titre' => 'required',
            'lieu' => 'required',
            'entreprise' => 'required',
            'pays' => 'required',
            'niveau' => 'required',
            'poste' => 'required',
            'deadline' => 'required',
            'logo' => 'image|max:1999',
            'description' => 'required'
        ]);
        if($request->file('logo')){
            $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);
        
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('logo')->getClientOriginalExtension();
        
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        
            $path1 = $request->file('logo')->storeAs('public/offrelogo', $fileNameToStore);


            
            $offre = new Offre();
            $offre->titre = $request->input('titre');
            $offre->lieu = $request->input('lieu');
            $offre->pays = $request->input('pays');
            $offre->niveau = $request->input('niveau');
            $offre->code = $code;
            $offre->user_id = auth()->user()->id;
            $offre->entreprise = $request->input('entreprise');
            $offre->poste = $request->input('poste');
            $offre->deadline = $request->input('deadline');
            $offre->description = $request->input('description');
            $offre->save();


           
        }else{
            $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);

            $offre = new Offre();
            $offre->titre = $request->input('titre');
            $offre->lieu = $request->input('lieu');
            $offre->pays = $request->input('pays');
            $offre->niveau = $request->input('niveau');
            $offre->code = $code;
            $offre->user_id = auth()->user()->id;
            $offre->entreprise = $request->input('entreprise');
            $offre->poste = $request->input('poste');
            $offre->deadline = $request->input('deadline');
            $offre->description = $request->input('description');
            $offre->save();
        }
        

        return back()->with('status',"L'offre a été enregistré avec succès");

    }
    public function listoffer(Request $request) {
        $offres = Offre::where('user_id', auth()->user()->id)
                            ->get();

        return view('admin.listoffer')->with('offres', $offres);
    }

    public function addoffer(Request $request) {
        return view('admin.addoffer');
    }

    public function addconditionoffer(Request $request) {
        return view('admin.addconditionoffer');
    }

    public function editoffer($id) {
        $offre = Offre::select()
                ->where('id', $id)
                ->first();
        return view('admin.editoffer')->with('offre', $offre);
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

        return redirect('/espace/admin/listoffer')->with('status',"L'offre a été modifié avec succès");


    }

    public function useroffersouscription(Request $request) {

        $id = auth()->user()->id;
        $offres = User::find($id)->offres;
        $users = User::all();
        $souscriptions = Souscription::all();

        // $candidat = DB::table('souscriptions')
        //     ->join('users', 'users.id','=','souscriptions.user_id')
        //     ->join('offres', 'offres.id','=','souscriptions.offre_id')
        //     ->where('offres.user_id', auth()->user()->id)
        //     ->get();

        // dd($candidat);

        return view('admin.canditat')->with(compact('offres','users','souscriptions'));
    }

    public function offrepostulant($id) {

        // $candidat = DB::table('souscriptions')
        //     ->join('users', 'users.id','=','souscriptions.user_id')
        //     ->join('offres', 'offres.id','=','souscriptions.offre_id')
        //     ->where('offres.user_id', auth()->user()->id)
        //     ->where('souscriptions.offre_id', $id)
        //     ->get();

        $id_user = auth()->user()->id;
        $offres = User::find($id_user)->offres;
        $users = User::all();
        $souscriptions = Souscription::where('offre_id',$id)->get();

        return view('admin.offrecanditat')->with(compact('offres','users','souscriptions'));
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

    public function savecondition(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
        ]);

        $condition = new Condition();
        $condition->offre_id = $request->input('offre_id');
        $condition->nom = $request->input('nom');
        $condition->save();

        return redirect('/espace/admin/listoffer')->with('status',"La condition a été enregistré avec succès");
    }

    public function detailsouscription($id)
    {
        // $candidat = DB::table('souscriptions')
        //                 ->join('users', 'users.id','=','souscriptions.user_id')
        //                 ->join('offres', 'offres.id','=','souscriptions.offre_id')
        //                 ->where('offres.user_id', auth()->user()->id)
        //                 ->where('souscriptions.id', $id)
        //                 ->first();


        
        
        $s = Souscription::where('id',$id)->first();
        $fichier = Souscription::find($id)->fichiers;
        $offre = Offre::find($s->offre_id);
        $user = User::find($s->user_id);

        // $id_user = $candidat->user_id;
        // $id_offre = $candidat->offre_id;
        // $fichier = Fichier::where('user_id', $id_user)
        //                     ->where('offre_id', $id_offre)
        //                     ->get();
        return view('admin.detailsouscriptions')->with(compact('fichier','offre','user','s'));
    }

    public function validersouscription($id)
    {
        $offre = Souscription::find($id);
        $offre->valide_souscription = 1;
        $offre->update();

        $idpostulant = Souscription::where('id', $id)->first();
        $idpostulant = $idpostulant->user_id;

        $infopostulant = User::where('id', $idpostulant)->first();
        $emailpostulant = $infopostulant->email;

        $mailinfopostulant = [
            'sujet'=> "Votre candidature a été évalulué par l'offeur",
            'message'=> "Votre candidature a été accepté",
        ];

        Mail::to($emailpostulant)->send( new ResulatMail($mailinfopostulant));

        return back()->with('status',"La souscriptions a été valider avec succès");
    }
    public function rejetersouscription($id)
    {
        $offre = Souscription::find($id);
        $offre->valide_souscription = 2;
        $offre->update();

        $idpostulant = Souscription::where('id', $id)->first();
        $idpostulant = $idpostulant->user_id;

        $infopostulant = User::where('id', $idpostulant)->first();
        $emailpostulant = $infopostulant->email;

        $mailinfopostulant = [
            'sujet'=> "Votre candidature a été évalulué par l'offeur",
            'message'=> "Votre candidature a été rejeté",
        ];

        Mail::to($emailpostulant)->send( new ResulatMail($mailinfopostulant));
        return back()->with('status',"La souscriptions a été rejeté avec succès");
    }

    public function conditionoffer($id)
    {
        $condition = Condition::where('offre_id', $id)
            ->get();
        return view('admin.conditionoffer')->with('condition', $condition);
    }

    public function editcondition($id)
    {
        $condition = Condition::select()
                ->where('id', $id)
                ->first();
        return view('admin.editcondition')->with('condition', $condition);
    }

    public function updatecondition(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required'
        ]);

        $condition = Condition::find($request->input('id'));
        $condition->nom = $request->input('nom');
        $condition->description = $request->input('description');
        $condition->update();

        return redirect('/espace/admin/listoffer')->with('status',"La condition a été mise a jour avec succès");
    }

    public function demandeurs()
    {
        $demandeurs = User::where('type', 0)->get();
        return view('admin.demandeurs')->with('demandeurs', $demandeurs);
    }
    public function desactiver($id)
    {
        $user = User::find($id);
        $user->actif = 0;
        $user->update();
        return back()->with('status',"Le compte a été désactiver avec succès");
    }
    public function offreurs()
    {
        $offreurs = DB::table('users')
                        ->where('type', 1)
                        ->OrWhere('type', 2)
                        ->get();
        return view('admin.offreurs')->with('offreurs', $offreurs);
    }
    public function comptesdesactive()
    {
        $comptesdesactive = User::where('actif', 0)->get();
        return view('admin.comptesdesactive')->with('comptesdesactive', $comptesdesactive);
    }

    public function offres($id)
    {
        $offres = Offre::where('user_id', $id)
                            ->get();
        $user = User::where('id', $id)
                            ->first();

        return view('admin.offres')->with('offres', $offres)->with('user', $user);
    }

    public function activeroffre($id)
    {
        $offre = Offre::find($id);
        $offre->valide = 1;
        $offre->update();
        return back()->with('status',"L'offre a été valider avec succès");
    }

    public function desactiveroffre($id)
    {
        $offre = Offre::find($id);
        $offre->valide = 0;
        $offre->update();
        return back()->with('status',"L'offre a été désactiver avec succès");
    }


    public function deleteoffre($id)
    {
        $offre = Offre::find($id);
        $offre->delete();
        return back()->with('status',"L'offre a été suprimé avec succès");
    }

    public function addoffreur()
    {
        return view('admin.addoffreur');
    }

    public function saveoffreur(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenoms' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'password' => 'required| min:6',
            'comfirmpassword' => 'required|same:password'
        ]);
        
        $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);

        $user = new User();
        $user->nom = $request->input('nom');
        $user->prenoms = $request->input('prenoms');
        $user->code = $code;
        $user->type = 1;
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/espace/admin/offreurs')->with('status',"L'untilisateur a été créée avec succès");

    }

    public function editprofil()
    {
        $user = User::where('id', auth()->user()->id)
                            ->first();
        return view('admin.editprofil')->with('user', $user);
    }

    public function updateprofil(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user = user::find(auth()->user()->id);
        $user->nom = $request->input('nom');
        $user->prenoms = $request->input('prenom');
        $user->email = $request->input('email');
        $user->telephone = $request->input('phone');
        $user->update();
        return back()->with('status',"Votre profil a été modifié avec succès");
    }

    public function exportpostulant()
    {
        $demandeurs = User::select("nom", "prenoms", "email", "telephone")
                        ->where('type', 0)
                        ->get();
        $file_name = "postulants.xlsx";
        $writer = SimpleExcelWriter::streamDownload($file_name);
        $writer->addRows($demandeurs->toArray());
        $writer->toBrowser();
    }
    public function exportoffreur()
    {
        $demandeurs = User::select("nom", "prenoms", "email", "telephone")
                    ->where('type', 1)
                    ->OrWhere('type', 2)
                    ->get();
        $file_name = "offreurs.xlsx";
        $writer = SimpleExcelWriter::streamDownload($file_name);
        $writer->addRows($demandeurs->toArray());
        $writer->toBrowser();
    }

    // public function exportpostulantoffre()
    // {
    //     $candidat = DB::table('souscriptions')
    //         ->select("nom", "prenoms", "email", "telephone", "titre", "poste")
    //         ->join('users', 'users.id','=','souscriptions.user_id')
    //         ->join('offres', 'offres.id','=','souscriptions.offre_id')
    //         ->where('offres.user_id', auth()->user()->id)
    //         ->get();

    //         $file_name = "mes_postulants.csv";
    //         $writer = SimpleExcelWriter::streamDownload($file_name);
    //         $writer->addRows($candidat->toArray());
    //         $writer->toBrowser();
    // }



}
