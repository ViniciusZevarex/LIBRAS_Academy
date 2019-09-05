@extends('layouts.master')

@include('components.navbar_dashboard')

@section('conteudo-view')

<main class="content">
    <h4 class="center-align">Cadastrar Vocabulário</h4>
    <div class="divider"></div>

        <div class="row">
            <div class="col s12 m4 offset-m4  panel-form">
                <div class="card-panel center-panel row">
                    <form  class="col s12" method="POST" action="{{ route('create_vocabulary') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="CodModule" value="">
                        <div class="row">
                            <div class="file-field input-field">
                              <div>
                                <label for="midia">Clique aqui para adicionar um GIF do Sinal: </label>
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
                                <input id="title" type="text" name="meaning">
                                <label for="title">Significado:</label>
                            </div>
                        </div>

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
@endsection