@extends('template.teste', ['menu' => "Projeto Multidisciplinar: ", "submenu" => "Principal"])

@section('titulo') Desenvolvimento Web @endsection

@section('conteudo')

<div class="row d-flex justify-content-center">
    <div class="card bg-dark border-0" style="width: 20rem;">
        <img src="./img/logomedusa.png" class="img-fluid " alt="...">
    </div>
</div>

<div class="row">

            <hr class="border bg-body border-3 opacity-100">
            
            <div class="col d-flex justify-content-center">
                <div class="card bg-dark border-0" style="width: 18rem;">
                    <div class="card-body ">
                        <p class="card-text">Atividades</p>
                    </div>
                    <a href="{{route('site.atividade')}}"><img src="{{asset('img/atividade.png')}}" class="card-img-top" alt="..."></a>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card bg-dark border-0" style="width: 18rem;">
                    <div class="card-body">
                            <p class="card-text">Integrantes</p>
                    </div>
                    <a href="{{route('site.integrante')}}"><img src="{{asset('img/integrante.png')}}" class="card-img-top" alt="..."></a>
                        
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card bg-dark border-0" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Materiais</p>
                    </div>
                    <a href="{{route('site.material')}}"><img src="{{asset('img/material.png')}}" class="card-img-top" alt="..."></a>
                </div>
            </div>
</div>
@endsection