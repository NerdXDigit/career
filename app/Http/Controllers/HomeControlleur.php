<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

use App\Models\Offre;
use App\Models\User;
use App\Models\Condition;
use App\Models\Souscription;
use App\Models\Fichier;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use App\Mail\PostuleMail;
use App\Mail\PostuleMailOffreur;

class HomeControlleur extends Controller
{
    //

    public function homepage(Request $request) {

        $offres = DB::table('offres')
                    ->where('actif', 1)
                    ->where('valide', 1)
                    ->orderBy('id', 'DESC')
                    ->limit(6)
                    ->get();

        return view('home')->with(compact('offres'));
    }

    public function loginpage(Request $request) {
        return view('login');
    }

    public function registerpage(Request $request) {
        return view('register');
    }

    public function opportunitiespage(Request $request) {

        $offres = Offre::where('actif', 1)
                        ->where('valide', 1)
                        ->get();

        return view('opportunities')->with(compact('offres'));
    }

    public function opportunitiesrecherche(Request $request) {

        $offres = Offre::where('pays','LIKE', '%' .$request->pays. '%')
                        ->where('poste','LIKE', '%' .$request->poste. '%')
                        ->where('entreprise','LIKE', '%' .$request->entreprise. '%')
                        ->get();


        return view('opportunities_recherche')->with(compact('offres'));
    }

    public function opportunitiespagedetails(Request $request, $id) {

        $offre = Offre::find($id);
        if($offre) {
            $conditions = Offre::find($id)->conditions;
            return view('opportunities_details')->with(compact('offre','conditions'));
        } else
            return redirect()->route('opportunitiespage');
    }

    public function loginaction(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function registeraction(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required','min:6'],
        ]);

        $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);

        $user = User::create([
            'nom' => $request->nom,
            'prenoms' => $request->prenom,
            'email' => $request->email,
            'code' => $code,
            'telephone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    // Affiche offres limit 6
    // public function offres()
    // {
    //     $offres = DB::table('offres')
    //                 // ->where('actif', 1)
    //                 // ->where('valide', 1)
    //                 ->orderBy('id', 'DESC')
    //                 ->limit(6)
    //                 ->get();
        
    // }

    public function condition($id)
    {
        $condition = Condition::where('offre_id', $id)
            ->get();
        return view('condition')->with('condition', $condition);
    }

    public function savefichier(Request $request) {

        $fichiers = $request->allFiles();

        // Définir les règles de validation
        $regles = [];
        foreach ($fichiers as $nomChamp => $fichier) {
            $regles[$nomChamp] = 'required|mimes:pdf,doc,docx';
        }

        
        // Valider les fichiers
        $validateur = Validator::make($fichiers, $regles);


        if ($validateur->fails()) {
            return redirect()->back()->withErrors($validateur)->withInput();
        }

        foreach ($fichiers as $nomChamp => $fichier) {
            
            // Générer un nom de fichier unique
            $nomFichier = $fichier->getClientOriginalName();
            $nomFichierUnique = uniqid() . '_' . $nomFichier;

            // Enregistrer le fichier dans un emplacement spécifique
            // $fichier->storeAs('chemin/vers/le/dossier', $nomFichierUnique);
            $fichier->move(public_path().'/file/', $nomFichierUnique);
            
            $fichier_condition = new Fichier();
            $fichier_condition->user_id = auth()->user()->id;
            $fichier_condition->offre_id = $request->input('offre_id');
            $fichier_condition->fichier = $nomFichierUnique;
            $fichier_condition->save();

           

        }

        $infocandidat = User::where('id', auth()->user()->id)->first();

        $emailcandidat = $infocandidat->email;

        $mailinfocandidat = [
            'sujet'=> "Canditature envoyé avec succès",
            'message'=> "Votre candicature a été recu avec succes",
         ];

         $mailinfooffreur = [
            'sujet'=> "Canditature envoyé avec succès",
            'message'=> "Votre candicature a été recu avec succes",
         ];

        

        Mail::to($emailcandidat)->send( new PostuleMail($mailinfocandidat));

        // Mail::to($emailoffreur)->send( new PostuleMailOffreur($mailinfooffreur));




        $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);


        $souscription = new Souscription();
        $souscription->user_id = auth()->user()->id;
        $souscription->offre_id = $request->input('offre_id');
        $souscription->code = $code;
        $souscription->save();



        return redirect('/espace/client');
    }


}
