<div class="side">
    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
    <div class="widget">
        <h4 class="title">Profil Membre</h4>
        <div class="profile-thumb">
            <img src="{{ session('member_loggedIn') == null ? '': asset('storage/'.session('member_loggedIn')->photo) }}" alt="Profile">
        </div>
        <ul>
            @if(!session()->has('member_loggedIn'))
            @else
                <li>{{ strtoupper(session('member_loggedIn')->user_account->name) }} <i class="fa fa-check-circle" aria-hidden="true"></i></li>
                <li>{{ session('member_loggedIn')->user_account->email }}</li>
            @endif
            <ul class="title"></ul>
            <li><a href="{{ route('members.profile') }}">Mon profil</a></li>
            <li><a href="{{ route('members.logout') }}">Déconnexion</a></li>
        </ul>
    </div>
    <div class="widget social">
        <h4 class="title">Suivez-nous sur</h4>
        <ul class="link">
            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
        </ul>
    </div>
</div>
