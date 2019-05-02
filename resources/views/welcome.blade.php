@extends('layouts.master')

@section('nav')
@include('components.navbarWelcome')
@endsection

@section('conteudo-view')
<header class="hero parallax-container" id="inicio">
  <div class="inner-hero section no-pad-bot">
    <div class="container inner-hero">
      <h1 class="title-hero anime-scroll-left">      
        <img src="{{asset('imgs/img_website_style/white-logo.png')}}" alt="">LIBRAS Academy</h1>
        <h2 class="title-hero anime-scroll-right">Abra sua mente para uma nova forma de comunicação</h2>
      </div>
    </div>
    <div class="parallax">
      <img src="{{asset('imgs/img_website_style/hero_image.jpg')}}">
    </div>
  </header>

  <!-- main-container -->

  <section class="container" id="o_que_e">
    <div class="row">
      <div class="col s12 m12">
        <h2 class="text-center anime-scroll-left"><strong>O que é o LIBRAS Academy?</strong></h2>
        <p class="text text-justify anime-scroll-right">
          O LIBRAS Academy é um projeto que tem como principal objetivo facilitar a disseminação da Lingua Brasileira de Sinais (LIBRAS)
          entre os ouvintes, trazendo um curso básico do idioma em uma plataforma online e interativana com a expectativa de ajudar os ouvintes na comunicação com os surdos. Esse curso é voltado para todo público ouvinte que deseja aprender LIBRAS e espera-se
          que esse curso seja utilizado, principalmente, em âmbitos escolares para incluir surdos na educação sem que haja defasagem na 
          comunicação.
        </p>
      </div>
    </div>
  </section>
  
  <div class="parallax-container section-parallax" id="como_funciona">
    <div class="section">
      <div class="container">
        <h2 class="text-center anime-scroll-left">Como funciona?</h2>

        <div class="row">
          <div class="col s12 m4">
            <div class="card-panel white text-center anime-scroll-right">
              <div class="icon-container">
                <i class="large material-icons">language</i>
              </div>
              <span class="text black-text">
                Todo o conteúdo será desenvolvido com uma professora de LIBRAS.
              </span>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card-panel white text-center anime-scroll-right">
              <div class="icon-container">
                <i class="large material-icons">devices</i>
              </div>
              <span class="text black-text">
                O curso estará na internet e poderá ser acessado em qualquer lugar a qualquer momento.   
              </span>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card-panel white text-center anime-scroll-right">
              <div class="icon-container">
                <i class="large material-icons">hearing</i>
              </div>
              <span class="text black-text">
                Todas as etapas do curso será produzida buscando facilitar a familarização da LIBRAS nos ouvintes.  
              </span>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="parallax">
      <img src="{{asset('imgs/img_website_style/section1_welcomepage.jpg')}}">
    </div>
  </div>

  <section class="container" id="custo">
    <div class="row">
      <div class="col s12 m12">
        <h2 class="text-center anime-scroll-left"><strong>Quanto tudo isso custará?</strong></h2>
        <p class="text text-center anime-scroll-right">
         <i class="large material-icons">tag_faces</i>
         <br><br>
         Todo o acesso do curso será gratuito!<br>Você só pagará se quiser a emissão de um certificado.
       </p>
     </div>
   </div>
 </section>
 
 <div class="parallax-container section-parallax" id="cadastro">
  <div class="section">
    <div class="container">
      <h2 class="text-center main-text-section anime-scroll-left"><STRONG>FAÇA PARTE DO LIBRAS ACADEMY</STRONG></h2>
      <h3 class="text-center anime-scroll-right"><a class="waves-effect waves-light btn pulse green darken-1" href="{{ route('register') }}">Cadastrar</a></h3>
      <h3 class="text-center anime-scroll-right"><a class="waves-effect waves-light btn pulse green darken-1" href="{{ route('login') }}">Login</a></h3>
    </div>
  </div>
  <div class="parallax">
    <img src="{{ asset('imgs/img_website_style/section2_welcomepage.jpg')}}">
  </div>
</div>
@endsection

@section('footer')
<footer class="page-footer green darken-1">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2019 Copyright LIBRAS Academy
    </div>
  </div>
</footer>
@endsection