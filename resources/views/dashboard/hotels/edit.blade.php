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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
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
                  <a href="/dashboard/editHotel" class="nav-link active">
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
                  Bars et restaurants
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
                  <a href="/dashboard/editRestaurant" class="nav-link">
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
                <li class="breadcrumb-item active">Editer un article "Hôtels et auberges"</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h1 class="mb-2 mt-3">Editer un article "Hôtels et auberges"</h1>
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
                    
                <form id="nouveauHotel" method="POST" action="/hotels/{{ $hotel->slug }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nameHotel">Nom de l'hôtel</label>
                      <input name="nameHotel" type="text" class="form-control" id="nameHotel" value="{{ $hotel->nameHotel }}"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="mainImage">Choisir une image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="mainImage" type="file" class="custom-file-input" id="mainImage">
                          <label class="custom-file-label" for="mainImage">{{ $hotel->mainImage }}</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="adresseHotel">Adresse de l'hôtel</label>
                      <input name="adresseHotel" type="text" class="form-control" id="adresseHotel"
                      value="{{ $hotel->adresseHotel }}">
                    </div>
                    <div class="form-group">
                      <label for="summaryHotel">Brève description de l'hôtel</label>
                      <textarea name="summaryHotel" class="form-control" id="summaryHotel" maxlength="220"
                        onkeyup="countChar(this)" rows="2" required>{{ $hotel->summaryHotel }}</textarea>
                      <div class="text-right" id="charNum"></div>
                    </div>
                    <div class="form-group">
                      <label for="prixHotel">Prix d'une chambre</label>
                      <textarea name="prixHotel" class="form-control" id="prixHotel" rows="3" required>
                        {{ $hotel->prixHotel }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="email">Adresse Email ou site internet de l'hôtel</label>
                      <input name="email" type="text" class="form-control" id="email"
                      value="{{ $hotel->email }}">
                    </div>
                    <div class="form-group">
                      <label for="phone">Numéro de téléphone</label>
                      <input name="phone" type="text" class="form-control" id="phone"
                      value="{{ $hotel->phone }}">
                    </div>
                    <div class="form-group">
                      <label for="poste">Boîte postale</label>
                      <input name="poste" type="text" class="form-control" id="poste"
                      value="{{ $hotel->poste }}">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="latitude">Latitude</label>
                          <input name="latitude" type="text" class="form-control" id="latitude"
                          value="{{ $hotel->latitude }}">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="longitude">Longitude</label>
                          <input name="longitude" type="text" class="form-control" id="longitude"
                          value="{{ $hotel->longitude }}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="d-inline mr-3">Cuisine ou kitchenette : </label>
                        <div class="custom-control custom-radio d-inline mr-3">
                          <input class="custom-control-input" type="radio" id="oui" name="oui">
                          <label for="oui" class="custom-control-label">Oui</label>
                        </div>
                        <div class="custom-control custom-radio d-inline">
                          <input class="custom-control-input" type="radio" id="non" name="non">
                          <label for="non" class="custom-control-label">Non</label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="textHotel">Texte</label>
                      <textarea name="textHotel" class="form-control" id="textHotel"
                        rows="8">{{ $site->textSite }}</textarea>
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