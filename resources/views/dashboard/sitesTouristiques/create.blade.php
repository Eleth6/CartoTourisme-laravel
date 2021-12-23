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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Sites touristiques
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/sitesTouristiques/create" class="nav-link active">
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
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active">Créer un article "Sites touristiques"</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h1 class="mb-2">Créer un article "Sites touristiques"</h1>
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
                  <h3 class="card-title">Nouvel article</h3>
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

                <form id="nouveauSite" method="POST" action="/sitesTouristiques" enctype="multipart/form-data">@csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="titleSite">Nom du site touristique</label>
                      <input name="titleSite" type="text" class="form-control" id="titleSite" placeholder="Nom du site"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="mainImage">Choisir une image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="mainImage" type="file" class="custom-file-input" id="mainImage">
                          <label class="custom-file-label" for="mainImage">Importer une image</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Type de site touristique</label>
                      <select class="form-control" name="typeSite">
                        <option>Choisissez le type</option>
                        <option value="musees">Musées</option>
                        <option value="monuments">Monuments historiques</option>
                        <option value="plages">Plages</option>
                        <option value="parcs">Parcs et forêts</option>
                        <option value="lacs">Lacs, lagunes et rivières</option>
                        <option value="cites">Cités lacustres</option>
                        <option value="marches">Marchés et centres culturels</option>
                        <option value="autre">Autres</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="locationSite">Localisation du site</label>
                      <input name="locationSite" type="text" class="form-control" id="locationSite"
                        placeholder="Nom de la ville">
                    </div>
                    <div class="form-group">
                      <label for="summarySite">Brève description</label>
                      <textarea name="summarySite" class="form-control" id="summarySite" maxlength="220"
                        onkeyup="countChar(this)" placeholder="Texte de maximum 220 caractères" rows="2" required></textarea>
                      <div class="text-right" id="charNum"></div>
                    </div>
                    <div class="form-group">
                      <label for="horairesSite">Heures d'ouverture</label>
                      <textarea name="horairesSite" class="form-control" id="horairesSite" placeholder="Heures d'ouverture"
                        rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="adresseSite">Adresse exacte du site</label>
                      <textarea name="adresseSite" class="form-control" id="adresseSite" placeholder="Adresse"
                        rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="prixSite">Prix</label>
                      <textarea name="prixSite" class="form-control" id="prixSite" placeholder="Prix"
                        rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="dureeSite">Durée du tour</label>
                      <textarea name="dureeSite" class="form-control" id="dureeSite" placeholder="Durée du tour"
                        rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="email">Adresse Email</label>
                      <input name="email" type="email" class="form-control" id="email"
                        placeholder="Adresse email du site">
                    </div>
                    <div class="form-group">
                      <label for="phone">Numéro de téléphone</label>
                      <input name="phone" type="text" class="form-control" id="phone"
                        placeholder="Numéro de téléphone du site">
                    </div>
                    <div class="form-group">
                      <label for="poste">Boîte postale</label>
                      <input name="poste" type="text" class="form-control" id="poste"
                        placeholder="Boîte postale">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="latitude">Latitude</label>
                          <input name="latitude" type="text" class="form-control" id="latitude"
                            placeholder="Exemple : 6.741554">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="longitude">Longitude</label>
                          <input name="longitude" type="text" class="form-control" id="longitude"
                            placeholder="Exemple : 2.200832">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="textSite">Texte</label>
                      <textarea name="textSite" class="form-control" id="textSite" placeholder="Texte"
                        rows="8"></textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary mt-3">Publier</button>
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
    
    <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>
  <script>
    function countChar(val) {
      var len = val.value.length;
      if (len >= 220) {
        val.value = val.value.substring(0, 220);
      } else {
        $('#charNum').text(220 - len);
      }
    };
  </script>

@endsection