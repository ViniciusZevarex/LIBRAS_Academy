@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')


<main class="content">
        @foreach ($course as $c)
        <h4 class="center-align">Unidades de {{ $c->title }}</h4>
        <div class="divider"></div>

        <div class="row">
            @foreach($c->units as $unit)
                <div class="col s8 m8 offset-m2">
                    <ul class="collapsible popout z-depth-2">
                        <li>
                            <div class="collapsible-header">                        
                            <h6 class="unit-title"><strong>{{ $unit->title }}</strong></h6>
                            </div>
                            <div class="collapsible-body">                      
                                <ul class="collection">
                                    <li class="collection-item avatar">
                                        <div>
                                            <a class="btn green darken-1 waves-effect waves-light col s8 m8 offset-m2" href="{{ route('units_showForm', ['unit' => $unit->CodUnit ]) }}">
                                                    Adicionar Modulos
                                                    <i class="material-icons right">add_circle_outline</i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>                   
                            </div>
                        </li>
                    </ul>
                </div>
        
            @endforeach
            
            <a class="btn green darken-1 waves-effect waves-light col s8 m8 offset-m2" href="{{ route('modules_showForm', ['course' => $c->CodCourse ]) }}">
                Adicionar Unidades
                <i class="material-icons right">add_circle_outline</i>
            </a>
        </div>
        @endforeach      
    </main>
@endsection