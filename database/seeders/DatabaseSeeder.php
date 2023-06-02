<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'nom' => 'Jone',
            'prenoms' => 'Doe',
            'email' => 'jone@a.com',
            'telephone' => '+2529652525',
            'code' => '525778799d9d',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'nom' => 'Alice',
            'prenoms' => 'Conne',
            'email' => 'conne@a.com',
            'telephone' => '+2552252525',
            'code' => '525776799d9d',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'nom' => 'Rose',
            'prenoms' => 'Blanche',
            'email' => 'rose@a.com',
            'telephone' => '+2525252795',
            'code' => '52577799d9d',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'nom' => 'Rose',
            'prenoms' => 'Noir',
            'email' => 'noir@a.com',
            'telephone' => '+2525542525',
            'code' => '52577799d9d',
            'password' => Hash::make('password'),
        ]);


        // DB::table('souscriptions')->insert([
        //     'user_id' => 1,
        //     'offre_id' => 1,
        //     'date_ajout' => '2023-05-15 17:31:21',
        //     'code' => '525dj77799d9d',
        // ]);
        // DB::table('souscriptions')->insert([
        //     'user_id' => 1,
        //     'offre_id' => 2,
        //     'date_ajout' => '2023-05-15 17:31:21',
        //     'code' => '525djf7799d9d',
        // ]);
        // DB::table('souscriptions')->insert([
        //     'user_id' => 1,
        //     'offre_id' => 3,
        //     'date_ajout' => '2023-05-15 17:31:21',
        //     'code' => '55djf77799d9d',
        // ]);
        // DB::table('souscriptions')->insert([
        //     'user_id' => 1,
        //     'offre_id' => 4,
        //     'date_ajout' => '2023-05-15 17:31:21',
        //     'code' => '57799d9d',
        // ]);


        DB::table('offres')->insert([
            'titre' => 'Poste disponible',
            'description' => 'coucou',
            'lieu' => 'Parakou',
            'pays' => 'Bénin',
            'deadline' => '2023-05-15',
            'poste' => 'Developpeur web React',
            'entreprise' => 'Faridev',
            'niveau' => 'Débutant',
            'logo' => 'logo.png',
            'user_id' => 1,
            'code' => '57799d9d',
        ]);
        DB::table('offres')->insert([
            'titre' => 'Poste à occuper',
            'description' => 'coucou',
            'lieu' => 'Cotonou',
            'pays' => 'Côte d\'ivoire',
            'deadline' => '2023-05-15',
            'poste' => 'Developpeur web Vue',
            'entreprise' => 'Faridev',
            'niveau' => 'Moyen',
            'logo' => 'logo.png',
            'user_id' => 1,
            'code' => '57799d9d',
        ]);
        DB::table('offres')->insert([
            'titre' => 'Recherche de graphiste',
            'description' => 'coucou',
            'lieu' => 'Come',
            'pays' => 'Sénégale',
            'deadline' => '2023-05-15',
            'poste' => 'Graphiste',
            'entreprise' => 'Faridev',
            'niveau' => 'Débutant',
            'logo' => 'logo.png',
            'user_id' => 1,
            'code' => '57799d9d',
        ]);
        DB::table('offres')->insert([
            'titre' => 'Poste immédiatement disponible',
            'description' => 'coucou',
            'lieu' => 'Agla',
            'pays' => 'Bénin',
            'deadline' => '2023-05-15',
            'poste' => 'Developpeur web senior',
            'entreprise' => 'Faridev',
            'niveau' => 'Sénior',
            'logo' => 'logo.png',
            'user_id' => 1,
            'code' => '57799d9d',
        ]);

    }
}
