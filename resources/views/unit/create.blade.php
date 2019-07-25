

@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')

<main class="content">
        <h4 class="center-align">Cadastrar Curso</h4>
        <div class="divider"></div>
        <div class="row">

        <div class="row">
            <div class="col s12 m4 offset-m4 panel-form">
            <div class="card-panel center-panel">
                <h4 class="center-align"><img src="{{asset('imgs/img_website_style/black-logo.png')}}" class="form-logo"></h4>

                <form  class="col s12" method="POST" action="{{ route('create_units') }}">
                    @csrf
                    {{-- titulo --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="CodCourse">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->CodCourse }}">{{ $course->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="title">
                            <label for="titulo">Título</label>
                        </div>
                    </div>


                    <div class="row">              
                        <button class="btn waves-effect waves-light col s12 m12" type="submit" name="action">Cadastrar
                        <i class="material-icons right">create</i>
                        </button>
                    </div>
        
                </form>
            </div>
            </div>
        </div>
            
            
        </div>      
    </main>
@endsection