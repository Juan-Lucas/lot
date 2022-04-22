<header class="yoo-header yoo-style1 yoo-sticky-menu">
    <div class="yoo-main-header">
        <div class="yoo-main-header-in">
            <div class="yoo-main-header-left">
                <a
                    href="{{ route('admin.home') }}"
                    class="yoo-logo-link yoo-light-logo"
                    ><img src="{{ asset('/assets/admin/img/logo.svg') }}" alt="logo-light"
                /></a>
                <!-- For Site Title -->
                <!-- <span class="yoo-site-title">
    <a href="index.html">Logo</a>
  </span> -->
            </div>
            <div class="yoo-main-header-right">
                <div class="yoo-nav-wrap yoo-fade-up">
                    <div class="yoo-nav-toggle">
                        <ion-icon name="ellipsis-vertical"></ion-icon>
                    </div>
                </div>
                <!-- .yoo-nav-wrap -->
                <ul class="yoo-ex-nav yoo-style1 yoo-flex yoo-mp0">

                    <li>
                        <div
                            class="yoo-toggle-body yoo-app-area yoo-style1"
                        >
                            <span
                                class="yoo-toggle-btn yoo-ex-nav-btn yoo-app-btn"
                            >
                                <ion-icon name="apps"></ion-icon>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div
                            class="yoo-toggle-body yoo-profile-nav yoo-style1"
                        >
                            <div
                                class="yoo-toggle-btn yoo-profile-nav-btn"
                            >
                                <div class="yoo-profile-nav-text">
                                    <span>Welcome,</span>
                                    <h4>Thom Yorke</h4>
                                </div>
                                <div class="yoo-profile-nav-img">
                                    <img
                                        src="{{ asset('/assets/admin/img/profile-pic.png') }}"
                                        alt="profile"
                                    />
                                </div>
                            </div>
                            <ul class="yoo-dropdown yoo-style1">
                                <li>
                                    <a href="#"
                                        ><ion-icon
                                            name="person-circle"
                                        ></ion-icon
                                        >Mon Profil</a
                                    >
                                </li>

                                <li class="yoo-dropdown-cta">
                                    <a href="#">Se déconnecter</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- .yoo-header -->
