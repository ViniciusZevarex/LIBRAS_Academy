@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')


<main class="content">
        @foreach ($course as $c)
        <h4 class="center-align">Unidades de {{ $c->title }}</h4>
        <div class="divider"></div>

        <div class="row">
            <!-- <div class="col s8 m8 offset-m2">
                <ul class="collapsible popout z-depth-2">
                    <li>
                        <div class="collapsible-header">                        
                            <h6 class="unit-title"><strong>Titulo da Unidade - Conteúdo</strong></h6>
                            <div class="progress col s4 m4 green lighten-4">
                                <div class="determinate green darken-1" style="width: 70%"></div>
                                <div>70%</div>
                            </div>
                        </div>
                        <div class="collapsible-body">                      
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <div>
                                        Alvin<a href="#!" class="secondary-content">
                                        <i class="material-icons">send</i></a>
                                    </div>
                                </li>
                            </ul>                   
                        </div>
                    </li>
                </ul>
            </div> -->
        
            @endforeach
            
            <a class="btn green darken-1 waves-effect waves-light col s8 m8 offset-m2" href="{{ route('create_units', ['course' => $c->CodCourse ]) }}">
                Adicionar Unidades
                <i class="material-icons right">add_circle_outline</i>
            </a>
        </div>      
    </main>
@endsection