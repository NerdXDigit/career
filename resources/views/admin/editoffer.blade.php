@extends('admin.partial.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Modifier une offre</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Modifier une offre</h5>
          </div>
          <div class="card-body">
            @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{Session::get('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                  
              @endif
            <form action="/espace/admin/updateoffer" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$offre->id}}">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Titre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="titre" id="basic-default-name" placeholder="" value="{{$offre->titre}}">
                  @if ($errors->has('titre'))
                    <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('titre')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Lieu</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="lieu" id="basic-default-company" placeholder="" value="{{$offre->lieu}}">
                  @if ($errors->has('lieu'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('lieu')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Entreprise</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="entreprise" id="basic-default-company" placeholder="" value="{{$offre->entreprise}}">
                  @if ($errors->has('entreprise'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('entreprise')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Poste</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="poste" name="poste" id="basic-default-company" placeholder="" value="{{$offre->poste}}">
                  @if ($errors->has('poste'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('poste')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Deadline</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="deadline" id="basic-default-company" placeholder="" value="{{$offre->deadline}}">
                  @if ($errors->has('deadline'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('deadline')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="logo" id="basic-default-company" placeholder="">
                  @if ($errors->has('logo'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('logo')}} </div> 
                  @endif
                </div>
              </div>


              
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                <div class="col-sm-10">
                  <textarea id="basic-default-message" class="form-control" name="description" placeholder="" aria-label="" aria-describedby="basic-icon-default-message2">{{$offre->description}}</textarea>
                  @if ($errors->has('description'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('description')}} </div> 
                  @endif
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
