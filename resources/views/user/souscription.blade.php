@extends('user.partial.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Mes Souscriptions</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Mes Souscriptions</h5>
      <div class="table-responsive text-nowrap">
        <table class="table" id="myTable">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Poste</th>
              <th>Entreprise</th>
              <th>Status</th>
              {{-- <th>Actions</th> --}}
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($souscriptions as $item)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->titre}}</strong></td>
                <td>{{$item->poste}}</td>
                <td>{{$item->entreprise}}</td>
                <td>
                    
                    @if ($item->valide_souscription == 0)
                        <span class="badge bg-label-warning me-1">En attente</span>
                    @endif
                    @if ($item->valide_souscription == 1)
                        <span class="badge bg-label-success me-1">Validé</span>   
                    @endif
                    @if ($item->valide_souscription == 2)
                        <span class="badge bg-label-danger me-1">Rejeté</span>   
                    @endif
                    
                </td>
                {{-- <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" style="">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td> --}}
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
