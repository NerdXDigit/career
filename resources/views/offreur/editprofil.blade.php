@extends('offreur.partial.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Modifier mon profil</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Modifier mon profil</h5>
          </div>
          <div class="card-body">
            @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{Session::get('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                  
              @endif
            <form action="/espace/offreur/updateprofil" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="offre_id" value="{{request('id')}}"> --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Nom</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" id="basic-default-name" placeholder="" value="{{$user->nom}}">
                    @if ($errors->has('nom'))
                        <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('nom')}} </div> 
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Prénom</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="prenom" id="basic-default-name" placeholder="" value="{{$user->prenoms}}">
                    @if ($errors->has('prenom'))
                        <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('prenom')}} </div> 
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="basic-default-name" placeholder="" value="{{$user->email}}">
                    @if ($errors->has('email'))
                        <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('email')}} </div> 
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Telephone</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" id="basic-default-name" placeholder="" value="{{$user->telephone}}">
                    @if ($errors->has('phone'))
                        <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('phone')}} </div> 
                    @endif
                    </div>
                </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
