@extends('layouts.login')

@section('content')
    <div class="wrapper wrapper-full-page">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper d-flex flex-column mx-md-auto mt-5">
                    <a class="navbar-brand text-center" href="#">
                        <span>⚕️ OPRESSOR LABS ⚕️</span>
                        <br/>
                        <small class="text-white text-center">By: Sistema Opressor</small>
                    </a>
                    <p class="text-white">Queremos os melhores, não os seguidores.</p>
                </div>
            </div>
        </nav>
        <div class="full-page section-image" data-color="black"
             data-image="{{asset("images/full-screen-image-2.jpg")}}">
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="post" action="{{ route('password.update') }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            @csrf
                            <div class="card card-login card-hidden bg-dark">
                                <div class="card-header bg-dark ">
                                    <h3 class="header text-center text-white">Nova Senha 🔑</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ $email ?? old('email') }}"
                                               placeholder="Informe seu e-mail" autocomplete="email" autofocus
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" id="password" name="password"
                                               placeholder="Informe uma nova senha" class="form-control"
                                               autocomplete="new-password" required minlength="8" maxlength="32">
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirmar Senha</label>
                                        <input type="password" id="password-confirm" name="password_confirmation"
                                               placeholder="Confirmar a nova senha" autocomplete="new-password" required
                                               minlength="8" maxlength="32" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <p class='text-danger text-center'>
                                            @error('email')
                                            E-mail inválido!
                                            @enderror
                                            @error('password')
                                            As senhas não conferem!
                                            @enderror
                                        </p>
                                    </div>

                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-wd">Redefinir Senha</button>
                                </div>
                                <div class="ml-auto mr-auto">
                                    <a href="{{route('login')}}">Voltar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="copyright text-center mt-5 text-white">
                        <a href="#">{{config('app.name')}}</a>, todos os direitos reservados
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
