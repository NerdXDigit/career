@extends('offreur.partial.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Mes Offres</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Mes Offres</h5>
      
      <div class="table-responsive text-nowrap">
        @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <table class="table">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Poste</th>
              <th>Lieu</th>
              <th>Entreprise</th>
              <th>Deadline</th>
              <th>Validation</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($offres as $item)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->titre}}</strong></td>
                <td>{{$item->poste}}</td>
                <td>{{$item->lieu}}</td>
                <td>{{$item->entreprise}}</td>
                <td>{{$item->deadline}}</td>
                <td>
                    
                    @if ($item->valide == 0)
                        <span class="badge bg-label-warning me-1">En attente</span>
                    @endif
                    @if ($item->valide == 1)
                        <span class="badge bg-label-success me-1">Validé</span>   
                    @endif
                    
                </td>
                <td>
                    
                  @if ($item->actif == 0)
                      <span class="badge bg-label-danger me-1">Terminé</span>
                  @endif
                  @if ($item->actif == 1)
                      <span class="badge bg-label-success me-1">En cours</span>   
                  @endif
                  
              </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" style="">
                      <a class="dropdown-item" href="{{url('/espace/offreur/addconditionoffer/'.$item->id)}}"><i class="bx bx-add-to-queue me-1"></i>Ajouter condition</a>
                      <a class="dropdown-item" href="{{url('/espace/offreur/conditionoffer/'.$item->id)}}"><i class="bx bx-eye me-1"></i>Voir condition</a>
                      <a class="dropdown-item" href="{{url('/espace/offreur/editoffer/'.$item->id)}}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                      <a class="dropdown-item" href="{{url('/espace/offreur/stopoffer/'.$item->id)}}"><i class="bx bx-trash me-1"></i> Arrêter</a>
                    </div>
                  </div>
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
