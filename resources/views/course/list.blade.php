@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')
    <h4 class="center-align">Lista de Cursos</h4>
    <div class="divider"></div>
    @foreach($courses as $course)
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content">
                    <span class="card-title">{{ $course->title }}</span>
                    <p>{{ $course->description }}</p>
                    </div>
                    <div class="card-action">
                    <a class="waves-effect waves-light btn" href="{{ route('course_dashboard', ['course' => $course->CodCourse]) }}">Ver conteúdo</a>
                    <a class="waves-effect waves-light btn" href="#">Inscrever-se</a>
                    <a class="waves-effect waves-light btn" href="{{ route('course_addUnits', ['course' => $course->CodCourse]) }}"><i class="large material-icons">edit</i></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection