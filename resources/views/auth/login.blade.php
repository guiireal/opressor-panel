@extends('layouts.login')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="full-page section-image" data-image="{{asset("images/full-screen-image-2.jpg")}}">
        <div class="content">
            <div class="container">
                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="text-center">
                        <a class="navbar-brand" href="#">
                            <span class="text-white">⚕️ SISTEMA OPRESSOR ⚕️</span>
                            <br/>
                            <small class="text-white ml-md-3">Queremos os melhores, não os seguidores.</small>
                        </a>
                    </div>
                    <p class="text-white"></p>
                    <form class="form" method="post" action="{{route('login')}}">
                        @csrf
                        <div class="card card-login bg-dark">
                            <div class="card-header bg-dark">
                                <h3 class="header text-center text-white">Painel 📊</h3>
                            </div>
                            <div class="card-body ">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Informe seu e-mail" required
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" id="password" name="password" placeholder="Informe sua senha" required
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="form-check-sign"></span>
                                                Manter conectado
                                            </label>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class='text-danger text-center'>
                                            @error('email')
                                                E-mail inválido!
                                            @enderror
                                            @error('password')
                                                Senha inválida!
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-wd">Login</button>
                            </div>
                            <div class="ml-auto mr-auto">
                                <a href="{{route('password.request')}}">Esqueceu a senha?</a>
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
