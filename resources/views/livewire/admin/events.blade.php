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
                        <h4>LISTE DES EVENEMENTS </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titre</th>
                                    <th>Localisation</th>
                                    <th>Heure</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->localisation}}</td>
                                        <td>{{ $event->heure}}h</td>
                                        <td>{{ date_format($event->created_at, "d - m - Y") }}</td>
                                        <td>
                                            <a href="{{ route('admin.formations.show', $event) }}" class="btn btn-icon icon-left btn-primary"><i
                                                        class="fa fa-info" aria-hidden="true"></i>
                                                Détails</a>
                                            <a href="{{ route('admin.formations.edit', $event) }}" class="btn btn-icon icon-left btn-success"><i
                                                        class="fa fa-edit" aria-hidden="true"></i>
                                                Modifier</a>
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

