@extends('offreur.partial.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Mes postulants</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Mes postulants</h5>
      
      <div class="table-responsive text-nowrap">
        @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Titre</th>
            <th>Poste</th>
            <th>Entreprise</th>
            <th>Date de souscription</th>
            <th>Status</th>
            <th>Actions</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($offres as $offre)
                @foreach ($souscriptions as $souscription)
                  @if ($offre->id==$souscription->offre_id)
                    @foreach ($users as $user)
                      @if ($user->id==$souscription->user_id)
                      <tr>
                
                        <td>{{$user->nom}}</td>
                        <td>{{$user->prenoms}}</td>
                        <td>{{$offre->titre}}</td>
                        <td>{{$offre->poste}}</td>
                        <td>{{$offre->entreprise}}</td>
                        <td>{{$souscription->date_ajout}}</td>
                        <td>
                            
                            @if ($souscription->valide_souscription == 0)
                                <span class="badge bg-label-warning me-1">En attente</span>
                            @endif
                            @if ($souscription->valide_souscription == 1)
                                <span class="badge bg-label-success me-1">Validé</span>   
                            @endif
                            @if ($souscription->valide_souscription == 2)
                            <span class="badge bg-label-danger me-1">Rejeté</span>      
                            @endif
                            
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                @if ($souscription->valide_souscription == 0)
                                  <a class="dropdown-item" href="{{url('/espace/offreur/validersouscription/'.$souscription->id)}}"><i class="bx bx-check me-1"></i> Valider</a>
                                  <a class="dropdown-item" href="{{url('/espace/offreur/rejetersouscription/'.$souscription->id)}}"><i class="bx bx-trash me-1"></i> Rejeter</a>
                                </a>
                                @endif
                                @if ($souscription->valide_souscription == 1)
                                    <span class="badge bg-label-success me-1">Validé</span>   
                                @endif
                                @if ($souscription->valide_souscription == 2)
                                    <span class="badge bg-label-danger me-1">Rejeté</span>   
                                @endif
                             
        
                            </div>
                          </div>
                        </td>
                        <td>
                          <a class="btn btn-info" href="{{url('/espace/offreur/detailsouscription/'.$souscription->id)}}"><i class="bx bx-eye-circle me-1"></i> Voir détail</a>
                        </td>
                      </tr>
                      @endif
                    @endforeach
                  @endif
                  
                @endforeach
            @endforeach
          
        </tbody>
      </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

 
    <!--/ Responsive Table -->
  </div>
    
@endsection
