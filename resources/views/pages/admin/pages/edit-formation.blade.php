@extends('pages.admin.layouts.app')

@section('title', "MODIFIER")

@section('content')


    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar"
                               class="nav-link nav-link-lg
                                collapse-btn"> <i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                                                                                             src="{{ asset('/assets/admin/img/user.png') }}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">{{ session('loggedIn_user')->name }}</div>
                            <a href="profile.html" class="dropdown-item has-icon"> <i
                                    class="far
                                    fa-user"></i> Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Se déconnecter
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            {{-- side-bar starts --}}

            {{-- side-bar end --}}

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('admin.dashboard') }}"> <img alt="image"
                                                                       src="{{ asset('/assets/admin/img/logo.png') }}" class="header-logo" />
                            <span class="logo-name">{{ session('loggedIn_user')->name }}</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="book"></i><span>Formations</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.formations.add') }}">Ajouter une formation</a>
                                </li>
                                <li><a class="nav-link" href="{{ route('admin.formations') }}">Liste des formations</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="check-square"></i><span>Services</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Liste des services</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="bookmark"></i><span>Evenements</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">List des evenements</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="airplay"></i><span>Gallerie</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Liste des photos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="archive"></i><span>Contenus</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Slide</a>
                                </li>
                                <li><a class="nav-link" href="#">Profils membres</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">PARAMETRES</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="user"></i><span>Profil</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Mon profil</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="settings"></i><span>Paramètres</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Changer de mot de passe</a></li>
                                <li><a class="nav-link" href="{{ route('admin.logout') }}">Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

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
