<div class="collapse navbar-collapse" id="navbar-menu">
    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
        <li>
            <a href="{{ route('home') }}" class="dropdown-toggle {{ Route::current()->getName() === 'home' ? 'active' : '' }}">Accueil</a>
        </li>
        <li>
            <a href="{{ route('formations.list') }}" class="{{ Route::current()->getName() === 'formations.list' ? 'active' : '' }}">Nos formations</a>
        </li>
        <li class="">
            <a href="{{ route('about') }}" class="{{ Route::current()->getName() === 'about' ? 'active' : '' }}">Qui sommes-nous</a>
        </li>
         <li>
            <a href="{{ route('members.form') }}" class="{{ Route::current()->getName() === 'members.form' ? 'active' : '' }}">Devenez membre</a>
        </li>
        <li>
            <a href="{{ route('contact.page') }}" class="{{ Route::current()->getName() === 'contact.page' ? 'active' : '' }}">Contactez-nous</a>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->
