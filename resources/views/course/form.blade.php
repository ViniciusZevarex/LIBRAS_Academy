@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')
<?php 
if(isset($course)){
    $action = route('course_edit');
}else{
    $action = route('course_store');
}
?>
<main class="content">
        <h4 class="center-align">Cadastrar Curso</h4>
        <div class="divider"></div>
        <div class="row">

        <div class="row">
            <div class="col s12 m4 offset-m4 panel-form form-crud-elements">
            <div class="card-panel center-panel row">
                <h4 class="center-align"><img src="{{asset('imgs/img_website_style/black-logo.png')}}" class="form-logo"></h4>

                <form  class="col s12" method="POST" action="{{ $action }}">
                    @csrf
                    
                    <input type="hidden" name="CodCourse" value="{{ isset($course) ? $course[0]->CodCourse : "" }}">
                    {{-- titulo --}}
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="title" value="{{ isset($course) ? $course[0]->title : "" }}" >
                            <label for="titulo">Título</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description">{{ isset($course) ? $course[0]->description : "" }}</textarea>
                            <label for="textarea2">Descrição</label>
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
