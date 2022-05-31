@extends('layouts.base')


@section('content')


    <!-- Start Breadcrumb
                                            ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
         style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mon profil</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>
                        <li><a href="{{ route('members.profile') }}">/</a></li>
                        <li class="active">Mon profil</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->



    <!-- Start Students Profiel
    ============================================= -->
    <div class="students-profiel adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="assets/img/team/6.jpg" alt="Thumb">
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
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Edit Profile
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting. earnestly advantage estimable extensive. Five settle education him departure any arranging one prevailed. Their end whole migh
                                    </p>
                                    <p>
                                        Affixed civilly moments promise explain fertile in. Assurance advantage belonging happiness departure so of. Now improving and one sincerity intention allowance commanded not. Oh an am frankness be necessary earnestly advantage estimable extensive. Five settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                    </p>
                                    <ul>
                                        <li>
                                            Contact <span>+123 456 7890</span>
                                        </li>
                                        <li>
                                            Email <span>info@teacherdomain.com</span>
                                        </li>
                                        <li>
                                            Address <span>California, TX 70240 </span>
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
                                                <th>Order</th>
                                                <th>Title</th>
                                                <th>Purchase Date</th>
                                                <th>Price</th>
                                                <th>Access</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>01.</td>
                                                <td><a href="#">Basic Web Development</a></td>
                                                <td>12 Nov, 2018</td>
                                                <td>$23.00</td>
                                                <td><a href="#">Preview</a></td>
                                            </tr>
                                            <tr>
                                                <td>02.</td>
                                                <td><a href="#">Software Engineering</a></td>
                                                <td>14 Jan, 2019</td>
                                                <td>$55.00</td>
                                                <td><a href="#">Preview</a></td>
                                            </tr>
                                            <tr>
                                                <td>03.</td>
                                                <td><a href="#">Introduction of machine</a></td>
                                                <td>18 Mar, 2019</td>
                                                <td>$44.00</td>
                                                <td><a href="#">Preview</a></td>
                                            </tr>
                                            <tr>
                                                <td>04.</td>
                                                <td><a href="#">Hidden potential</a></td>
                                                <td>20 Feb, 2018</td>
                                                <td>$54.00</td>
                                                <td><a href="#">Preview</a></td>
                                            </tr>
                                            <tr>
                                                <td>05.</td>
                                                <td><a href="#">Introduction of PHP</a></td>
                                                <td>27 Mar, 2019</td>
                                                <td>$32.00</td>
                                                <td><a href="#">Preview</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="info title">
                                    <p>
                                        Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. Expect relied do we genius is. On as around spirit of hearts genius. Is raptures daughter branched laughter peculiar in settling.
                                    </p>
                                    <div class="row">
                                        <form action="#" class="contact-form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Phone" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <textarea class="form-control" placeholder="About Yourself"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="update-pass">
                                        <h4>Change Password</h4>
                                        <p>
                                            Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. Expect relied do we genius is. On as around spirit of hearts genius. Is raptures daughter branched laughter peculiar in settling.
                                        </p>
                                        <div class="row">
                                            <form action="#" class="contact-form">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Chose Password" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Retype Password" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Old Password" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit">
                                                        Update
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