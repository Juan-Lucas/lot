<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>AJOUT D'UN EVENEMENT</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" wire:submit.prevent="save" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Titre</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input wire:model="title" id="title" type="text"
                                               class="form-control" name="title" autofocus>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Localisation</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-map"></i>
                                            </div>
                                        </div>
                                        <input wire:model="localisation" type="text" name="localisation"
                                               class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heure</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <input wire:model="heure" type="number" name="heure"
                                               class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Photo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-file-image"></i>
                                            </div>
                                        </div>
                                        <input wire:model="image" type="file" name="image" class="form-control">
                                    </div>
                                    {{--                                    <div wire:loading.delay.long wire:target="image">Chargement...</div>--}}
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Description</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-align-left"></i>
                                            </div>
                                        </div>
                                        <input wire:model="description" type="text" name="description" class="form-control">
                                    </div>
                                </div>
                            </div>

                            {{--                    </div>--}}

                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    ENREGISTRER EVENEMENT
                                </button>
                            </div>
                        </form>
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
