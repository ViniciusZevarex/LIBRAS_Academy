@extends('layouts.master')

@section('conteudo-view')
<div class="row">
  <div class="col s12 m4 offset-m4 panel-form">
    <div class="card-panel center-panel">
      <div class="col s12">
       <!--       <div class="container"> -->
        <h4 class="center-align"><img src="{{asset('imgs/img_website_style/black-logo.png')}}" class="form-logo"></h4>
        <h4 class="center-align">Registrar-se</h4>
        <div class="divider"></div>

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="row">
            <div class="input-field col s12">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
              <label for="name">{{ __('Name') }}</label>
              @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              <label for="email">{{ __('E-Mail Address') }}</label>
              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              <label for="password">{{ __('Password') }}</label>
              @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              <label for="password-confirm">{{ __('Confirm Password') }}</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn btn-primary col s12">
                {{ __('Register') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection