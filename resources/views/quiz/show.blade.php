@extends('layouts.master')

@section('conteudo-view')

<main class="content">
    <div class="row timeline-element">
        <div class="col s12 m4 offset-m4 card-center">
            <div class="card-panel card-course-element row">
                <h3 class="text-center">Título da Explicação</h3>

                <img class="image-card-timeline" src="{{ asset('imgs/img_website_style/upload.png') }}">

                <div class="divider"></div>
                <p class="p-card-element">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam, labore sunt odit assumenda inventore atque neque ipsum beatae corporis error ut? Animi velit eum ex suscipit, totam facilis reprehenderit.</p>
                <button class="btn waves-effect waves-light col s6 m4 l2">Voltar</button>
                <div class="col s12 m4 l8"></div>
                <button class="btn waves-effect waves-light col s6 m4 l2">Próximo</button>
            </div>
        </div>
    </div>
</main>
@endsection
