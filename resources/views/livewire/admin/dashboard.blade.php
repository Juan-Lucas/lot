<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Formations</h5>
                                        <h2 class="mb-3 font-18">{{ count($formations) }}</h2>
                                        <p class="mb-0"><span class="col-green">{{ count($formations) }}</span>
                                            Encours</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('/assets/admin/img/banner/1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15"> Evenements</h5>
                                        <h2 class="mb-3 font-18">{{ count([]) }}</h2>
                                        <p class="mb-0"><span class="col-orange">{{ count([]) }}</span>
                                            En ordre</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('/assets/admin/img/banner/2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Photos</h5>
                                        <h2 class="mb-3 font-18">{{ count([]) }}</h2>
                                        <p class="mb-0"><span class="col-green">{{ count([]) }}</span>
                                            Disponibles</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('/assets/admin/img/banner/3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Services</h5>
                                        <h2 class="mb-3 font-18">{{ count([]) }}</h2>
                                        <p class="mb-0"><span class="col-green">{{ count([]) }}</span>
                                            Disponibles</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('/assets/admin/img/banner/4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>LISTE DES FORMATIONS </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Durée</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($formations as $formation)
                                    <tr>
                                        <td>{{ $formation->id }}</td>
                                        <td>{{ $formation->title }}</td>
                                        <td>{{ $formation->category_formation->name}}</td>
                                        <td>{{ $formation->duration}}h</td>
                                        {{--                                        <td>{{ substr($formation->description, 0, 100)}}</td>--}}
                                        <td>{{ date_format($formation->created_at, "d - m - Y") }}</td>
                                        <td>
                                            <a href="{{ route('admin.formations.show', $formation) }}" class="btn btn-icon icon-left btn-primary"><i
                                                    class="fa fa-info" aria-hidden="true"></i>
                                                Détails</a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
