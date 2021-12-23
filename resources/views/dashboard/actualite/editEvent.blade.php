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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
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
                  <a href="/dashboard/editEvent" class="nav-link active">
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
        <div class="row mb-2">
          <div class="col-sm-6 mt-5 text-nowrap">
            <h1>Editer ou supprimer un article "Actualité et événement"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Accueil</a></li>
              <li class="breadcrumb-item active">Editer ou supprimer un article "Actualité et événement"</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tous les articles "Actualité et événements"</h3>

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
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th class="text-center px-5">Action</th>
                      <th class="text-center pr-4 pl-0">ID</th>
                      <th class="text-center pr-4">Titre de l'article</th>
                      <th class="text-center pr-5">Date de publication</th>
                      <th class="text-center">Résumé</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td class="align-middle text-center px-5">    
                            <form action="/actualite/{{ $post->slug }}" method="POST" class="inline-block">
                              @csrf 
                              @method('delete')
                              <a href="/actualite/{{ $post->slug }}/edit" class="btn btn-info mr-3" role="button" data-bs-toggle="button">Editer</a>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                Supprimer</button>
                              <!-- Modal -->
                              <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Supprimer l'article</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Etes-vous sûr de vouloir supprimer l'article?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                      <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form> 
                        </td>
                        <td class="align-middle text-center pr-4  pl-0">{{ $post->id }}</td>
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection