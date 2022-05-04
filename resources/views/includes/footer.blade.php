    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="{{ asset('/assets/img/logo-light.png') }}" alt="Logo">
                            <p>
                                Leaders of tomorrow est une organisation sans but lucratif qui encourage les
                                jeunes congolais à relever les défis les plus pressants de leurs générations
                                (agriculture, énergie, santé etc.) à travers l’entreprenariat et la
                                technologie.
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Nos liens</h4>
                            <ul>
                                <li>
                                    <a href="{{ route('formations.list') }}">Formations</a>
                                </li>
                                <li>
                                    <a href="#">Evénements</a>
                                </li>
                                <li>
                                    <a href="#">Gallerie</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">Qui sommes-nous ?</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact.page') }}">Contactez-nous</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="{{ route('contact.page') }}">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item recent-post">
                            <h4>Formations Récentes</h4>
                            <ul>

                                @foreach($formations as $formation)
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/img/courses/g1.jpg') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">{{ $formation->title }}</a>
                                        <div class="meta-title">
                                            <span class="post-date">{{ date_format($formation->created_at,"d - m - Y") }}</span></a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright {{ date("Y") }}. All Rights Reserved by <a href="https://www.jeanlucmupasa.com">Jean-Luc Mupasa</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>
