@extends('layouts.master')

@section('conteudo-view')
<main class="content">
    <div class="row timeline-element">
            <div class="col s12 m4 offset-m4 card-center">
                <div class="card-panel card-course-element row">

                    <h3 class="text-center">{{ $data->dataElement->title }}</h3>
                    <img class="image-card-timeline" src="{{ url('/storage/' . $data->dataElement->video) }}">

                    <div class="divider"></div>
                    <p class="p-card-element">{{ $data->dataElement->description }}</p>
                    <a class="btn waves-effect waves-light col s6 m4 l2" href="{{ route('show_timeline', ['module' => $_GET['module'],'page' => $data->Position - 1]) }}">Voltar</a>
                    <div class="col s12 m4 l8"></div>
                    <a class="btn waves-effect waves-light col s6 m4 l2" href="{{ route('show_timeline', ['module' => $_GET['module'],'page' => $data->Position + 1]) }}">Próximo</a>
                </div>
            </div>
    </div>
</main>
@endsection
