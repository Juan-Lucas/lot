<div class="collapse navbar-collapse" id="navbar-menu">
    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
        <li>
            <a href="{{ route('home') }}" class="dropdown-toggle active">Accueil</a>
        </li>
        {{-- <li>
            <a href="{{ route('services.list') }}" class="active">Services</a>
        </li> --}}
        <li>
            <a href="{{ route('formations.list') }}" class="active">Nos formations</a>
        </li>
        <li class="">
            <a href="{{ route('about') }}" class="active">Qui sommes-nous</a>
        </li>
        {{-- <li>
            <a href="#" class="active">Événements</a>
        </li>
        <li class="">
            <a href="#">Blog</a>
        </li> --}}
        <li>
            <a href="{{ route('contact.page') }}">Contactez-nous</a>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->
