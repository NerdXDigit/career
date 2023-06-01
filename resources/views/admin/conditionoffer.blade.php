@extends('admin.partial.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Condition de l'offre</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Condition de l'offre</h5>
      
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
              <th>nom</th>
              <th>description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($condition as $item)
            <tr>
                
                <td>{{$item->nom}}</td>
                <td>{{$item->description}}</td>
                
                <td>
                  <a class="dropdown-item" href="{{url('/espace/admin/editcondition/'.$item->id)}}">
                    <button type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-edit-alt"></span>&nbsp; Edit
                      </button>
                </a>
                    
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
