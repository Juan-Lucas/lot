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
