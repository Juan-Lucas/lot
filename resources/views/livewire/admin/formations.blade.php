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
                                        <td>{{ date_format($formation->created_at, "d - m - Y") }}</td>
                                        <td>
                                            <a href="{{ route('admin.formations.show', $formation) }}" class="btn btn-icon icon-left btn-primary"><i
                                                    class="fa fa-info" aria-hidden="true"></i>
                                                Détails</a>
                                            <a href="{{ route('admin.formations.edit', $formation) }}" class="btn btn-icon icon-left btn-success"><i
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

