@extends('pages.admin.layouts.app')

@section('title', "MODIFIER")

@section('content')

    @include('pages.admin.includes.nav-bar')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>MODIFICATION D'UNE FORMATION</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.formations.update', $formation) }}" enctype="multipart/form-data">

                                @method('put')

                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Titre</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <input id="title" type="text"
                                                   class="form-control" name="title" autofocus value="{{ $formation->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Durée</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                            </div>
                                            <input type="number" name="duration"
                                                   class="form-control" value="{{ $formation->duration }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Catégorie formation</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-check-square"></i>
                                                </div>
                                            </div>
                                            <select class="form-control" name="category">
                                                <option>----------------------- Sélectionner -----------------------</option>
                                                @foreach ($categories as $category)
                                                    <option {{ $formation->category_formation->id === $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Photo</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-file-image"></i>
                                                </div>
                                            </div>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Description</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-align-left"></i>
                                                </div>
                                            </div>
                                            <input name="description" type="text" name="description" class="form-control" value="{{ $formation->description }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        MODIFIER FORMATION
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <footer class="main-footer">
            <div class="footer-left">
                <a href="templateshub.net">LEADERSOF - TOMORROW</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
    </div>
    </div>



    <footer class="main-footer">
        <div class="footer-left">
            <a href="templateshub.net">LEADERSOF - TOMORROW</a></a>
        </div>
        <div class="footer-right">
        </div>
    </footer>
    </div>
    </div>

@endsection
