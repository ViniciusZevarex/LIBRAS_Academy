@extends('layouts.master')

@section('conteudo-view')
{{-- @dd($data) --}}
<main class="content">
    @if(session()->has('incorrect'))
        <div class="card-panel red lighten-1">{{ session()->get('incorrect') }}</div>
    @endif

    <div class="row timeline-element">
        <div class="col s12 m4 offset-m4 card-center">
            <div class="card-panel card-course-element row">
                <h3 class="text-center">{{ $data->dataElement->Question }}</h3>
                @if($data->dataElement->Video != Null)
                    <img class="image-card-timeline" src="{{ url('/storage/' . $data->dataElement->Video) }}">
                @endif
                <div class="col s12 m12">
                    <form class="row" action="{{ route('correct_quiz') }}" method="post">
                        @csrf

                        <h5 class="text-center">Alternativas: </h5>
                        @foreach ($data->dataElement->alternatives as $alternative)
                            <p class="element-center">
                                <label>
                                    <input name="alternative" type="radio" value="{{ $alternative->correct }}" />
                                    <span>{{ $alternative->description }}</span>
                                </label>
                            </p>
                            <input name="module" type="hidden" value="{{ $_GET['module']}}">
                            <input name="page" type="hidden" value="{{ $_GET['page'] }}">
                        @endforeach

                        <button class="btn waves-effect waves-light col s12 m12">Responder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
