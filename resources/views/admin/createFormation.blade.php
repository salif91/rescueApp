@extends('layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Rédiger une Formation
                        </h3>
                    </div>
                    <form method="POST" action="{{ route('admin.formation.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control form-control-border" id="titre"
                                    name="titre" placeholder="Titre">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control form-control-border" id="image"
                                    name="image">
                            </div>

                            <div class="form-group">
                                <label for="video">Vidéo</label>
                                <input type="file" class="form-control form-control-border" id="video"
                                    name="video">
                            </div>

                            <div class="form-group">
                                <label for="contenu">Contenu</label>
                                <textarea class="form-control" width="100%" name="contenu" id="contenu"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
