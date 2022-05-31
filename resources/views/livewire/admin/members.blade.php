<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                @if (session()->has('saved'))
                    <div class="alert alert-success">
                        {{ session('saved') }}
                    </div>
                @elseif(session()->has('updated'))
                    <div class="alert alert-success">
                        {{ session('updated') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>LISTE DES MEMBRES </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Profession</th>
                                    <th>Age</th>
                                    <th>Sexe</th>
                                    <th>N° membre</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->nomcomplet }}</td>
                                        <td>{{ $member->profession}}</td>
                                        <td>{{ $member->age}}</td>
                                        <td>{{ $member->sexe}}</td>
                                        <td class="badge badge-{{ $member->numero_membre == null ? 'danger' : 'success' }}">{{ $member->numero_membre == null ? 'Pas encore' : $member->numero_membre}}</td>
                                        <td>{{ date_format($member->created_at, "d - m - Y") }}</td>
                                        <td>
                                            @if($member->numero_membre == null)
                                                <a href="#" class="btn btn-icon icon-left btn-success"><i
                                                            class="fa fa-edit" aria-hidden="true"></i>
                                                    Attribuer</a>
                                            @else
                                                <a href="#" class="btn btn-icon icon-left btn-primary"><i
                                                            class="fa fa-info" aria-hidden="true"></i>
                                                    Détails</a>
                                            @endif
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

