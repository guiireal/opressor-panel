@extends('layouts.login')

@section('content')
    <div class="wrapper wrapper-full-page">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper mx-auto">
                    <a class="navbar-brand mt-5" href="#"><img src="{{asset('images/alien-monster.svg')}}" width="40" alt="alien">Iꈤᐯꍏꌗꀤꂦꈤ
                        Mꍏꌗ꓄ꍟꋪ<img src="{{asset('images/alien-monster.svg')}}" width="40" alt="alien"></a>
                </div>
            </div>
        </nav>
        <div class="full-page section-image" data-image="{{asset("images/full-screen-image-2.jpg")}}">
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="post" action="{{ route('password.email') }}">
                            @csrf
                            <div class="card card-login card-hidden bg-dark">
                                <div class="card-header bg-dark ">
                                    <h3 class="header text-center text-white">Reset de Senha 🔐</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Informe seu e-mail" autocomplete="email" autofocus
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <p class='text-danger text-center'>
                                                @error('email')
                                                    E-mail inválido!
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    @if (!session('status'))
                                        <button type="submit" class="btn btn-success btn-wd">Enviar E-mail de Redefinição</button>
                                    @else
                                        <div class="alert alert-success" role="alert">
                                            E-mail enviado com sucesso! <br/> Verifique sua caixa de entrada ou spam!
                                        </div>
                                    @endif
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
