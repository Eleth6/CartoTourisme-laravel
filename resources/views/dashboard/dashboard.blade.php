@extends('dashboard._layouts.layoutdash')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tableau de bord</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active">Tableau de bord</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <!-- ./col -->
            <div class="col-lg-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Taux de rebond</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Visiteurs uniques</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les 5 derniers messages reçus</h3>
                <h3 class="card-title"><a class="ml-3" href="/dashboard/messages">Voir tout</a></h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center pr-3">Date de réception</th>
                      <th class="text-center pr-5">Nom complet</th>
                      <th class="text-center pr-5">Adresse email</th>
                      <th class="text-center">Objet du message</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($contacts as $contact)
                      <tr>
                          <td class="align-middle text-center pr-3">{{ \Carbon\Carbon::parse($contact->created_at)->format('d/m/Y') }}</td>
                          <td class="align-middle text-center pr-5">{{ $contact->name }}</td>
                          <td class="align-middle text-center pr-5">{{ $contact->email }}</td>
                          <td class="align-middle text-center text-wrap">{{ $contact->object }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          
          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les 5 derniers actualités et événements publiés</h3>
                <h3 class="card-title"><a class="ml-3" href="/dashboard/editEvent">Voir tout</a></h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center pr-4">Titre de l'article</th>
                      <th class="text-center pr-5">Date de publication</th>
                      <th class="text-center">Brève description</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td class="align-middle text-center pr-4">{{ $post->titleArticle}}</td>
                        <td class="align-middle text-center pr-5">{{ \Carbon\Carbon::parse($post->dateArticle)->format('d/m/Y') }}</td>
                        <td class="align-middle text-wrap">{{ $post->summaryArticle }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les 5 derniers sites touristiques publiés</h3>
                <h3 class="card-title"><a class="ml-3" href="/dashboard/editSite">Voir tout</a></h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center pr-3">Nom du site</th>
                      <th class="text-center pr-5">Localisation</th>
                      <th class="text-center">Brève description</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($sites as $site)
                      <tr>
                          <td class="align-middle text-center pr-3">{{ $site->titleSite}}</td>
                          <td class="align-middle text-center pr-5">{{ $site->locationSite }}</td>
                          <td class="align-middle text-wrap">{{ $site->summarySite }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les 5 derniers hôtels et auberges publiés</h3>
                <h3 class="card-title"><a class="ml-3" href="/dashboard/editHotel">Voir tout</a></h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center pr-3">Nom de l'hôtel</th>
                      <th class="text-center pr-5">Localisation</th>
                      <th class="text-center">Brève description</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($hotels as $hotel)
                      <tr>
                          <td class="align-middle text-center pr-3">{{ $hotel->nameHotel }}</td>
                          <td class="align-middle text-center pr-5">{{ $hotel->adresseHotel }}</td>
                          <td class="align-middle text-wrap">{{ $hotel->summaryHotel }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les 5 derniers bars et restaurants publiés</h3>
                <h3 class="card-title"><a class="ml-3" href="/dashboard/editRestaurant">Voir tout</a></h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center pr-3">Nom du restaurant</th>
                      <th class="text-center pr-5">Localisation</th>
                      <th class="text-center">Brève description</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($restaurants as $restaurant)
                      <tr>
                          <td class="align-middle text-center pr-3">{{ $restaurant->nameRest}}</td>
                          <td class="align-middle text-center pr-5">{{ $restaurant->adresseRest }}</td>
                          <td class="align-middle text-wrap">{{ $restaurant->summaryRest }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


@endsection