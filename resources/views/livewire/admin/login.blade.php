<div>
    {{-- <div class="loader"></div> --}}
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>CONNEXION</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" wire:submit.prevent="login" class="needs-validation">

                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Nom d'utilisateur</label>
                                        <input wire:model="name" name="name" type="text" class="form-control">
                                        <div class="invalid-feedback">
                                            Merci de renseigner votre nom d'utilisateur
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input wire:model="password" name="password" type="password"
                                            class="form-control">
                                        <div class="invalid-feedback">
                                            Merci de renseigner votre mot de passe
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Se connecter
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @elseif (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
