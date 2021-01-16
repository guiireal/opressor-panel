@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Consulta CPF</h2>
    <div class="row mt-5">
        <div class="col-4"></div>
        <div class="col-sm-12 col-md-4">
            <form method="post" class="mb-4">
                @csrf
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" value="{{isset($cpf) ? $cpf : ''}}"
                        placeholder="Informe o CPF" class="form-control">
                </div>
                <button id="search-document" type="submit" class="btn btn-success dark-shadow"><i
                        class="fa fa-search mr-2"></i>Buscar</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
    @isset($result)
    @if(!isset($result['error']))
    <div class="row">
        <div class="col-2"></div>
        <div class="col-sm-12 col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header" style="color: #4ccf6a">✅ Busca Efetuada com Sucesso!</div>
                <div class="card-body">
                    <div class="accordions" id="accordion">
                        <div class="card text-white bg-dark">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a data-target="#personal-data" href="#" data-toggle="collapse" class="text-white">
                                        Dados Pessoais
                                        <b class="caret"></b>
                                    </a>
                                </h4>
                            </div>
                            <div id="personal-data" class="card-collapse collapse">
                                <div class="card-body">
                                    <p class="card-text"><strong>Nome: </strong>{{$result['name']}}</p>
                                    <p class="card-text"><strong>CPF: </strong>{{$result['document']}}</p>
                                    <p class="card-text"><strong>Data de Nascimento: </strong>{{$result['birthday']}}
                                    </p>
                                    <p class="card-text"><strong>Nome da Mãe: </strong>{{$result['mother_name']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card text-white bg-dark">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a data-target="#addresses-data" href="#" data-toggle="collapse" class="text-white">
                                        Endereços
                                        <b class="caret"></b>
                                    </a>
                                </h4>
                            </div>
                            <div id="addresses-data" class="card-collapse collapse">
                                <div class="card-body">
                                    <p class="card-text"><strong>Rua: </strong>{{$result['street_name']}}</p>
                                    <p class="card-text"><strong>Número: </strong>{{$result['number']}}</p>
                                    <p class="card-text"><strong>Complemento: </strong>{{$result['complement']}}</p>
                                    <p class="card-text"><strong>Bairro: </strong>{{$result['neighborhood']}}</p>
                                    <p class="card-text"><strong>Cidade: </strong>{{$result['city']}}</p>
                                    <p class="card-text"><strong>Estado: </strong>{{$result['uf']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card text-white bg-dark">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a data-target="#contacts" href="#" data-toggle="collapse" class="text-white">
                                        Contato
                                        <b class="caret"></b>
                                    </a>
                                </h4>
                            </div>
                            <div id="contacts" class="card-collapse collapse">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    @else
    <div class="row">
        <div class="col-2"></div>
        <div class="col-sm-12 col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header mb-2" style="color: #ef5350">❌ {{$result['error']}}</div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    @endif
    @endisset
</div>
@endsection
