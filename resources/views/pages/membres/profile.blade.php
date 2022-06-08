@extends('layouts.base')


@section('content')


    {{--    <!-- Start Breadcrumb--}}
    {{--                                            ============================================= -->--}}
    {{--    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"--}}
    {{--         style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <h1>Mon profil</h1>--}}
    {{--                    <ul class="breadcrumb">--}}
    {{--                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>--}}
    {{--                        <li><a href="{{ route('members.profile') }}">/</a></li>--}}
    {{--                        <li class="active">Mon profil</li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- End Breadcrumb -->--}}



    <!-- Start Students Profiel
    ============================================= -->
    <div class="students-profiel adviros-details-area default-padding">
        <div class="container">
            @if(session()->has('updated'))
                <div class="alert alert-success">{{ session('updated') }}</div>
            @elseif(session()->has('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @elseif(session('changed'))
                <div class="alert alert-success">{{ session('changed') }}</div>
            @endif
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="{{ asset('storage/'.session('member_loggedIn')->photo) }}" alt="Photo de profil">
                </div>
                <div class="col-md-7 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                    Mes formations
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Editer Profil
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <p>{{ session('member_loggedIn')->bio }}</p>
                                    <ul>
                                        <li>
                                            Nom complet <span>{{ session('member_loggedIn')->nomcomplet }}</span>
                                        </li>
                                        <li>
                                            Contact <span>{{ session('member_loggedIn')->phone }}</span>
                                        </li>
                                        <li>
                                            Email <span>{{ session('member_loggedIn')->email }}</span>
                                        </li>
                                        <li>
                                            Profession <span>{{ session('member_loggedIn')->profession }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="info title">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Titre</th>
                                                <th>Description</th>
                                                <th>Duree</th>
                                                <th>Categorie</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @forelse($formations as $formation)
                                            <tr>
                                                <td><a href="{{ route('formations.show', $formation) }}">{{ $formation->id }}</a></td>
                                                <td>{{ $formation->title }}</td>
                                                <td>{{ substr($formation->description,0,100) }}</td>
                                                <td>{{ $formation->duration }}</td>
                                                <td>{{ $formation->category_formation->name }}</td>
                                            </tr>
                                            @empty
                                                Not data yet.
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="info title">
                                    <div class="row">
                                        <form method="post" action="{{ route('members.profile.update') }}" enctype="multipart/form-data" >

                                            @method('put')

                                            @csrf

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nom complet</label>
                                                    <input class="form-control" name="nomcomplet" value="{{ session('member_loggedIn')->nomcomplet }}" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input class="form-control" name="phone" value="{{ session('member_loggedIn')->phone }}" type="tel">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <input class="form-control" name="email" value="{{ session('member_loggedIn')->email }}" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Profession</label>
                                                    <input class="form-control" name="profession" value="{{ session('member_loggedIn')->profession }}" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input class="form-control" name="age" value="{{ session('member_loggedIn')->age }}" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sexe</label>
                                                    <select class="form-control" name="sexe" id="sexe" style="height: 50px">
                                                        <option value="">---------- Sélectionner votre genre ----------</option>
                                                        <option {{ session('member_loggedIn')->sexe === 'Homme' ? 'selected' : '' }} value="Homme">Homme</option>
                                                        <option {{ session('member_loggedIn')->sexe === 'Femme' ? 'selected' : '' }} value="Femme">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="username">Nom d'utilisateur</label>
                                                        <input class="form-control" name="username" value="{{ session('member_loggedIn')->user_account->name }}" id="username" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="photo">Photo</label>
                                                        <input class="form-control" name="photo"  id="photo" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <label>Biographie</label>
                                                    <textarea name="bio" class="form-control">{{ session('member_loggedIn')->bio }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit">
                                                    Modifier
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="update-pass">
                                        <h4>Modifier votre mot de passe</h4>
                                        <div class="row">
                                            <form method="post" action="{{ route('members.profile.update.password') }}">

                                                @method('put')

                                                @csrf

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nouveau mot de passe</label>
                                                        <input class="form-control" name="password" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirmer nouveau mot de passe</label>
                                                        <input class="form-control" name="confirm_password" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Ancien mot de passe</label>
                                                        <input class="form-control" name="old_password" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit">
                                                        Modifier
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Students Profile -->



@endsection