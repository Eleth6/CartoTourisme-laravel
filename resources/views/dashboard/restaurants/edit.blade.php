@extends('dashboard._layouts.layout')

@section('content')

    <!-- Sidebar Menu -->
    <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Tableau de bord
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Actualité - événements
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/actualite/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un article</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/dashboard/editEvent" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editer ou supprimer un article</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Sites touristiques
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/sitesTouristiques/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un article</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/dashboard/editSite" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editer ou supprimer un article</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Hôtels et auberges
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/hotels/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un article</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/dashboard/editHotel" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editer ou supprimer un article</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Restaurants
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/restaurants/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un article</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/dashboard/editRestaurant" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editer ou supprimer un article</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/dashboard/messages" class="nav-link">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Messages
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Editer un article "Bars et restaurants"</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h1 class="mb-2 mt-3">Editer un article "Bars et restaurants"</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editer un article</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @if($errors->any())
                  <div class="m-auto">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li class="alert alert-danger mt-5 mb-0" role="alert">
                          {{ $error }}
                        </li>
                      @endforeach
                    </ul>
                  </div>
                @endif          
                    
                <form id="nouveauRest" method="POST" action="/restaurants/{{ $restaurant->slug }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nameRest">Nom du restaurant</label>
                      <input name="nameRest" type="text" class="form-control" id="nameRest" value="{{ $restaurant->nameRest }}"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="mainImage">Choisir une image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="mainImage" type="file" class="custom-file-input" id="mainImage">
                          <label class="custom-file-label" for="mainImage">{{ $restaurant->mainImage }}</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="typeRest" class="d-block mb-3">Type de restaurant : </label>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="cuisineLocale" value="Cuisine locale">
                          <label for="cuisineLocale" class="custom-control-label">Cuisine locale</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="indien" value="Indien">
                          <label for="indien" class="custom-control-label">Indien</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="japonais" value="Japonais">
                          <label for="japonais" class="custom-control-label">Japonais</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="chinois" value="Chinois">
                          <label for="chinois" class="custom-control-label">Chinois</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="thai" value="Thaï">
                          <label for="thai" class="custom-control-label">Thaï</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="italien" value="Italien">
                          <label for="italien" class="custom-control-label">Italien</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="libanais" value="Libanais">
                          <label for="libanais" class="custom-control-label">Libanais</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="francais" value="Français">
                          <label for="francais" class="custom-control-label">Français</label>
                        </div>
                        <br>
                        <br>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="africain" value="Africain">
                          <label for="africain" class="custom-control-label">Africain</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="asiatique" value="Asiatique">
                          <label for="asiatique" class="custom-control-label">Asiatique</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="europen" value="Européen">
                          <label for="europen" class="custom-control-label">Européen</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                          <input class="custom-control-input" type="checkbox" id="ameriqueNord" value="Américain du Nord">
                          <label for="ameriqueNord" class="custom-control-label">Américain du Nord</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline">
                          <input class="custom-control-input" type="checkbox" id="ameriqueSud" value="Américain du Sud">
                          <label for="ameriqueSud" class="custom-control-label">Américain du Sud</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline">
                          <input class="custom-control-input" type="checkbox" id="autre" value="Autre">
                          <label for="autre" class="custom-control-label">Autre</label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="adresseRest">Adresse du restaurant</label>
                      <input name="adresseRest" type="text" class="form-control" id="adresseRest"
                        value="{{ $restaurant->adresseRest }}">
                    </div>
                    <div class="form-group">
                      <label for="summaryRest">Brève description</label>
                      <textarea name="summaryRest" class="form-control" id="summaryRest" maxlength="220"
                        onkeyup="countChar(this)" rows="2" required>{{ $restaurant->summaryRest }}</textarea>
                      <div class="text-right" id="charNum"></div>
                    </div>
                    <div class="form-group">
                      <label for="horairesRest">Heures d'ouverture</label>
                      <textarea name="horairesRest" class="form-control" id="horairesRest"
                        rows="3" required>{{ $restaurant->horairesRest }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="prixRest">Prix</label>
                      <textarea name="prixRest" class="form-control" id="prixRest"
                        rows="3" required>{{ $restaurant->prixRest }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="siteInternet">Site internet</label>
                      <input name="siteInternet" type="text" class="form-control" id="siteInternet"
                        value="{{ $restaurant->siteInternet }}">
                    </div>
                    <div class="form-group">
                      <label for="phone">Numéro de téléphone</label>
                      <input name="phone" type="text" class="form-control" id="phone"
                      value="{{ $restaurant->phone }}">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="latitude">Latitude</label>
                          <input name="latitude" type="text" class="form-control" id="latitude"
                          value="{{ $restaurant->latitude }}">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="longitude">Longitude</label>
                          <input name="longitude" type="text" class="form-control" id="longitude"
                          value="{{ $restaurant->longitude }}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="textRest">Texte</label>
                      <textarea name="textRest" class="form-control" id="textRest"
                        rows="8">{{ $restaurant->textRest }}</textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary mt-3">Editer</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
@endsection