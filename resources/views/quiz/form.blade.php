@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')

<main class="content">
    <h4 class="center-align">Cadastrar Quiz</h4>
    <div class="divider"></div>

        <div class="row">
            <div class="col s12 m4 offset-m4  panel-form">
                <div class="card-panel center-panel row">
                    {{-- <h2><a href="#" id="addScnt">Add Another Input Box</a></h2> --}}
                    <form  id="form_quiz" class="col s12" method="POST" action="{{ route('create_quiz') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="CodModule" value="">
                        <div class="row">
                            <div class="file-field input-field">
                              <div>
                                <label for="midia">Clique aqui para adicionar uma Mídia(Se necessário): </label>
                                <img class="img-upload" src="{{ asset('imgs/img_website_style/upload.png') }}">
                                <input id="midia" type="file" name="gif_signal">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <select name="CodModule">
                                    <option value="{{ $module->CodModule }}">{{ $module->title }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="title" type="text" name="pergunta">
                                <label for="title">Pergunta:</label>
                            </div>
                        </div>

                        <div class="input_fields_wrap">
                                <div class='row' id='alternativa_correta'>
                                    <div class='input-field col s12'>
                                        <input id='title' type='text' name='alternativa_correta'>
                                        <label for="alternativa_correta">Alternativa Correta: </label>
                                    </div>
                                </div>
                            <!-- Alternativas -->
                        </div>

                        <button type="button" class="btn add_field_button">+ Alternativas</button>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="page" type="number" name="page">
                                <label for="page">Número de Página na Timeline:</label>
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

</main>


{{-- <script>
    $(function() {
        var scntDiv = $('#form_quiz');
        var i = $('#form_quiz div').size() + 1;

        $('#addScnt').live('click', function() {
                $("<div class='row' id='alternativa'><div class='input-field col s12'><input id='title' type='text' name='alternativa'><label for='title'>Alternativa:</label></div></div>").appendTo(scntDiv);
                i++;
                return false;
        });

        $('#remScnt').live('click', function() {
                if( i > 2 ) {
                    $(this).parents('p').remove();
                    i--;
                }
                return false;
        });
});

</script> --}}

@endsection
