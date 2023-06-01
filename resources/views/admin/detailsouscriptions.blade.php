@extends('admin.partial.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Détail souscription</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-body">
            <h4>Info</h4>
            <p>Nom : {{$candidat->nom}}</p>
            <p>Prénom: {{$candidat->prenoms}}</p>
            <p>Titre : {{$candidat->titre}}</p>
            <p>Poste : {{$candidat->poste}}</p>
            <p>Entreprise : {{$candidat->entreprise}}</p>
            <p>Date souscription : {{$candidat->created_at}}</p>
            <h4>Document</h4>
            <table class="table">
                <thead>
                  <tr>
                    <th>Nom</th>
                    
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($fichier as $item)
                  <tr>
                      
                      <td>{{$item->nom}}</td>
                      <td>
                        <button type="button" class="btn btn-primary">
                            <span class="tf-icons bx bx-download"></span>&nbsp; Télécharger
                          </button>
                      </td>
                      
                     
                     
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
          </div>
    </div>

    <!--/ Basic Bootstrap Table -->

 
    <!--/ Responsive Table -->
  </div>
    
@endsection
