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

class HomeControlleur extends Controller
{
    //

    public function homepage(Request $request) {
        return view('home');
    }

    public function loginpage(Request $request) {
        return view('login');
    }

    public function registerpage(Request $request) {
        return view('register');
    }

    public function opportunitiespage(Request $request) {
        return view('opportunities');
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
    public function offres()
    {
        $offres = DB::table('offres')
                    // ->where('actif', 1)
                    // ->where('valide', 1)
                    ->orderBy('id', 'DESC')
                    ->limit(6)
                    ->get();
        
    }
    public function condition($id)
    {
        $condition = Condition::where('offre_id', $id)
            ->get();
        return view('condition')->with('condition', $condition);
    }

    public function savefichier(Request $request)
    {
        $nbr = Condition::where('offre_id', $request->input('offre_id'))
            ->count();
        for ($i=1; $i <= $nbr; $i++) { 
            $this->validate($request, [
                'file'.$i => 'required|mimes:pdf|max:50000'
            ]);
        }
        for ($i=1; $i <= $nbr; $i++) { 
            $fileNameWithExt = $request->file('file'.$i)->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('file'.$i)->getClientOriginalExtension();
        
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        
            $path = $request->file('file'.$i)->storeAs('public/file', $fileNameToStore);

            $fichier = new Fichier();
            $fichier->user_id = auth()->user()->id;
            $fichier->offre_id = $request->input('offre_id');
            $fichier->fichier = $fileNameToStore;
            $fichier->save();
        }

        return back()->with('status',"Les documents a été enregistré avec succès");
    }


}
