@extends('admin.partial.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Listes demandeurs</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Listes demandeurs</h5>
      
      <div class="table-responsive text-nowrap">
        @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <table class="table"  id="myTable">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prénoms</th>
              <th>Email</th>
              <th>Telephone</th>
              <th>Validation</th>
              <th>Actif</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($demandeurs as $item)
            <tr>
                <td>{{$item->nom}}</td>
                <td>{{$item->prenoms}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->telephone}}</td>
                
                <td>
                  @if ($item->valide == 0)
                      <span class="badge bg-label-danger me-1">Non validé</span>
                  @endif
                  @if ($item->valide == 1)
                      <span class="badge bg-label-success me-1">Validé</span>   
                  @endif
              </td>
              <td>
                    
                @if ($item->actif == 0)
                    <span class="badge bg-label-danger me-1">Désactivé</span>
                @endif
                @if ($item->actif == 1)
                    <span class="badge bg-label-success me-1">Actif</span>   
                @endif
                
            </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" style="">
                        @if ($item->actif == 0)
                        <span class="badge bg-label-danger me-1">Désactivé</span>
                        @endif
                        @if ($item->actif == 1)
                        <a class="dropdown-item" href="{{url('/espace/admin/desactiver/'.$item->id)}}"><i class="bx bx-dislike me-1"></i> Désactiver</a>

                        @endif
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
